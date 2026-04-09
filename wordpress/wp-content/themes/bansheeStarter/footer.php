<?php

use Lean\Load;

/**
 * The template for displaying the footer
 */
global $themeGlobals;

// organism variables
$footerData = [
    'logo'        => get_field('footer_logo', 'options') ? get_field('footer_logo', 'options') : get_field('site_logo', 'options'), // media object
    'nav'        => [
        'theme_location'    => 'footer-menu',
        'depth'                => 2,
        'menu_class'        => 'menu menu--footer',
        'walker'            => new bansheeStarter_nav_walker_footer()
    ]
];

$button = get_field('button', 'options');
$socials = get_field('socials', 'options');
$footer_text = get_field("footer_text", 'option');
$footer_email = get_field("email", 'option');
$footer_phone = get_field("phone", 'option');
$footer_link = get_field("footer_link", 'option');


?>

<?php /*****
       * END: MAIN CONTENT 
       ******/ ?>
</main>
<?php // Opened in header.php 
?>

<footer id="footer" class="footer">
    <?php /*****
           * FOOTER MAIN 
           ******/ ?>
    <section class="footer__main">
        <div class="container container--wide">
        <div class="footer__logo">
                <a href="https://cafe-marg.com"  aria-label="Link to homepage">
                    <?php if (get_field('global_imagery', 'options')['footer_logo']) : $logo = get_field('global_imagery', 'options')['footer_logo']; ?>
                            <img height="166px" width="500px" src="<?php echo $logo['url']; ?>" alt="Banshee Starter Logo">
                    <?php elseif (file_exists($themeGlobals['theme_rel'] . '/assets/dist/imgs/logo-footer.png')) : ?>
                            <img height="166px" width="500px" src="<?php echo $themeGlobals['theme_url']; ?>/assets/dist/imgs/logo-footer.png" alt="Banshee Starter Logo" class="u-lg-block" />               
                    <?php else : ?>
                            <strong><?php echo bloginfo('title'); ?></strong>
                    <?php endif; ?>
                </a>
                <div id="mc_embed_shell">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
  <style type="text/css">
        #mc_embed_signup{background:#fff; false;clear:left; font:14px Helvetica,Arial,sans-serif; width: 600px;}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
    <form action="https://cafe-marg.us15.list-manage.com/subscribe/post?u=2a428e0ef885bb24ed1724ac3&amp;id=570a961fc1&amp;f_id=00c976e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
        <div id="mc_embed_signup_scroll"><h2>Subscribe</h2>
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
            <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div><div class="mc-field-group"><label for="mce-SMSPHONE">SMS Phone Number <span class="asterisk">*</span></label><div class="" style="display: flex; border: 1px solid rgb(171, 176, 178);"><div style="display: flex;"><span style="padding-left: 0px; padding-right: 4px; align-self: center;"><div style="display: flex; align-content: flex-start; align-items: center; gap: 10px;"><div id="flag-display-SMSPHONE" style="display: flex; align-items: center; gap: 4px; cursor: pointer; padding-left: 8px; position: relative;"><span id="flag-emoji-SMSPHONE">🇺🇸</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none"><path d="M8.0096 11.5649C7.9219 11.5649 7.83506 11.5476 7.75407 11.5139C7.67307 11.4803 7.59951 11.431 7.5376 11.3689L3.54293 7.36289C3.48099 7.30091 3.43186 7.22733 3.39836 7.14636C3.36485 7.06539 3.34763 6.97862 3.34766 6.89099C3.34769 6.80336 3.36498 6.7166 3.39854 6.63565C3.4321 6.55471 3.48128 6.48117 3.54326 6.41923C3.60525 6.35729 3.67882 6.30816 3.75979 6.27466C3.84076 6.24115 3.92754 6.22392 4.01517 6.22395C4.10279 6.22398 4.18956 6.24127 4.2705 6.27484C4.35145 6.3084 4.42499 6.35758 4.48693 6.41956L8.01093 9.95289L11.5443 6.42956C11.6694 6.30464 11.8391 6.23457 12.016 6.23476C12.1928 6.23495 12.3623 6.30538 12.4873 6.43056C12.6122 6.55574 12.6823 6.72542 12.6821 6.90227C12.6819 7.07911 12.6114 7.24864 12.4863 7.37356L8.48026 11.3702C8.35532 11.4949 8.18607 11.5649 8.0096 11.5649Z" fill="#21262A"></path></svg><select id="country-select-SMSPHONE" name="SMSPHONE[country]" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer; z-index: 10; border: none; background: transparent; font-size: 0px; margin: 0px; padding: 0px; min-width: auto; max-width: none;"><option value="US" selected="">US+1</option></select></div></div></span></div><input type="text" name="SMSPHONE" class="REQ_CSS" id="mce-SMSPHONE" placeholder="+1 000 000 0000" value="" style="border: none;"></div><div class="mc-sms-phone-group"><div><input type="checkbox" name="mc-SMSPHONE-ack" id="mc-SMSPHONE-ack" value="true"></div><div class="small-meta"><span id="legal-text-SMSPHONE">Café Marguerite  - By providing your phone number and checking the box, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href="http://eepurl.com/jwt6k6" target="_blank">Terms</a> and <a href="http://eepurl.com/jwt6fg" target="_blank">Privacy Policy</a></span></div></div></div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display: none;"></div>
            <div class="response" id="mce-success-response" style="display: none;"></div>
        </div><div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_2a428e0ef885bb24ed1724ac3_570a961fc1" tabindex="-1" value=""></div><div class="clear"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe"></div>
    </div>
</form>
</div>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[7]='SMSPHONE';ftypes[7]='smsphone';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='COMPANY';ftypes[6]='text';fnames[8]='MMERGE8';ftypes[8]='date';fnames[9]='MMERGE9';ftypes[9]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
    // SMS Phone Multi-Country Functionality
    if(!window.MC) {
      window.MC = {};
    }
    window.MC.smsPhoneData = {
      defaultCountryCode: 'US',
      programs: [{"countryCode":"US","countryCallingCode":"+1","number":"+16514272256","imgSrc":"https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/forms-landing-pages/smsphone/flag-us.svg","requiredTemplate":"Café Marguerite  - By providing your phone number and checking the box, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>","optionalTemplate":"Café Marguerite  - By providing your phone number, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>"}],
      smsProgramDataCountryNames: [{"code":"US","name":"USA"}]
    };

    function getCountryUnicodeFlag(countryCode) {
       return countryCode.toUpperCase().replace(/./g, (char) => String.fromCodePoint(char.charCodeAt(0) + 127397))
    };

    // HTML sanitization function to prevent XSS
    function sanitizeHtml(str) {
      if (typeof str !== 'string') return '';
      return str
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#x27;')
        .replace(/\//g, '&#x2F;');
    }

    // URL sanitization function to prevent javascript: and data: URLs
    function sanitizeUrl(url) {
      if (typeof url !== 'string') return '';
      const trimmedUrl = url.trim().toLowerCase();
      if (trimmedUrl.startsWith('javascript:') || trimmedUrl.startsWith('data:') || trimmedUrl.startsWith('vbscript:')) {
        return '#';
      }
      return url;
    }

    const getBrowserLanguage = () => {
      if (!window?.navigator?.language?.split('-')[1]) {
        return window?.navigator?.language?.toUpperCase();
      }
      return window?.navigator?.language?.split('-')[1];
    };

    function getDefaultCountryProgram(defaultCountryCode, smsProgramData) {
      if (!smsProgramData || smsProgramData.length === 0) {
        return null;
      }

      const browserLanguage = getBrowserLanguage();

      if (browserLanguage) {
        const foundProgram = smsProgramData.find(
          (program) => program?.countryCode === browserLanguage,
        );
        if (foundProgram) {
          return foundProgram;
        }
      }

      if (defaultCountryCode) {
        const foundProgram = smsProgramData.find(
          (program) => program?.countryCode === defaultCountryCode,
        );
        if (foundProgram) {
          return foundProgram;
        }
      }

      return smsProgramData[0];
    }

    function updateSmsLegalText(countryCode, fieldName) {
      if (!countryCode || !fieldName) {
        return;
      }
      
      const programs = window?.MC?.smsPhoneData?.programs;
      if (!programs || !Array.isArray(programs)) {
        return;
      }
      
      const program = programs.find(program => program?.countryCode === countryCode);
      if (!program || !program.requiredTemplate) {
        return;
      }
      
      const legalTextElement = document.querySelector('#legal-text-' + fieldName);
      if (!legalTextElement) {
        return;
      }
      
      // Remove HTML tags and clean up the text
      const divRegex = new RegExp('</?[div][^>]*>', 'gi');
      const fullAnchorRegex = new RegExp('<a.*?</a>', 'g');
      const anchorRegex = new RegExp('<a href="(.*?)" target="(.*?)">(.*?)</a>');
      
      const template = program.requiredTemplate.replace(divRegex, '');
      
      

      legalTextElement.textContent = '';
      const parts = template.split(/(<a href=".*?" target=".*?">.*?<\/a>)/g);
      parts.forEach(function(part) {
        if (!part) {
          return;
        }
        const anchorMatch = part.match(/<a href="(.*?)" target="(.*?)">(.*?)<\/a>/);
        if (anchorMatch) {
          const linkElement = document.createElement('a');
          linkElement.href = sanitizeUrl(anchorMatch[1]);
          linkElement.target = sanitizeHtml(anchorMatch[2]);
          linkElement.textContent = sanitizeHtml(anchorMatch[3]);
          legalTextElement.appendChild(linkElement);
        } else {
          legalTextElement.appendChild(document.createTextNode(part));
        }
      });
          
    }

    function generateDropdownOptions(smsProgramData) {
      if (!smsProgramData || smsProgramData.length === 0) {
        return '';
      }
      
      return smsProgramData.map(program => {
        const flag = getCountryUnicodeFlag(program.countryCode);
        const countryName = getCountryName(program.countryCode);
        const callingCode = program.countryCallingCode || '';
        // Sanitize all values to prevent XSS
        const sanitizedCountryCode = sanitizeHtml(program.countryCode || '');
        const sanitizedCountryName = sanitizeHtml(countryName || '');
        const sanitizedCallingCode = sanitizeHtml(callingCode || '');
        return '<option value="' + sanitizedCountryCode + '">' + sanitizedCountryName + ' ' + sanitizedCallingCode + '</option>';
      }).join('');
    }

    function getCountryName(countryCode) {
      if (window.MC?.smsPhoneData?.smsProgramDataCountryNames && Array.isArray(window.MC.smsPhoneData.smsProgramDataCountryNames)) {
        for (let i = 0; i < window.MC.smsPhoneData.smsProgramDataCountryNames.length; i++) {
          if (window.MC.smsPhoneData.smsProgramDataCountryNames[i].code === countryCode) {
            return window.MC.smsPhoneData.smsProgramDataCountryNames[i].name;
          }
        }
      }
      return countryCode;
    }

    function getDefaultPlaceholder(countryCode) {
      if (!countryCode || typeof countryCode !== 'string') {
        return '+1 000 000 0000'; // Default US placeholder
      }
      
            var mockPlaceholders = [
        {
          countryCode: 'US',
          placeholder: '+1 000 000 0000',
          helpText: 'Include the US country code +1 before the phone number',
        },
        {
          countryCode: 'GB',
          placeholder: '+44 0000 000000',
          helpText: 'Include the GB country code +44 before the phone number',
        },
        {
          countryCode: 'CA',
          placeholder: '+1 000 000 0000',
          helpText: 'Include the CA country code +1 before the phone number',
        },
        {
          countryCode: 'AU',
          placeholder: '+61 000 000 000',
          helpText: 'Include the AU country code +61 before the phone number',
        },
        {
          countryCode: 'DE',
          placeholder: '+49 000 0000000',
          helpText: 'Fügen Sie vor der Telefonnummer die DE-Ländervorwahl +49 ein',
        },
        {
          countryCode: 'FR',
          placeholder: '+33 0 00 00 00 00',
          helpText: 'Incluez le code pays FR +33 avant le numéro de téléphone',
        },
        {
          countryCode: 'ES',
          placeholder: '+34 000 000 000',
          helpText: 'Incluya el código de país ES +34 antes del número de teléfono',
        },
        {
          countryCode: 'NL',
          placeholder: '+31 0 00000000',
          helpText: 'Voeg de NL-landcode +31 toe vóór het telefoonnummer',
        },
        {
          countryCode: 'BE',
          placeholder: '+32 000 00 00 00',
          helpText: 'Incluez le code pays BE +32 avant le numéro de téléphone',
        },
        {
          countryCode: 'CH',
          placeholder: '+41 00 000 00 00',
          helpText: 'Fügen Sie vor der Telefonnummer die CH-Ländervorwahl +41 ein',
        },
        {
          countryCode: 'AT',
          placeholder: '+43 000 000 0000',
          helpText: 'Fügen Sie vor der Telefonnummer die AT-Ländervorwahl +43 ein',
        },
        {
          countryCode: 'IE',
          placeholder: '+353 00 000 0000',
          helpText: 'Include the IE country code +353 before the phone number',
        },
        {
          countryCode: 'IT',
          placeholder: '+39 000 000 0000',
          helpText: 'Includere il prefisso internazionale IT +39 prima del numero di telefono',
        },
      ];

      const selectedPlaceholder = mockPlaceholders.find(function(item) {
        return item && item.countryCode === countryCode;
      });
      
      return selectedPlaceholder ? selectedPlaceholder.placeholder : mockPlaceholders[0].placeholder;
    }

    function updatePlaceholder(countryCode, fieldName) {
      if (!countryCode || !fieldName) {
        return;
      }
      
      const phoneInput = document.querySelector('#mce-' + fieldName);
      if (!phoneInput) {
        return;
      }
      
      const placeholder = getDefaultPlaceholder(countryCode);
      if (placeholder) {
        phoneInput.placeholder = placeholder;
      }
    }

    function updateCountryCodeInstruction(countryCode, fieldName) {
      updatePlaceholder(countryCode, fieldName);
      
    }

    function getDefaultHelpText(countryCode) {
      var mockPlaceholders = [
        {
          countryCode: 'US',
          placeholder: '+1 000 000 0000',
          helpText: 'Include the US country code +1 before the phone number',
        },
        {
          countryCode: 'GB',
          placeholder: '+44 0000 000000',
          helpText: 'Include the GB country code +44 before the phone number',
        },
        {
          countryCode: 'CA',
          placeholder: '+1 000 000 0000',
          helpText: 'Include the CA country code +1 before the phone number',
        },
        {
          countryCode: 'AU',
          placeholder: '+61 000 000 000',
          helpText: 'Include the AU country code +61 before the phone number',
        },
        {
          countryCode: 'DE',
          placeholder: '+49 000 0000000',
          helpText: 'Fügen Sie vor der Telefonnummer die DE-Ländervorwahl +49 ein',
        },
        {
          countryCode: 'FR',
          placeholder: '+33 0 00 00 00 00',
          helpText: 'Incluez le code pays FR +33 avant le numéro de téléphone',
        },
        {
          countryCode: 'ES',
          placeholder: '+34 000 000 000',
          helpText: 'Incluya el código de país ES +34 antes del número de teléfono',
        },
        {
          countryCode: 'NL',
          placeholder: '+31 0 00000000',
          helpText: 'Voeg de NL-landcode +31 toe vóór het telefoonnummer',
        },
        {
          countryCode: 'BE',
          placeholder: '+32 000 00 00 00',
          helpText: 'Incluez le code pays BE +32 avant le numéro de téléphone',
        },
        {
          countryCode: 'CH',
          placeholder: '+41 00 000 00 00',
          helpText: 'Fügen Sie vor der Telefonnummer die CH-Ländervorwahl +41 ein',
        },
        {
          countryCode: 'AT',
          placeholder: '+43 000 000 0000',
          helpText: 'Fügen Sie vor der Telefonnummer die AT-Ländervorwahl +43 ein',
        },
        {
          countryCode: 'IE',
          placeholder: '+353 00 000 0000',
          helpText: 'Include the IE country code +353 before the phone number',
        },
        {
          countryCode: 'IT',
          placeholder: '+39 000 000 0000',
          helpText: 'Includere il prefisso internazionale IT +39 prima del numero di telefono',
        },
      ];
      
      if (!countryCode || typeof countryCode !== 'string') {
        return mockPlaceholders[0].helpText;
      }
      
      const selectedHelpText = mockPlaceholders.find(function(item) {
          return item && item.countryCode === countryCode;
        });
        
        return selectedHelpText ? selectedHelpText.helpText : mockPlaceholders[0].helpText;
    }

    function setDefaultHelpText(countryCode) {
      const helpTextSpan = document.querySelector('#help-text');
      if (!helpTextSpan) {
        return;
      }

        
    }

    function updateHelpTextCountryCode(countryCode, fieldName) {
      if (!countryCode || !fieldName) {
        return;
      }
      
      setDefaultHelpText(countryCode);
    }

    function initializeSmsPhoneDropdown(fieldName) {
      if (!fieldName || typeof fieldName !== 'string') {
        return;
      }
      
      const dropdown = document.querySelector('#country-select-' + fieldName);
      const displayFlag = document.querySelector('#flag-display-' + fieldName);
      
      if (!dropdown || !displayFlag) {
        return;
      }

      const smsPhoneData = window.MC?.smsPhoneData;
      if (smsPhoneData && smsPhoneData.programs && Array.isArray(smsPhoneData.programs)) {
        dropdown.innerHTML = generateDropdownOptions(smsPhoneData.programs);
      }

      const defaultProgram = getDefaultCountryProgram(smsPhoneData?.defaultCountryCode, smsPhoneData?.programs);
      if (defaultProgram && defaultProgram.countryCode) {
        dropdown.value = defaultProgram.countryCode;
        
        const flagSpan = displayFlag?.querySelector('#flag-emoji-' + fieldName);
        if (flagSpan) {
          flagSpan.textContent = getCountryUnicodeFlag(defaultProgram.countryCode);
          flagSpan.setAttribute('aria-label', sanitizeHtml(defaultProgram.countryCode) + ' flag');
        }
        
        updateSmsLegalText(defaultProgram.countryCode, fieldName);
        updatePlaceholder(defaultProgram.countryCode, fieldName);
        updateCountryCodeInstruction(defaultProgram.countryCode, fieldName);
      }

     
      var smsNotRequiredRemoveCountryCodeEnabled = true;
      var smsField = Object.values({"EMAIL":{"name":"EMAIL","label":"Email Address","helper_text":"","merge_id":0,"type":"email","required":true,"audience_field_name":"Email Address","field_type":"merge","enabled":true,"order":null},"SMSPHONE":{"name":"SMSPHONE","label":"SMS Phone Number","helper_text":"","type":"smsphone","required":true,"audience_field_name":"SMS Phone Number","legal":{"required":"Café Marguerite  - By providing your phone number and checking the box, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>","optional":"Café Marguerite  - By providing your phone number, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>"},"smsProgramData":[{"countryCode":"US","countryCallingCode":"+1","number":"+16514272256","imgSrc":"https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/forms-landing-pages/smsphone/flag-us.svg","requiredTemplate":"Café Marguerite  - By providing your phone number and checking the box, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>","optionalTemplate":"Café Marguerite  - By providing your phone number, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>"}],"defaultCountryCode":"US","countryNames":[{"code":"US","name":"USA"}],"multiCountryEnabled":true,"formsMultiCountryFastFollowsEnabled":true,"smsNotRequiredRemoveCountryCodeEnabled":true,"landingPagesInputStylesFixEnabled":true,"europeanSmsExpansionEnabled":false,"phoneformat":"","enabled":true,"order":null,"field_type":"merge","merge_id":7},"FNAME":{"name":"FNAME","label":"First Name","helper_text":"","type":"text","required":false,"audience_field_name":"First Name","enabled":false,"order":null,"field_type":"merge","merge_id":1},"LNAME":{"name":"LNAME","label":"Last Name","helper_text":"","type":"text","required":false,"audience_field_name":"Last Name","enabled":false,"order":null,"field_type":"merge","merge_id":2},"ADDRESS":{"name":"ADDRESS","label":"Address","helper_text":"","type":"address","required":false,"audience_field_name":"Address","enabled":false,"order":null,"field_type":"merge","merge_id":3,"countries":{"2":"Albania","3":"Algeria","4":"Andorra","5":"Angola","6":"Argentina","7":"Armenia","8":"Australia","9":"Austria","10":"Azerbaijan","11":"Bahamas","12":"Bahrain","13":"Bangladesh","14":"Barbados","15":"Belarus","16":"Belgium","17":"Belize","18":"Benin","19":"Bermuda","20":"Bhutan","21":"Bolivia","22":"Bosnia and Herzegovina","23":"Botswana","24":"Brazil","25":"Bulgaria","26":"Burkina Faso","27":"Burundi","28":"Cambodia","29":"Cameroon","30":"Canada","31":"Cape Verde","32":"Cayman Islands","33":"Central African Republic","34":"Chad","35":"Chile","36":"China","37":"Colombia","38":"Congo","40":"Croatia","41":"Cyprus","42":"Czech Republic","43":"Denmark","44":"Djibouti","45":"Ecuador","46":"Egypt","47":"El Salvador","48":"Equatorial Guinea","49":"Eritrea","50":"Estonia","51":"Ethiopia","52":"Fiji","53":"Finland","54":"France","56":"Gabon","57":"Gambia","58":"Georgia","59":"Germany","60":"Ghana","61":"Greece","62":"Guam","63":"Guinea","64":"Guinea-Bissau","65":"Guyana","66":"Honduras","67":"Hong Kong","68":"Hungary","69":"Iceland","70":"India","71":"Indonesia","74":"Ireland","75":"Israel","76":"Italy","78":"Japan","79":"Jordan","80":"Kazakhstan","81":"Kenya","82":"Kuwait","83":"Kyrgyzstan","84":"Lao People's Democratic Republic","85":"Latvia","86":"Lebanon","87":"Lesotho","88":"Liberia","90":"Liechtenstein","91":"Lithuania","92":"Luxembourg","93":"Macedonia","94":"Madagascar","95":"Malawi","96":"Malaysia","97":"Maldives","98":"Mali","99":"Malta","100":"Mauritania","101":"Mexico","102":"Moldova","103":"Monaco","104":"Mongolia","105":"Morocco","106":"Mozambique","107":"Namibia","108":"Nepal","109":"Netherlands","110":"Netherlands Antilles","111":"New Zealand","112":"Nicaragua","113":"Niger","114":"Nigeria","116":"Norway","117":"Oman","118":"Pakistan","119":"Panama","120":"Paraguay","121":"Peru","122":"Philippines","123":"Poland","124":"Portugal","126":"Qatar","127":"Reunion","128":"Romania","129":"Russia","130":"Rwanda","132":"Samoa (Independent)","133":"Saudi Arabia","134":"Senegal","135":"Seychelles","136":"Sierra Leone","137":"Singapore","138":"Slovakia","139":"Slovenia","140":"Somalia","141":"South Africa","142":"South Korea","143":"Spain","144":"Sri Lanka","146":"Suriname","147":"Swaziland","148":"Sweden","149":"Switzerland","152":"Taiwan","153":"Tanzania","154":"Thailand","155":"Togo","156":"Tunisia","157":"Turkiye","158":"Turkmenistan","159":"Uganda","161":"Ukraine","162":"United Arab Emirates","163":"Uruguay","164":"USA","165":"Uzbekistan","166":"Vatican City State (Holy See)","167":"Venezuela","168":"Vietnam","169":"Virgin Islands (British)","170":"Yemen","173":"Zambia","174":"Zimbabwe","175":"Antigua And Barbuda","176":"Anguilla","178":"American Samoa","179":"Aruba","180":"Brunei Darussalam","181":"Bouvet Island","183":"Cook Islands","185":"Christmas Island","187":"Dominican Republic","188":"Western Sahara","189":"Falkland Islands","191":"Faroe Islands","192":"Grenada","193":"French Guiana","194":"Gibraltar","195":"Greenland","196":"Guadeloupe","198":"Guatemala","200":"Haiti","202":"Jamaica","203":"Kiribati","204":"Comoros","205":"Saint Kitts and Nevis","206":"Saint Lucia","207":"Marshall Islands","208":"Macau","210":"Martinique","212":"Mauritius","213":"New Caledonia","214":"Norfolk Island","215":"Nauru","217":"Niue","219":"Papua New Guinea","221":"Pitcairn","222":"Palau","223":"Solomon Islands","225":"Svalbard and Jan Mayen Islands","227":"San Marino","232":"Tonga","233":"Timor-Leste","234":"Trinidad and Tobago","235":"Tuvalu","237":"Saint Vincent and the Grenadines","238":"Virgin Islands (U.S.)","239":"Vanuatu","241":"Mayotte","242":"Myanmar","255":"Sao Tome and Principe","257":"South Georgia and the South Sandwich Islands","260":"Tajikistan","262":"United Kingdom","268":"Costa Rica","270":"Guernsey","272":"North Korea","274":"Afghanistan","275":"Cote D'Ivoire","276":"Cuba","277":"French Polynesia","278":"Iran","279":"Iraq","281":"Libya","282":"Palestine","285":"Syria","286":"Aaland Islands","287":"Turks & Caicos Islands","288":"Jersey  (Channel Islands)","289":"Dominica","290":"Montenegro","293":"Sudan","294":"Montserrat","298":"Curacao","302":"Sint Maarten","311":"South Sudan","315":"Republic of Kosovo","318":"Congo, Democratic Republic of the","323":"Isle of Man","324":"Saint Martin","325":"Bonaire, Saint Eustatius and Saba","326":"Serbia"},"defaultcountry":164},"PHONE":{"name":"PHONE","label":"Phone Number","helper_text":"","type":"phone","required":false,"audience_field_name":"Phone Number","phoneformat":"","enabled":false,"order":null,"field_type":"merge","merge_id":4},"BIRTHDAY":{"name":"BIRTHDAY","label":"Birthday","helper_text":"","type":"birthday","required":false,"audience_field_name":"Birthday","dateformat":"MM/DD","enabled":false,"order":null,"field_type":"merge","merge_id":5},"COMPANY":{"name":"COMPANY","label":"Company","helper_text":"","type":"text","required":false,"audience_field_name":"Company","enabled":false,"order":null,"field_type":"merge","merge_id":6},"MMERGE8":{"name":"MMERGE8","label":"Date And Time","helper_text":"","type":"date","required":false,"audience_field_name":"Date And Time","dateformat":"MM/DD/YYYY","enabled":false,"order":null,"field_type":"merge","merge_id":8},"MMERGE9":{"name":"MMERGE9","label":"Confirmation Status","helper_text":"","type":"text","required":false,"audience_field_name":"Confirmation Status","enabled":false,"order":null,"field_type":"merge","merge_id":9}}).find(function(f) { return f.name === fieldName && f.type === 'smsphone'; });
      var isRequired = smsField ? smsField.required : false;
      var shouldAppendCountryCode = smsNotRequiredRemoveCountryCodeEnabled ? isRequired : true;
      
      var phoneInput = document.querySelector('#mce-' + fieldName);
      if (phoneInput && defaultProgram.countryCallingCode && shouldAppendCountryCode) {
        phoneInput.value = defaultProgram.countryCallingCode;
      }
      


      displayFlag?.addEventListener('click', function(e) {
        dropdown.focus();
      });


      dropdown?.addEventListener('change', function() {
        const selectedCountry = this.value;
        
        if (!selectedCountry || typeof selectedCountry !== 'string') {
          return;
        }
        
        const flagSpan = displayFlag?.querySelector('#flag-emoji-' + fieldName);
        if (flagSpan) {
          flagSpan.textContent = getCountryUnicodeFlag(selectedCountry);
          flagSpan.setAttribute('aria-label', sanitizeHtml(selectedCountry) + ' flag');
        }

         
        const selectedProgram = window.MC?.smsPhoneData?.programs.find(function(program) {
          return program && program.countryCode === selectedCountry;
        });

        var smsNotRequiredRemoveCountryCodeEnabled = true;
        var smsField = Object.values({"EMAIL":{"name":"EMAIL","label":"Email Address","helper_text":"","merge_id":0,"type":"email","required":true,"audience_field_name":"Email Address","field_type":"merge","enabled":true,"order":null},"SMSPHONE":{"name":"SMSPHONE","label":"SMS Phone Number","helper_text":"","type":"smsphone","required":true,"audience_field_name":"SMS Phone Number","legal":{"required":"Café Marguerite  - By providing your phone number and checking the box, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>","optional":"Café Marguerite  - By providing your phone number, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>"},"smsProgramData":[{"countryCode":"US","countryCallingCode":"+1","number":"+16514272256","imgSrc":"https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/forms-landing-pages/smsphone/flag-us.svg","requiredTemplate":"Café Marguerite  - By providing your phone number and checking the box, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>","optionalTemplate":"Café Marguerite  - By providing your phone number, you agree to receive promotional and marketing messages (e.g., abandoned carts), notifications, and customer service communications from Café Marguerite . Message and data rates may apply. Consent is not a condition of purchase. Message frequency varies. Text HELP for help. Text STOP to cancel. See <a href=\"http://eepurl.com/jwt6k6\" target=\"_blank\">Terms</a> and <a href=\"http://eepurl.com/jwt6fg\" target=\"_blank\">Privacy Policy</a>"}],"defaultCountryCode":"US","countryNames":[{"code":"US","name":"USA"}],"multiCountryEnabled":true,"formsMultiCountryFastFollowsEnabled":true,"smsNotRequiredRemoveCountryCodeEnabled":true,"landingPagesInputStylesFixEnabled":true,"europeanSmsExpansionEnabled":false,"phoneformat":"","enabled":true,"order":null,"field_type":"merge","merge_id":7},"FNAME":{"name":"FNAME","label":"First Name","helper_text":"","type":"text","required":false,"audience_field_name":"First Name","enabled":false,"order":null,"field_type":"merge","merge_id":1},"LNAME":{"name":"LNAME","label":"Last Name","helper_text":"","type":"text","required":false,"audience_field_name":"Last Name","enabled":false,"order":null,"field_type":"merge","merge_id":2},"ADDRESS":{"name":"ADDRESS","label":"Address","helper_text":"","type":"address","required":false,"audience_field_name":"Address","enabled":false,"order":null,"field_type":"merge","merge_id":3,"countries":{"2":"Albania","3":"Algeria","4":"Andorra","5":"Angola","6":"Argentina","7":"Armenia","8":"Australia","9":"Austria","10":"Azerbaijan","11":"Bahamas","12":"Bahrain","13":"Bangladesh","14":"Barbados","15":"Belarus","16":"Belgium","17":"Belize","18":"Benin","19":"Bermuda","20":"Bhutan","21":"Bolivia","22":"Bosnia and Herzegovina","23":"Botswana","24":"Brazil","25":"Bulgaria","26":"Burkina Faso","27":"Burundi","28":"Cambodia","29":"Cameroon","30":"Canada","31":"Cape Verde","32":"Cayman Islands","33":"Central African Republic","34":"Chad","35":"Chile","36":"China","37":"Colombia","38":"Congo","40":"Croatia","41":"Cyprus","42":"Czech Republic","43":"Denmark","44":"Djibouti","45":"Ecuador","46":"Egypt","47":"El Salvador","48":"Equatorial Guinea","49":"Eritrea","50":"Estonia","51":"Ethiopia","52":"Fiji","53":"Finland","54":"France","56":"Gabon","57":"Gambia","58":"Georgia","59":"Germany","60":"Ghana","61":"Greece","62":"Guam","63":"Guinea","64":"Guinea-Bissau","65":"Guyana","66":"Honduras","67":"Hong Kong","68":"Hungary","69":"Iceland","70":"India","71":"Indonesia","74":"Ireland","75":"Israel","76":"Italy","78":"Japan","79":"Jordan","80":"Kazakhstan","81":"Kenya","82":"Kuwait","83":"Kyrgyzstan","84":"Lao People's Democratic Republic","85":"Latvia","86":"Lebanon","87":"Lesotho","88":"Liberia","90":"Liechtenstein","91":"Lithuania","92":"Luxembourg","93":"Macedonia","94":"Madagascar","95":"Malawi","96":"Malaysia","97":"Maldives","98":"Mali","99":"Malta","100":"Mauritania","101":"Mexico","102":"Moldova","103":"Monaco","104":"Mongolia","105":"Morocco","106":"Mozambique","107":"Namibia","108":"Nepal","109":"Netherlands","110":"Netherlands Antilles","111":"New Zealand","112":"Nicaragua","113":"Niger","114":"Nigeria","116":"Norway","117":"Oman","118":"Pakistan","119":"Panama","120":"Paraguay","121":"Peru","122":"Philippines","123":"Poland","124":"Portugal","126":"Qatar","127":"Reunion","128":"Romania","129":"Russia","130":"Rwanda","132":"Samoa (Independent)","133":"Saudi Arabia","134":"Senegal","135":"Seychelles","136":"Sierra Leone","137":"Singapore","138":"Slovakia","139":"Slovenia","140":"Somalia","141":"South Africa","142":"South Korea","143":"Spain","144":"Sri Lanka","146":"Suriname","147":"Swaziland","148":"Sweden","149":"Switzerland","152":"Taiwan","153":"Tanzania","154":"Thailand","155":"Togo","156":"Tunisia","157":"Turkiye","158":"Turkmenistan","159":"Uganda","161":"Ukraine","162":"United Arab Emirates","163":"Uruguay","164":"USA","165":"Uzbekistan","166":"Vatican City State (Holy See)","167":"Venezuela","168":"Vietnam","169":"Virgin Islands (British)","170":"Yemen","173":"Zambia","174":"Zimbabwe","175":"Antigua And Barbuda","176":"Anguilla","178":"American Samoa","179":"Aruba","180":"Brunei Darussalam","181":"Bouvet Island","183":"Cook Islands","185":"Christmas Island","187":"Dominican Republic","188":"Western Sahara","189":"Falkland Islands","191":"Faroe Islands","192":"Grenada","193":"French Guiana","194":"Gibraltar","195":"Greenland","196":"Guadeloupe","198":"Guatemala","200":"Haiti","202":"Jamaica","203":"Kiribati","204":"Comoros","205":"Saint Kitts and Nevis","206":"Saint Lucia","207":"Marshall Islands","208":"Macau","210":"Martinique","212":"Mauritius","213":"New Caledonia","214":"Norfolk Island","215":"Nauru","217":"Niue","219":"Papua New Guinea","221":"Pitcairn","222":"Palau","223":"Solomon Islands","225":"Svalbard and Jan Mayen Islands","227":"San Marino","232":"Tonga","233":"Timor-Leste","234":"Trinidad and Tobago","235":"Tuvalu","237":"Saint Vincent and the Grenadines","238":"Virgin Islands (U.S.)","239":"Vanuatu","241":"Mayotte","242":"Myanmar","255":"Sao Tome and Principe","257":"South Georgia and the South Sandwich Islands","260":"Tajikistan","262":"United Kingdom","268":"Costa Rica","270":"Guernsey","272":"North Korea","274":"Afghanistan","275":"Cote D'Ivoire","276":"Cuba","277":"French Polynesia","278":"Iran","279":"Iraq","281":"Libya","282":"Palestine","285":"Syria","286":"Aaland Islands","287":"Turks & Caicos Islands","288":"Jersey  (Channel Islands)","289":"Dominica","290":"Montenegro","293":"Sudan","294":"Montserrat","298":"Curacao","302":"Sint Maarten","311":"South Sudan","315":"Republic of Kosovo","318":"Congo, Democratic Republic of the","323":"Isle of Man","324":"Saint Martin","325":"Bonaire, Saint Eustatius and Saba","326":"Serbia"},"defaultcountry":164},"PHONE":{"name":"PHONE","label":"Phone Number","helper_text":"","type":"phone","required":false,"audience_field_name":"Phone Number","phoneformat":"","enabled":false,"order":null,"field_type":"merge","merge_id":4},"BIRTHDAY":{"name":"BIRTHDAY","label":"Birthday","helper_text":"","type":"birthday","required":false,"audience_field_name":"Birthday","dateformat":"MM/DD","enabled":false,"order":null,"field_type":"merge","merge_id":5},"COMPANY":{"name":"COMPANY","label":"Company","helper_text":"","type":"text","required":false,"audience_field_name":"Company","enabled":false,"order":null,"field_type":"merge","merge_id":6},"MMERGE8":{"name":"MMERGE8","label":"Date And Time","helper_text":"","type":"date","required":false,"audience_field_name":"Date And Time","dateformat":"MM/DD/YYYY","enabled":false,"order":null,"field_type":"merge","merge_id":8},"MMERGE9":{"name":"MMERGE9","label":"Confirmation Status","helper_text":"","type":"text","required":false,"audience_field_name":"Confirmation Status","enabled":false,"order":null,"field_type":"merge","merge_id":9}}).find(function(f) { return f.name === fieldName && f.type === 'smsphone'; });
        var isRequired = smsField ? smsField.required : false;
        var shouldAppendCountryCode = smsNotRequiredRemoveCountryCodeEnabled ? isRequired : true;
        
        var phoneInput = document.querySelector('#mce-' + fieldName);
        if (phoneInput && selectedProgram.countryCallingCode && shouldAppendCountryCode) {
          phoneInput.value = selectedProgram.countryCallingCode;
        }
        
        
        updateSmsLegalText(selectedCountry, fieldName);
        updatePlaceholder(selectedCountry, fieldName);
        updateCountryCodeInstruction(selectedCountry, fieldName);
      });
    }

    document.addEventListener('DOMContentLoaded', function() {
      const smsPhoneFields = document.querySelectorAll('[id^="country-select-"]');
      
      smsPhoneFields.forEach(function(dropdown) {
        const fieldName = dropdown?.id.replace('country-select-', '');
        initializeSmsPhoneDropdown(fieldName);
      });
    });
    </script></div>

            </div>
        <div class="footer__content">
                                <div>
                                    <h3 class="h4 hours__head">Hours</h3>
                                        <p class="text-xs" >Monday – Sunday</p>
                                        <p class="text-xs" >7am – 4pm</p>
                                </div>
                        <?php if($footer_email) : ?>
                            <div class="footer__contact">
                                    <h3 class="h4 contact__head">Contact</h3>
                                    <?php if($footer_phone) : 
                                        $phone_link = $footer_phone['url'];
                                        $phone_text = $footer_phone['title'];  
                                        ?>
                                        <div>
                                            <a  class="text-xs" href="mailto:<?php echo $footer_email?>" target="_blank"><?php echo $footer_email; ?></a>
                                            <br></br>
                                            <a class="text-xs" href="<?php echo $phone_link; ?>"><?php echo $phone_text; ?></a>
                                        </div>
                                    <?php endif; ?>
                            </div>
                        <?php endif; ?>
                            <?php /* Footer Menu */ ?>
                            <?php if($socials) : ?>
                                        <div class="footer__social social">
                                            <h3 class="h4 social__head">Follow</h3>
                                            <div  aria-label="Social Media Menu">
                                                <?php foreach($socials as $social) : ?>
                                                        <?php 
                                                            $link = $social['social_link'];
                                                            $title = $social['social_title'];
                                                            $icon = $social['social_icon'];
                                                            $size = 'full';
                                                        
                                                        ?>
                                                        <a href="<?php echo $link; ?>" target="_blank">
                                                            <?php echo wp_get_attachment_image($icon, $size); ?>
                                                        </a>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                            <?php endif; ?>
                </div>
                <div class="footer__location">
                        <h3 class="h4">Café Marguerite</h3>
                        <p class="text-xs">300 13th Avenue NE</p>
                        <p class="text-xs">Minneapolis, MN 55413</p>

                        <a class="text-xs" href="https://www.google.com/maps/place/La+Boulangerie+Marguerite/@45.0006979,-93.2670205,17z/data=!4m6!3m5!1s0x52b333dedcc3484f:0xbf2184dcae27d5ba!8m2!3d45.0006941!4d-93.2644402!16s%2Fg%2F11kpl9ywzg?entry=tts&shorturl=1" target="_blank" >Google Maps</a>
                </div>
                <div class="footer__bottom">
                <nav class="menu-wrapper__content"  aria-label="Site Navigation" >
                                        <?php /*****
                                               * Menu 
                                               *****/ ?>
                                        <?php
                                        $header_nav = [
                                        'theme_location'    => 'footer-menu',
                                        'menu_class'        => 'menu--footer menu',
                                        'walker'            => new bansheeStarter_nav_walker()
                                        ];
                                        wp_nav_menu($header_nav); ?>
                                    </nav>
                </div>
        </div>
    </section>

    <?php // WP Footer 
    ?>
    <?php wp_footer(); ?>

</footer>

</div> <?php // END: .wrapper - opened in header.php 
?>
</body>

</html>