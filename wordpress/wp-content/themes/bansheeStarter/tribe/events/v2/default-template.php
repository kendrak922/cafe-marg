<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();

$block_content = '<!-- wp:acf/page-banner {"name":"acf/page-banner","data":{"theme_colors":"Green","_theme_colors":"field_5f3f4d7639983","background_color":"","_background_color":"field_688a672cab2de","background_image":"","_background_image":"field_688a670e7de72","image_position":"top center","_image_position":"field_678808b642d89","image_position_clone":"","_image_position_clone":"field_688a670e7dfd8","container_width":"full","_container_width":"field_67f81ebaf7a3e","width":"","_width":"field_688a670e7e0c1","gap":"20","_gap":"field_688a670e7e13b","shape":"Round","_shape":"field_688a675f718fe"},"mode":"preview"} -->
<!-- wp:acf/spacer {"name":"acf/spacer","data":{"spacer_height_large":"200px","_spacer_height_large":"field_67eaf3dd13fa4","spacer_height_medium":"150px","_spacer_height_medium":"field_67eaf48513fa6","spacer_height_small":"100px","_spacer_height_small":"field_67eaf48213fa5"},"mode":"preview"} /-->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|Neutral"}}}},"textColor":"Neutral"} -->
<h1 class="wp-block-heading has-text-align-center has-neutral-color has-text-color has-link-color">Events & Activities</h1>
<!-- /wp:heading -->
<!-- /wp:acf/page-banner -->';
    
echo do_blocks($block_content);
echo tribe(Template_Bootstrap::class)->get_view_html();

get_footer();
