<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: eustandardtransfer.php 2024-04-13 16:49:14 webchills $
*/
// do not remove the following lines
if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_EUTRANSFER_BANKNAM')) define('MODULE_PAYMENT_EUTRANSFER_BANKNAM', '');
if (!defined('MODULE_PAYMENT_EUTRANSFER_ACCNAM')) define('MODULE_PAYMENT_EUTRANSFER_ACCNAM', '');
if (!defined('MODULE_PAYMENT_EUTRANSFER_ACCIBAN')) define('MODULE_PAYMENT_EUTRANSFER_ACCIBAN', '');
if (!defined('MODULE_PAYMENT_EUTRANSFER_BANKBIC')) define('MODULE_PAYMENT_EUTRANSFER_BANKBIC', '');
}
define('MODULE_PAYMENT_EUTRANSFER_TEXT_TITLE', 'Pagamento anticipato/Bonifico bancario');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION', 
'La preghiamo di utilizzare i dati che seguono per il pagamento dell’importo complessivo:<br>' .
'<br>Nome della banca:  ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKNAM) .
'<br>Intestatario del conto: ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCNAM) . 
'<br>IBAN:    ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCIBAN) .
'<br>BIC/SWIFT:   ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKBIC) .
'<br>Oggetto: il Suo numero di ordine<br>' .
'<br>La spedizione del Suo ordine parte all’arrivo dell’importo sul nostro conto.');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_EMAIL_FOOTER', 
"La preghiamo di utilizzare i dati che seguono per il pagamento dell’importo complessivo:\n" .
"\nNome della banca:  " . MODULE_PAYMENT_EUTRANSFER_BANKNAM .
"\nIntestatario del conto: " . MODULE_PAYMENT_EUTRANSFER_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_EUTRANSFER_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_EUTRANSFER_BANKBIC . 
"\n\nLa spedizione del Suo ordine parte all’arrivo dell’importo sul nostro conto.");