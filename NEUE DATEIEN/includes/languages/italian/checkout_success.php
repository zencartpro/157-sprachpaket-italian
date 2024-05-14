<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php for custom checkout success texts 2019-07-27 15:05:14Z webchills $
 */
 
define('NAVBAR_TITLE_1', 'Conferma Ordine');
define('NAVBAR_TITLE_2', 'Ordine confermato - Grazie');

define('HEADING_TITLE', 'Arrivederci! Torna a trovarci');

define('TEXT_SUCCESS', 'Qui puoi inserire indicazioni sui tempi di consegna od altro. Per modificare questo testo: <strong>includes/ languages/ TUA_LINGUA/ checkout_success.php</strong>');
define('TEXT_NOTIFY_PRODUCTS', 'Vorrei essere aggiornato per:');
define('TEXT_SEE_ORDERS', 'Puoi visualizzare lo storico dei tuoi ordini andando alla pagina <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '" name="linkMyAccount">Il tuo account</a> e cliccando su Visualizza tutti gli ordini.');
define('TEXT_CONTACT_STORE_OWNER', 'Per informazioni o problemi scrivi al <a href="' . zen_href_link(FILENAME_CONTACT_US) . '" name="linkContactUs">servizio clienti</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Grazie per aver fatto acquisti Online con noi!');

define('TABLE_HEADING_COMMENTS', '');

define('TABLE_HEADING_DOWNLOAD_DATE', 'Link scade:');
define('TABLE_HEADING_DOWNLOAD_COUNT', 'Download rimanenti:');
define('HEADING_DOWNLOAD', 'Scarica i tuoi prodotti da qui:');
define('FOOTER_DOWNLOAD', 'Puoi anche scaricare i tuoi prodotti in un secondo tempo da \'%s\'');
define('TABLE_HEADING_DOWNLOAD_FILENAME','Download del prodotto:');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Il Numero del tuo ordine &egrave;:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NOTA: Per completare il tuo ordine &egrave stato creato un account temporaneo. Puoi chiudere questo account cliccando in Esci. Cliccando nel link Esci sei sicuro che le informazioni sui tuoi acquisti non siano visibili alle altre persone che possono accedere a questo computer. Se desideri continuare gli acquisti, fallo liberamente! Puoi uscire in qualsiasi momento il link Esci.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Grazie del tuo acquisto. Clicca nel link Esci per essere sicuro che le informazioni sui tuoi acquisti non siano visibili alle altre persone che possono accedere a questo computer.');


define('HEADING_ORDER_NUMBER', 'Ordine #%s');
define('HEADING_ORDER_DATE', 'Data dell\'ordine:');
define('HEADING_ORDER_TOTAL', 'Ordine totale:');

define('HEADING_DELIVERY_ADDRESS', 'Indirizzo di consegna');
define('HEADING_SHIPPING_METHOD', 'Metodo di spedizione');

define('HEADING_PRODUCTS', 'Prodotti');
define('HEADING_TAX', 'IVA');
define('HEADING_TOTAL', 'Totale');
define('HEADING_QUANTITY', 'Quantità');

define('HEADING_BILLING_ADDRESS', 'Indirizzo Di Fatturazione');
define('HEADING_PAYMENT_METHOD', 'Metodo di pagamento');

define('HEADING_ORDER_HISTORY', 'Stato dell\'ordine &amp; Commenti');
define('TEXT_NO_COMMENTS_AVAILABLE', 'Nessun commento disponibile.');
define('TABLE_HEADING_STATUS_DATE', 'Data');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Stato dell\'ordine');
define('TABLE_HEADING_STATUS_COMMENTS', 'Commenti');
define('QUANTITY_SUFFIX', '&nbsp;ea.  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
// Begin Paket Tracking
define('TABLE_HEADING_TRACKING_ID', 'ID di monitoraggio');
// End Paket Tracking
