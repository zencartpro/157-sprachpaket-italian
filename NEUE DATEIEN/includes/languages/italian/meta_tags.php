<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: meta_tags.php 2022-01-14 19:48:28Z webchills $
 */

// Titolo pagina
define('TITLE', 'Zen Cart 1.5.6');

// Tagline o slogan del sito 
define('SITE_TAGLINE', '');

// Keywords imposte 
define('CUSTOM_KEYWORDS', '');

// Language
define('META_TAG_LANGUAGE', 'it');

// Home Page Only:
  define('HOME_PAGE_META_DESCRIPTION', '');
  define('HOME_PAGE_META_KEYWORDS', '');

// NOTE: If HOME_PAGE_TITLE is left blank (default) then TITLE and SITE_TAGLINE will be used instead.
  define('HOME_PAGE_TITLE', ''); // usually best left blank

// EZ-Pages meta-tags.  Follow this pattern for all ez-pages for which you desire custom metatags. Replace the # with ezpage id.
// If you wish to use defaults for any of the 3 items for a given page, simply do not define it. 
// (ie: the Title tag is best not set, so that site-wide defaults can be used.)
// repeat pattern as necessary
/* 
  define('META_TAG_DESCRIPTION_EZPAGE_#','');
  define('META_TAG_KEYWORDS_EZPAGE_#','');
  define('META_TAG_TITLE_EZPAGE_#', '');
 */

// Per-Page meta-tags. Follow this pattern for individual pages you wish to override. This is useful mainly for additional pages.
// replace "page_name" with the UPPERCASE name of your main_page= value, such as ABOUT_US or SHIPPINGINFO etc.
// repeat pattern as necessary
/*
  define('META_TAG_DESCRIPTION_page_name','');
  define('META_TAG_KEYWORDS_page_name','');
  define('META_TAG_TITLE_page_name', '');
 */

// Review Page can have a lead in:
define('META_TAGS_REVIEW', 'Bewertungen: ');

// separators for meta tag definitions
// Define Primary Section Output
define('PRIMARY_SECTION', ' - ');

// Define Secondary Section Output
define('SECONDARY_SECTION', ' - ');

// Define Tertiary Section Output
define('TERTIARY_SECTION', ' - ');

// Definire la divisione tra parole ... usualmente una spazio o virgola e spazio
  define('METATAGS_DIVIDER', ' ');

// Definire quali pagine non devono essere indicizzate da robots/spiders
// This is generally used for account-management pages or typical SSL pages, and usually doesn't need to be touched.
  define('ROBOTS_PAGES_TO_SKIP','login,logoff,create_account,account,account_edit,account_history,account_history_info,account_newsletters,account_notifications,account_password,address_book,advanced_search,advanced_search_result,checkout_success,checkout_process,checkout_shipping,checkout_payment,checkout_confirmation,cookie_usage,create_account_success,contact_us,download,download_timeout,customers_authorization,down_for_maintenance,password_forgotten,time_out,unsubscribe,info_shopping_cart,gv_faq,gv_redeem,gv_send,popup_image,popup_image_additional,product_reviews_write,ssl_check,shopping_cart,no_account,order_status');

