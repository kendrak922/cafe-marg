<?php
/**
 * Plugin Name: Bit Form Email Editor Promise
 * Description: Keeps WordPress TinyMCE on the native Promise while it loads on Bit Form screens, so the email template editor does not crash after Bluebird has replaced window.Promise.
 * Version: 1.0.0
 *
 * @package CafeMarg
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bit Form admin screen (admin.php?page=bitform).
 */
function cafe_marg_is_bitform_admin_screen() {
	if ( ! is_admin() || ! isset( $_GET['page'] ) ) {
		return false;
	}

	return 'bitform' === sanitize_key( wp_unslash( $_GET['page'] ) );
}

/**
 * Save the native Promise before enqueued admin head scripts run.
 *
 * Bluebird's browser build replaces window.Promise as soon as it loads.
 * Printing this first gives us the original constructor to hand back to TinyMCE.
 */
function cafe_marg_capture_native_promise() {
	if ( ! cafe_marg_is_bitform_admin_screen() ) {
		return;
	}

	echo "<script id=\"cafe-marg-native-promise\">window.__cafeMargNativePromise=window.Promise;</script>\n";
}
add_action( 'admin_print_scripts', 'cafe_marg_capture_native_promise', 0 );

/**
 * WordPress TinyMCE snapshots window.Promise while wp-tinymce.js evaluates
 * (`de = window.Promise ? window.Promise : polyfill`). Bit Form then loads
 * its admin bundle, whose core-js Promise polyfill rewrites that constructor.
 * The email template editor calls TinyMCE's image upload with the snapshot
 * (`new de(...)`). When the snapshot is Bluebird, Bluebird throws
 * "the promise constructor cannot be invoked directly" and Bit Form's error
 * boundary shows "Something went wrong."
 *
 * Swap in the native Promise only for the duration of that script, then put
 * the previous constructor back so the rest of the page is unchanged.
 *
 * @param string $tag    Script tag HTML.
 * @param string $handle Script handle.
 * @param string $src    Script URL.
 * @return string
 */
function cafe_marg_restore_native_promise_before_tinymce( $tag, $handle, $src ) {
	if ( 'tinymce_js' !== $handle || false === strpos( $src, 'wp-tinymce.php' ) ) {
		return $tag;
	}

	if ( ! cafe_marg_is_bitform_admin_screen() ) {
		return $tag;
	}

	$before = <<<'JS'
<script id="cafe-marg-restore-native-promise">
(function () {
  var nativePromise = window.__cafeMargNativePromise;
  function isNative(ctor) {
    return typeof ctor === "function" && Function.prototype.toString.call(ctor).indexOf("[native code]") !== -1;
  }
  if (!isNative(nativePromise) || window.Promise === nativePromise) {
    return;
  }
  window.__cafeMargPromiseBeforeTinymce = window.Promise;
  window.Promise = nativePromise;
})();
</script>
JS;

	$after = <<<'JS'
<script id="cafe-marg-restore-previous-promise">
(function () {
  if (typeof window.__cafeMargPromiseBeforeTinymce === "function") {
    window.Promise = window.__cafeMargPromiseBeforeTinymce;
  }
})();
</script>
JS;

	return $before . "\n" . $tag . "\n" . $after . "\n";
}
add_filter( 'script_loader_tag', 'cafe_marg_restore_native_promise_before_tinymce', 20, 3 );
