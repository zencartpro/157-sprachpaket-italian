<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_confirmation.php 3027 2006-02-13 17:15:51Z Albigin $
 */

define('NAVBAR_TITLE_1', 'Conferma Ordine');
define('NAVBAR_TITLE_2', 'Conferma');

if($_SESSION['COWOA']) $COWOA=TRUE;

if($COWOA)
	define('HEADING_TITLE', 'Step 4 of 4 - Conferma ordine');
else
	define('HEADING_TITLE', 'Step 3 of 3 - Conferma ordine');

define('HEADING_BILLING_ADDRESS', 'Indirizzo fatturazione');
define('HEADING_DELIVERY_ADDRESS', 'Indirizzo spedizione');
define('HEADING_SHIPPING_METHOD', 'Modalit&agrave; spedizione:');
define('HEADING_PAYMENT_METHOD', 'Modalit&agrave; pagamento:');
define('HEADING_PRODUCTS', 'Contenuto carrello');
define('HEADING_TAX', 'IVA');
define('HEADING_TOTAL', 'Totale');
define('HEADING_ORDER_COMMENTS', 'Spazio per richieste particolari o commenti');
// no comments entered
define('NO_COMMENTS_TEXT', 'Non ci sono commenti');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Fase finale</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- continua per confermare l\'ordine. Grazie!');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Prodotti indicati con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' non sono disponibili.<br>I prodotti non disponibili saranno considerati come ordine inevaso.');

// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Prezzo');
define('TABLE_HEADING_PRODUCTIMAGE','Immagine');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Ho letto e accettato il <a href="'. Zen_href_link(FILENAME_CONDITIONS,'','SSL').'" Target="_blank"> <u> termini e condizioni </ u> </a> destinata a questo ordine.');
define('TEXT_NON_EU_COUNTRIES','Note:<br>Il vostro ordine sarà spedito in un paese al di fuori dell`Unione europea. I vostri pacchetti possono essere soggetti alle tasse doganali e dazi doganali del paese in cui avete il vostro ordine spedito. Queste spese sono sempre la responsabilità del destinatario.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Condizioni di vendita</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Selezionare la casella sottostante per confermare di aver letto ed accettato le Condizioni generali di vendita. Per visionarle nuovamente, si prega di cliccare <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>QUI</u></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Ho letto ed accetto le <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank">Condizioni generali</a> di vendita. Ho compreso i termini del Diritto di recesso.</span>');
define('TEXT_ZUSATZ_SCHRITT3','Please verify your order and confirm by clicking the "Confirm Purchase" button at the bottom of this page.');