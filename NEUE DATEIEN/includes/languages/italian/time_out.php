<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: time_out.php 2023-10-29 07:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Login Time Out');
define('HEADING_TITLE', 'Whoops! La tua Sessione &egrave; scaduta.');
define('HEADING_TITLE_LOGGED_IN', 'Whoops! Spiacenti, ma non ti &egrave; consentito eseguire l\'azione richiesta. ');
define('TEXT_INFORMATION', '<p>Se avevi inserito un ordine, per favore effettua nuovamente il login ed il tuo Carrello sar&agrave; ripristinato. Potrai tornare alla cassa e completare i tuoi acquisti.</p><p>Se hai completato un ordine e desideri revisionarlo' . (DOWNLOAD_ENABLED == 'true' ? ', o hai un download e desideri recuperarlo' : '') . ', per favore vai alla pagina <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Il Mio Account</a> per visualizzare il tuo ordine.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Sei ancora abilitato con il tuo account e puoi continuare gli acquisti. Per favore scegli una destinazione da un men&ugrave;.');

define('HEADING_RETURNING_CUSTOMER', 'Login');