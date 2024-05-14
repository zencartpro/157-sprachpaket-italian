<?php
/**
 * Zen Cart German Specific 
 * 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: italian.php 2022-11-29 11:19:57Z webchills $
 */

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart-pro.at" rel="noopener noreferrer" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
 $locales = ['it_IT.UTF-8'];
  @setlocale(LC_TIME, $locales);

define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()


////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
function zen_date_raw($date, $reverse = false){
     if ($reverse){
         return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
         }else{
        // edit by cyaneo for german Date support - thx to hugo13
        // return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
         }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
  if (FACEBOOK_OPEN_GRAPH_STATUS == "true") {
define('HTML_PARAMS','dir="ltr" lang="it" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"');
} else {
define('HTML_PARAMS','dir="ltr" lang="it"');
}

// charset for web pages and emails
  define('CHARSET', 'utf-8');



// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Buono Regalo');
  define('TEXT_GV_NAMES','Buoni Regalo');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Riscuoti Buono');



// text for gender
define('MALE', 'Signor');
define('FEMALE', 'Signora');
define('DIVERS', 'Subacquei/nessun saluto');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd.mm.yyyy');

//text for sidebox heading links
define('BOX_HEADING_LINKS', ' [vedi]');

// categories box text in sideboxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Categorie');

// manufacturers box text in sideboxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Produttori');

// whats_new box text in sideboxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Novit&agrave;');
define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Nuovi articoli ...');

define('BOX_HEADING_FEATURED_PRODUCTS', 'Vetrina');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Articoli in vetrina ...');
define('TEXT_NO_FEATURED_PRODUCTS', 'La vetrina viene rinnovata di continuo. Torna a visitarci presto!');

define('TEXT_NO_ALL_PRODUCTS', 'Sono in arrivo altri articoli. Torna a visitarci presto !');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Tutti i prodotti ...');

// quick_find box text in sideboxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Trova');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Ricerca Avanzata');
define('SEARCH_DEFAULT_TEXT', 'Suchbegriff(e)');

// specials box text in sideboxes/specials.php
define('BOX_HEADING_SPECIALS', 'Promozioni');
define('CATEGORIES_BOX_HEADING_SPECIALS','Promozioni ...');

// reviews box text in sideboxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Commenti');
define('BOX_REVIEWS_WRITE_REVIEW', 'Scrivi un commento su questo prodotto.');
define('BOX_REVIEWS_NO_REVIEWS', 'Al momento non vi sono commenti.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s di 5 Stelle!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Carrello');
define('BOX_SHOPPING_CART_EMPTY', '&egrave; vuoto');
  define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;-&nbsp;');

// order_history box text in sideboxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Acquisti recenti');


// best_sellers box text in sideboxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Bestseller');


// notifications box text in sideboxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Segnalazioni');
define('BOX_NOTIFICATIONS_NOTIFY', 'Inviate aggiornamenti su <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Non inviate aggiornamenti su <strong>%s</strong>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Info Produttore');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'La HP di %s ');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Altri articoli');

// languages box text in sideboxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Lingue');

// currencies box text in sideboxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Valute');

// information box text in sideboxes/information.php
define('BOX_HEADING_INFORMATION', 'Informazioni');
define('BOX_INFORMATION_PRIVACY', 'Protezione dei dati');
define('BOX_INFORMATION_CONDITIONS', 'Condizioni di Vendita');
define('BOX_INFORMATION_SHIPPING', 'Spedizioni &amp; Consegne');
define('BOX_INFORMATION_CONTACT', 'Info &amp; Contatti');
  define('BOX_INFORMATION_ZAHLUNGSARTEN', 'Metodi di pagamento');
  define('BOX_INFORMATION_IMPRESSUM', 'Impronta');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Newsletter');
  define('BOX_INFORMATION_WIDERRUFSRECHT', 'Diritto di recesso');
  define('BOX_INFORMATION_SITE_MAP', 'Mappa del Sito');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Altre informazioni');
  define('BOX_INFORMATION_PAGE_2', 'Pagina 2');
  define('BOX_INFORMATION_PAGE_3', 'Pagina 3');
  define('BOX_INFORMATION_PAGE_4', 'Pagina 4');
  
//New billing address text
define('SET_AS_PRIMARY' , 'Indirizzo principale');


// javascript messages
define('JS_ERROR', 'Sono stati rilevati errori nella compilazione del modulo.\n\nTi preghiamo di eseguire le seguenti correzioni:\n\n');

define('JS_REVIEW_TEXT', '* Il \'Testo del commento\' deve contenere almeno ' . REVIEW_TEXT_MIN_LENGTH . ' caratteri.'); define('JS_REVIEW_RATING', '* Devi dare un voto al prodotto che vuoi commentare.');
define('JS_REVIEW_RATING', '* Devi votare il prodotto per la recensione.');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Prego selezionare un metodo di pagamento.');

define('JS_ERROR_SUBMITTED', 'Questo modulo &egrave; gi&agrave; stato inviato. Clicca Ok e attendi il completamento della procedura.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Prego selezionare un metodo di pagamento.');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'L\'ordine potr&agrave; essere evaso solo se confermi di accettare le condizioni di vendita selezionando la casella sottostante.');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Confermaci di aver letto le disposizioni sulla privacy selezionando la casella sottostante.');

define('CATEGORY_COMPANY', 'Informazioni azienda');
define('CATEGORY_PERSONAL', 'Informazioni personali');
define('PULL_DOWN_DEFAULT', 'Seleziona il tuo paese');
  define('PLEASE_SELECT', 'Seleziona ...');
  define('TYPE_BELOW', 'Scrivi sotto la scelta ...');

define('ENTRY_COMPANY', 'Nome azienda:');
  define('ENTRY_COMPANY_ERROR', '');
  define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Indica:');
define('ENTRY_GENDER_ERROR', 'Devi indicare se Signore o Signora.');
  define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nome:');
define('ENTRY_FIRST_NAME_ERROR', 'Il tuo nome deve contenere almeno ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Cognome:');
define('ENTRY_LAST_NAME_ERROR', 'Il cognome deve contenere almeno ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri.');
  define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Data di nascita:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La data di nascita va espressa nel formato: gg/mm/aaaa (es 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (es. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'Indirizzo e-mail:');

define('ENTRY_EMAIL_ADDRESS_ERROR', 'L\'indirizzo e-mail deve contenere almeno ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caratteri.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'L\'indirizzo e-mail inserito ci lascia perplessi. Controlla ed effettua le necessarie correzioni.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Questo indirizzo e-mail &egrave; gi&agrave; presente nel nostro Database. Effettua il Login con l\'indirizzo e-mail oppure crea un Account con un indirizzo diverso.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Confermare E-Mail:');
define('ENTRY_EMAIL_ADDRESS_CONFIRM_NOT_MATCHING', 'La mail di conferma deve corrispondere il tuo indirizzo e-mail.');
define('ENTRY_NICK', 'Soprannome per il Forum:');
define('ENTRY_NICK_TEXT', '');
define('ENTRY_NICK_DUPLICATE_ERROR', 'Questo soprannome è già in uso.');

define('ENTRY_STREET_ADDRESS', 'Via, Piazza, N.:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Nel campo Via, Piazza, N. vanno inseriti almeno ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');

define('ENTRY_SUBURB', 'Anschrift Zeile 2:');
  define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Codice postale:');
define('ENTRY_POST_CODE_ERROR', 'Nel campo Codice Postale vanno inseriti almeno ' . ENTRY_POSTCODE_MIN_LENGTH . ' caratteri.');
  define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Comune:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Codice Segnalazione:');

define('ENTRY_CITY_ERROR', 'Nel campo Comune vanno inseriti almeno ' . ENTRY_CITY_MIN_LENGTH . ' caratteri.');
  define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', 'Nel campo Provincia vanno inseriti almeno ' . ENTRY_STATE_MIN_LENGTH . ' caratteri.');
define('ENTRY_STATE_ERROR_SELECT', 'Seleziona una Provincia dalla tendina.');
  define('ENTRY_STATE_TEXT', '*');

define('ENTRY_COUNTRY', 'Paese:');
define('ENTRY_COUNTRY_ERROR', 'Seleziona un Paese dalla tendina.');
  define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Nel campo Telefono vanno inseriti almeno ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caratteri.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax :');

  define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_PASSWORD', 'Password:');

define('ENTRY_PASSWORD_ERROR', 'Nel campo Password vanno inseriti almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La Password di conferma deve essere uguale alla Password.');
define('ENTRY_PASSWORD_TEXT', '* (almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri)');
define('ENTRY_PASSWORD_CONFIRMATION', 'Conferma Password:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Attuale Password:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');

define('ENTRY_PASSWORD_NEW', 'Nuova Password:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'La nuova Password deve contenere almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La Password di conferma deve essere uguale alla Password.');


  define('FORM_REQUIRED_INFORMATION', '* Campi obbligatori');
  define('ENTRY_REQUIRED_SYMBOL', '*');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="alert">*</span>');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> articoli)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> commenti)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> nuovi articoli)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> promozioni)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> articoli in vetrina)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Visualizzati da <strong>%d</strong> a <strong>%d</strong> (di <strong>%d</strong> articoli)');


define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Pag. Prec.');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Pag. Succ.');

define('PREVNEXT_TITLE_PAGE_NO', 'Pag. %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Prec. gruppo di %d Pagine');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Succ. gruppo di %d Pagine');

define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Prec.]');
define('PREVNEXT_BUTTON_NEXT', '[Succ.&nbsp;&gt;&gt;]');
define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Seitenumbruch');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Seitenumbruch'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Gehe zur vorherigen Seite');
define('ARIA_PAGINATION_NEXT_PAGE','Gehe zur nächsten Seite');
define('ARIA_PAGINATION_CURRENT_PAGE','Aktuelle Seitee');
define('ARIA_PAGINATION_CURRENTLY_ON',', jetzt auf Seite %s');
define('ARIA_PAGINATION_GOTO','Gehe zu ');
define('ARIA_PAGINATION_PAGE_NUM','Seite %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Gehe zur vorherigen Seitengruppe');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Gehe zur nächsten Seitengruppe');
define('ARIA_PAGINATION_','');

define('TEXT_BASE_PRICE','A partire da: ');

define('TEXT_CLICK_TO_ENLARGE', 'ingrandisci');

define('TEXT_SORT_PRODUCTS', 'Elenca articoli ');
define('TEXT_DESCENDINGLY', 'decrescente');
define('TEXT_ASCENDINGLY', 'ascendente');
define('TEXT_BY', ' di ');

define('TEXT_REVIEW_BY', 'da %s');

define('TEXT_REVIEW_DATE_ADDED', 'Inserito il %s');
define('TEXT_NO_REVIEWS', 'Al momento non vi sono commenti su questo prodotto.');

define('TEXT_NO_NEW_PRODUCTS', 'Sono in arrivo nuovi prodotti. Torna a trovarci.');

define('TEXT_UNKNOWN_TAX_RATE', '0%');

define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ATTENZIONE: non sono in grado di rilevare il file idioma: ');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La data di scadenza della carta di credito inserita non &egrave; valida. Verificare la data e riprovare.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Il numero della carta di credito inserito non &egrave; valido. Verificare il numero e riprovare.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Le prime quattro cifre del numero inserito sono: %s. Se tali cifre sono corrette, spiacenti ma non accettiamo questo tipo di carta di credito. Se sono sbagliate, riprovare.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Buoni Sconto');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' F.A.Q.');
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Saldo ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Account');
  define('GV_FAQ', TEXT_GV_NAME . ' F.A.Q.');
define('ERROR_REDEEMED_AMOUNT', 'Complimenti, hai riscosso ');
define('ERROR_NO_REDEEM_CODE', 'Non hai inserito il ' . TEXT_GV_REDEEM . '.');
define('ERROR_NO_INVALID_REDEEM_GV', 'NON valido' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
define('TABLE_HEADING_CREDIT', 'Crediti Disponibili');
  define('TEXT_SEND_OR_SPEND','Hai del credito disponibile nel  ' . TEXT_GV_NAME . ' deltuo account. Lo puoi spendere oppure inviare a qualcuno. Per inviarlo clicca il bottone qui sotto.');
  define('TEXT_BALANCE_IS', 'Il credito del tuo ' . TEXT_GV_NAME . ' &egrave;: ');
  define('TEXT_AVAILABLE_BALANCE', 'Il ' . TEXT_GV_NAME . ' nel tuo Account');

// il metodo di pagamento &egrave; Buono Regalo/Sconto
  define('PAYMENT_METHOD_GV', 'Buono/tagliando regalo');
  define('PAYMENT_MODULE_GV', 'GV/DC');

define('TABLE_HEADING_CREDIT_PAYMENT', 'Crediti disponibili');

define('TEXT_COUPON_LINK_TITLE', 'Bedingungen für diesen Gutscheincode ansehen');
define('TEXT_INVALID_REDEEM_COUPON', 'Codice del Buono NON valido');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Devi spendere almeno %s per riscuotere questo buono');
define('TEXT_INVALID_COUPON_PRODUCT', 'Der Gutscheincode "%1$s" ist für die Artikel in Ihrem Warenkorb nicht gültig.');
define('TEXT_INVALID_COUPON_ORDER_LIMIT', 'Sie haben die maximal erlaubte Anzahl von Bestellungen (%2$u) überschritten, zum Einlösen dieses Gutscheincode "%1$s".');
define('TEXT_INVALID_STARTDATE_COUPON', 'Buono non ancora disponibile');
define('TEXT_INVALID_FINISHDATE_COUPON', 'Buono scaduto');
define('TEXT_INVALID_USES_COUPON', 'Buono utilizzabile solo per ');
define('TEXT_INVALID_USES_USER_COUPON', 'Hai usato il codice coupon: %s il numero massimo permesso ad ogni Cliente. ');
define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Codice buono immesso non valido per l\'indirizzo che selezionato.');
define('TEXT_ERROR', 'E\' accaduto un errore');

define('TEXT_VALID_COUPON', 'Congratulazioni hai riscosso il Buono');


// more info in place of buy now
define('MORE_INFO_TEXT','leggi ...');

// IP Address
define('TEXT_YOUR_IP_ADDRESS','Il tuo indirizzo IP &egrave;: ');

//Generic Address Heading
define('HEADING_ADDRESS_INFORMATION','Info Indirizzo');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Prodotti nel carrello: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Quantità: ');
define('ARIA_QTY_ADD_TO_CART','Menge eingeben, die in den Warenkorb gelegt werden soll');
define('ARIA_EDIT_QTY_IN_CART','Menge im Warenkorb ändern');
define('ARIA_DELETE_ITEM_FROM_CART', 'Artikel aus Warenkorb löschen');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Aggiunto il prodotto nel carrello!');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Aggiunti i prodotti selezionati nel carrello!');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg.');

// Valori di spedizione
  define('TEXT_SHIPPING_WEIGHT','kg.');
  define('TEXT_SHIPPING_BOXES', 'Scatole');

// Cross Sell
define('TEXT_XSELL_PRODUCTS', 'Zu diesem Artikel empfehlen wir...');
// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% di sconto');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;di sconto');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','In Saldo:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Gli Sponsor');
  define('TEXT_BANNER_BOX','Visita anche i nostri Sponsor ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Pubblicit&agrave;');
  define('TEXT_BANNER_BOX2','Dai un\'occhiata!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','In evidenza!');
  define('TEXT_BANNER_BOX_ALL','Visita ...');
  
// boxes defines
  define('PULL_DOWN_ALL','Selezionare');
  define('PULL_DOWN_MANUFACTURERS','- Resetta -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Selezionare');

// general Sort By
define('TEXT_INFO_SORT_BY','Elenca per: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Clicca l\'immagine per chiudere');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Chiudi Finestra ]');
define('TEXT_CLOSE_WINDOW_IMAGE', 'Clicca l\'immagine per chiudere');

// iii 031104 added:  File upload error strings
define('ERROR_FILETYPE_NOT_ALLOWED', 'Errore: tipo di File non permesso.');
define('WARNING_NO_FILE_UPLOADED', 'Attenzione: nessun File uploadato.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Successo: File salvato correttamente.');
define('ERROR_FILE_NOT_SAVED', 'Errore: File non salvato.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Errore: la destinazione NON ha i permessi di scrittura corretti.');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Errore: la destinazione NON esiste.');
define('ERROR_FILE_TOO_BIG', 'Attenzione: il File &egrave; troppo grande per essere caricato!<br>Contattaci per aiutarti.');
// End iii added

define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTA: Sito in Manutenzione (mm/gg/yy) (hh-hh): ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTA: Sito non accessibile al pubblico perch&egrave; in Manutenzione ');

define('PRODUCTS_PRICE_IS_FREE_TEXT','Gratis!');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Prezzo a richiesta');
define('TEXT_CALL_FOR_PRICE','Prezzo a richiesta');

define('TEXT_INVALID_SELECTION',' Hai scelto una Selezione non valida: ');
define('TEXT_ERROR_OPTION_FOR',' L\'opzione per: ');
define('TEXT_INVALID_USER_INPUT', 'Input Utente richiesto');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minimo: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unit&agrave;: ');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');
define('TEXT_PRODUCT_MODEL', 'Numero di articolo: ');
define('TABLE_HEADING_MODEL', 'Numero di articolo');

  define('TEXT_PRODUCTS_MIX_OFF','*Mix NO');
  define('TEXT_PRODUCTS_MIX_ON','*Mix SI');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','*Mix varianti NON consentita<br>');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Mix varianti consentita<br>');

  define('ERROR_MAXIMUM_QTY','La quantit&agrave; inserita nel carrello &egrave; stata corretta a causa di una restrizione sul massimo consentito. Vedi questo articolo:<br>');
  define('ERROR_CORRECTIONS_HEADING','Per favore correggi quanto segue: <br>');
  define('ERROR_QUANTITY_ADJUSTED', 'La quantit&agrave; inserita nel carrello &egrave; stata corretta. L\'articolo richiesto non &egrave; disponibile in quantit&agrave; frazionarie. La quantit&agrave; dell\'articolo:<br>');
  define('ERROR_QUANTITY_CHANGED_FROM', ', &egrave; stata modificata da: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' a ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTA: Downloads disponibili dopo conferma dell\'avvenuto pagamento');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_KBS', ' KB');
  define('TEXT_FILESIZE_MEGS', ' MB');
  define('TEXT_FILESIZE_UNKNOWN', 'Unknown');

// shopping cart errors
  define('ERROR_PRODUCT','<br>Articolo: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br>Spiacenti ma questo Prodotto al momento non &egrave; disponibile.<br>L\'articolo &egrave; stato rimosso dal carrello.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br>Articolo: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br>We are sorry but selected options have changed for this product and have been removed from our inventory at this time.<br>This item has been removed from your shopping cart.');
  define('ERROR_PRODUCT_QUANTITY_MIN',', ... Errore Quantit&agrave; Minima - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Errori Quantit&agrave; Unit&agrave; - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br> ... Valore Opzione selezionato non valido ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br> Hai ordinato un totale di: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Errore Quantit&agrave; Massima - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', ... ha vincoli per la Quantit&agrave; Minima - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Errori Quantit&agrave; Unit&agrave; - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Errori Quantit&agrave; Massima - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'NOTA: Per comodit&agrave;, l\'attuale spesa &egrave; stata aggiunta a quanto nel carrello dall\'ultima visita. Cortesemente controlla il contenuto, prima di procedere alla cassa, grazie!');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Quantity has been adjusted to what is in stock. ');
  define('OUT_OF_STOCK_CANT_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' are out of stock or there are not enough in stock to fill your order.<br>Please change the quantity of products marked with (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Thank you');
  define('OUT_OF_STOCK_CAN_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' are out of stock.<br>Items not in stock will be placed on backorder.');

// erroron checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Le informazioni del Cliente non sono valide!<br>Prego rifai il login o ricrea il tuo account...');

define('TABLE_HEADING_FEATURED_PRODUCTS','Prodotti in vetrina');

define('TABLE_HEADING_NEW_PRODUCTS', 'Le novit&agrave; di %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Prodotti in arrivo');
define('TABLE_HEADING_DATE_EXPECTED', 'Data prevista');
define('TABLE_HEADING_SPECIALS_INDEX', 'Le promozioni del mese di %s');
define('CAPTION_UPCOMING_PRODUCTS','Articoli in riassortimento a breve!');


// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Gratuito, gratis, free!');
define('ASK_A_QUESTION', 'Domanda sull articolo');

// customer login
define('TEXT_SHOWCASE_ONLY','Per contattarci');
// set for login for prices
define('TEXT_LOGIN_FOR_PRICE_PRICE','Prezzo Non Disponibile');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Accedi per il prezzo');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Solo Show Room');

// authorization pending
define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Prezzo non disponibile');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'IN ATTESA DI APPROVAZIONE');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Accedi per Acquistare');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Checkout Unavailable - Approval Pending');

// text pricing
  define('TEXT_CHARGES_WORD','Costo Calcolato:');
  define('TEXT_PER_WORD','<br>Prezzo per parola: ');
  define('TEXT_WORDS_FREE',' Parola(e) gratis ');
  define('TEXT_CHARGES_LETTERS','Costo Calcolato:');
  define('TEXT_PER_LETTER','<br>Prezzo per lettera: ');
  define('TEXT_LETTERS_FREE',' Lettera(e) gratis ');
  define('TEXT_ONETIME_CHARGES','*Costo una tantum = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*Costo una tantum = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opzione Sconti per Quantit&agrave;');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Q.t&agrave;');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Prezzo');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Opzione Sconti per Quantit&agrave; con costo una tantum');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' massimo dei caratteri disponibili');


// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Preventivo spedizione:');
  
  define('CART_SHIPPING_METHOD_TEXT','Modalit&agrave; di spedizione:');
  define('CART_SHIPPING_METHOD_RATES','Costi:');
  define('CART_SHIPPING_METHOD_TO','Spedire a: ');
  
define('CART_SHIPPING_METHOD_FREE_TEXT', 'kostenloser Versand');
define('CART_SHIPPING_METHOD_ALL_DOWNLOADS', '- Downloads');

  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Indirizzo:');
  
  define('CART_ITEMS','Articoli nel carrello: ');

  define('ERROR_CART_UPDATE', '<strong>Aggiornare l\'ordine.</strong><br>');

  define('EMPTY_CART_TEXT_NO_QUOTE', 'Attenzione sessione scaduta, aggiornare il carrello per definire la spedizione ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Costi di spedizione relativi al paese selezionato:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Agg.gi: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Agg.gi: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Agg.gi: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Agg.gi: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Sconti quantit&agrave; sul prezzo indicato');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Costo al pezzo per quantità maggiori di prodotto acquistato');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Sconti quantit&agrave; sul prezzo indicato');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Gli sconti possono variare in base alle opzioni sopra indicate');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Sconti quantit&agrave; non disponibili');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- RESET - ');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nome Prodotto');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nome Prodotto - disc');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Prezzo - inf.re a sup.re');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Prezzo - sup.re a inf.re');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modello');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Data Inser.to - A scendere');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Data Inser.to - A salire');


// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Link Scaduti');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Rimanenti');
  define('HEADING_DOWNLOAD', 'Per scaricare i tuoi files fai click sul pulsante download e scegli "Salva nel Disco" dal men&ugrave; popup.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Nome file');
  define('TABLE_HEADING_PRODUCT_NAME','Nome Prodotto');
  define('TABLE_HEADING_BYTE_SIZE','Dimensione File');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Illimitato');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc

  define('PAYMENT_JAVASCRIPT_DISABLED', 'We could not continue with checkout as Javascript is disabled. You must enable it to continue');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Q.t&agrave;');
  define('TABLE_HEADING_PRODUCTS', 'Prodotto (i)');
  define('TABLE_HEADING_TOTAL', 'Totale');


// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Informativa sulla Privacy');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">L\'iscrizione al sito implica l\'accettazione delle regole poste a tutela della tua Privacy. Esprimi il tuo consenso selezionando la casella sottostante. Leggi l\'informativa cliccando</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u><strong>qui</strong></u></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<strong>Ho letto ed approvo l\'Informativa sulla Privacy.</strong>');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Dettagli Indirizzo');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Dettagli Contatto');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Verifica Et&agrave;');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Dettagli Login');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Siamo stati segnalati da');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Sorry, but we no longer accept billing or shipping addresses in "%s".  Please update this address to continue.');
  define('ENTRY_EMAIL_PREFERENCE','Formato e-mail preferito:');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
 define('ENTRY_EMAIL_TEXT_DISPLAY','TESTO puro');
 define('EMAIL_SEND_FAILED','ERRORE: invio non riuscito Email a: "%s" <%s> con oggetto: "%s"');

 define('DB_ERROR_NOT_CONNECTED', 'Errore - Impossibile connettersi al Database');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: There appears to be a problem with the database. Maintenance is required.</a>');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ATTENZIONE: EZ-PAGES HEADER - Solo per IP Amministratore');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ATTENZIONE: EZ-PAGES FOOTER - Solo per IP Amministratore');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ATTENZIONE: EZ-PAGES SIDEBOX - Solo per IP Amministratore');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Articoli iniziano con ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Resetta --');
// The following message, with the associated severity, is displayed in the storefront header when an admin has logged into
// a customer's account.

// -----
// init_customer_auth.php substitutes the customer's name (%$1s) and customer's email address (%$2s)
// into this message.
//
define('EMP_SHOPPING_FOR_MESSAGE', 'Derzeit eingeloggt als %1$s (%2$s).');

// -----
// Identify the messageStack "severity" to be applied to the above message, one of 'success',
// 'warning', 'caution', 'error' (defaults to 'success').
//
define('EMP_SHOPPING_FOR_MESSAGE_SEVERITY', 'success');
// Constants shared between multiple pages
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
///////////////////////////////////////////////////////////

  $file_list = [FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS];
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . "/", $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
