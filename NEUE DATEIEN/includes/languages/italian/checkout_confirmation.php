<?php
/**
 * Zen Cart German Specific (158 code in 157 /zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_confirmation.php 2023-10-29 15:02:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Conferma Ordine');
define('NAVBAR_TITLE_2', 'Conferma');

define('HEADING_TITLE', 'Step 3 of 3 - Conferma ordine');
define('TEXT_ZUSATZ_SCHRITT3','Please verify your order and confirm by clicking the "Confirm Purchase" button at the bottom of this page.');

define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>La sua carta di credito è stata verificata con successo, ma non è ancora stato effettuato il pagamento. La preghiamo di confermare l\'ordine con il pulsante sottostante. Solo allora il pagamento e l\'ordine saranno elaborati.</b>');
define('HEADING_PRODUCTS','Contenuto del carrello');

define('NO_COMMENTS_TEXT', 'Non ci sono commenti');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Fase finale</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- continua per confermare l\'ordine. Grazie!');

// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Prezzo');
define('TABLE_HEADING_PRODUCTIMAGE','Immagine');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Ho letto e accettato il <a href="'. Zen_href_link(FILENAME_CONDITIONS,'','SSL').'" Target="_blank"> <u> termini e condizioni </ u> </a> destinata a questo ordine.');
define('TEXT_NON_EU_COUNTRIES','Note:<br>Il vostro ordine sarà spedito in un paese al di fuori dell`Unione europea. I vostri pacchetti possono essere soggetti alle tasse doganali e dazi doganali del paese in cui avete il vostro ordine spedito. Queste spese sono sempre la responsabilità del destinatario.');