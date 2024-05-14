<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: popup_cvv_help.php 2015-12-23 19:28:14Z webchills $
 */

define('HEADING_CVV', 'Cosa &egrave; il CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Discover codice di verifica carta a 3 Digit<br><br>
                    Per la tua sicurezza, ti chiediamo di inserire il codice di verifica della tua carta.<br><br>
                    Il codice di verifica &egrave; composto da 3 cifre stampate sul retro della tua carta.
                    Sono indicati sulla destra dopo il tuo numero di carta.<br>' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express codice di verifica carta a 4 Digit<br><br>
                    Per la tua sicurezza, ti chiediamo di inserire il codice di verifica della tua carta.<br><br>
                    Il codice di verifica American Express &egrave; un numero di 4 cifre stampato sul fronte della tua carta.
                    E\' indicato sulla destra, dopo il numero della tua carta.<br>' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Chiudi');