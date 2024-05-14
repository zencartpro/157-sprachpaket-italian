<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: password_forgotten.php 2018-04-01 10:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Login');
define('NAVBAR_TITLE_2', 'Password dimenticata');

define('HEADING_TITLE', 'Hai dimenticato la Password ?');

define('TEXT_MAIN', 'Poco male! Inserisci l\'indirizzo e-mail utilizzato in fase di registrazione e provvederemo ad inviare a quell\'indirizzo un messaggio con una nuova password che potrai poi cambiare nel pannello del tuo Account.');



define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nuova Password');
define('EMAIL_PASSWORD_REMINDER_BODY', 'E\' stata chiesta una nuova Password da ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'La tua nuova Password per \'' . STORE_NAME . '\' è:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Attenzione, la nuova Password &egrave; stata inviata all\'indirizzo e-mail indicato, tra qualche minuto arriver&agrave; la mail, si prega di controllare.');