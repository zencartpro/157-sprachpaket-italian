<?php
/**
* Zen Cart German Specific (158 code in 157)

* @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: email_extras.php 2023-10-29 11:32:14Z webchills $
*/

define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart - deutsche Version');
define ('EMAIL_LOGO_FILENAME', 'header.jpg'); 
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');



define ('EMAIL_EXTRA_HEADER_INFO', '');


define('OFFICE_FROM', '<strong>Absender:</strong>');
define('OFFICE_EMAIL', '<strong>E-Mail:</strong>');

define('OFFICE_USE', '<strong>Nur für den internen Gebrauch:</strong>');
define('OFFICE_LOGIN_NAME', '<strong>Kontoname:</strong>');
define('OFFICE_LOGIN_EMAIL', '<strong>E-Mail Adresse</strong>:');
define('OFFICE_LOGIN_PHONE', '<strong>Telefon:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS', '<strong>IP Adresse:</strong>');
define('OFFICE_HOST_ADDRESS', '<strong>Hostname:</strong>');
define('OFFICE_DATE_TIME', '<strong>Datum und Uhrzeit:</strong>');


define('EMAIL_TEXT_TELEPHONE', 'Telefon: ');


define('EMAIL_DISCLAIMER', '');
define('EMAIL_SPAM_DISCLAIMER', '-');

define('EMAIL_ORDER_MESSAGE',''); 
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>');
define('TEXT_UNSUBSCRIBE', "\n\nPer rinunciare a future newsletter o mailing promozionali, semplicemente digitare questo link: \n");



define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANTE - </strong> Per la tua tutela e per prevenire abusi, tutte le e-mail spedite a mezzo di questo sito sono registrate e il webmaster può visualizzarne il contenuto. Se ritieni che questo messaggio ti sia giunto per errore, ti preghiamo di inviare una segnalazione via mail a ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");


define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Nelle mail inviate dal Sito &egrave; inserito questo messaggio:<br><br></strong>');



define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[NEUES KUNDENKONTO]');

define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[GUTSCHEIN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NEUE BESTELLUNG]');



define('EMAIL_TEXT_SUBJECT_LOWSTOCK','WARNUNG: Lagermindestbestand unterschritten');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Lagerbestandsbericht: ');