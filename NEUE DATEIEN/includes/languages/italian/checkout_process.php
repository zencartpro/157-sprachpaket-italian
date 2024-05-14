<?php
/**
 * Zen Cart German Specific
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_process.php for COWOA 2022-11-26 09:40:14Z webchills $
 */
 
// cowoa do not change
if (isset($_SESSION['COWOA']) && $_SESSION['COWOA'] == true) {
define('EMAIL_TEXT_INVOICE_URL', 'Visualizza lo stato dell\'ordine:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Per controllare lo stato dell\'ordine, fare clic qui');
} else {
define('EMAIL_TEXT_INVOICE_URL', 'Fattura dettagliata:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Per una fattura dettagliata, fare clic qui');
}

// ab hier koennen Sie falls noetig Anpassungen vornehmen, die Definitionen weiter oben NIE aendern!

define('EMAIL_TEXT_SUBJECT', 'Conferma ordine');
define('EMAIL_TEXT_HEADER', 'Conferma ordine');
define('EMAIL_TEXT_FROM',' da ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Grazie per aver scelto i nostri prodotti !');
define('EMAIL_DETAILS_FOLLOW','Ecco i particolari del tuo ordine.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Ordine Numero:');
define('EMAIL_TEXT_DATE_ORDERED', 'Data richiesta:');
define('EMAIL_TEXT_PRODUCTS', 'Prodotti');

define('EMAIL_TEXT_TAX', 'IVA: ');

define('EMAIL_TEXT_TOTAL', 'Totale: ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Indirizzo spedizione');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Indirizzo fatturazione');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Modalità pagamento');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_GREETING_MR', 'Egregio Sig.');
define('EMAIL_GREETING_MS', 'Gentile Signora.');
define('EMAIL_GREETING_NEUTRAL', 'Buongiorno');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nr.: ');
define('HEADING_ADDRESS_INFORMATION','Info indirizzo');
define('HEADING_SHIPPING_METHOD','Modalit&agrave; spedizione');
