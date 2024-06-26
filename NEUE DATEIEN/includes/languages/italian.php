<?php
/**
* Zen Cart German Specific (158 code in 157 / zencartpro adaptations)
* 
* @copyright Copyright 2003-2024 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: italian.php 2024-05-14 19:53:57Z webchills $
 */
// -----
// Since the languages are now loaded via classes, the $locales definition
// needs to be globalized for use in payment-methods (e.g. paypalwpp) and
// other processing.
// do NOT change or remove the following 3 lines
global $locales;
$locales = ['it_IT.UTF-8', 'it_IT', 'it'];
@setlocale(LC_TIME, $locales);
//
define('ARIA_DELETE_ITEM_FROM_CART','Cancellare un articolo dal carrello');
define('ARIA_EDIT_QTY_IN_CART','Modifica della quantità nel carrello');
define('ARIA_PAGINATION_','');
define('ARIA_PAGINATION_CURRENTLY_ON','); ora nella pagina %s');
define('ARIA_PAGINATION_CURRENT_PAGE','Pagina corrente');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Vai al gruppo di pagine successive');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Vai al gruppo di pagine precedenti');
define('ARIA_PAGINATION_GOTO','Vai a ');
define('ARIA_PAGINATION_NEXT_PAGE','Vai alla pagina successiva');
define('ARIA_PAGINATION_PAGE_NUM','Pagina %s');
define('ARIA_PAGINATION_PREVIOUS_PAGE','Vai alla pagina precedente');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','Interruzione pagina %s');
define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Interruzione di pagina');
define('ARIA_QTY_ADD_TO_CART','Inserisci quantità');
define('ASK_A_QUESTION', 'Fai una domanda sull\'articolo');
define('ATTRIBUTES_PRICE_DELIMITER_PREFIX',' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX',' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX',' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX',') ');
define('BOX_HEADING_BANNER_BOX', 'Partner');
define('BOX_HEADING_BANNER_BOX2', 'Già visto? ...');
define('BOX_HEADING_BANNER_BOX_ALL', 'Partner');
define('BOX_HEADING_BESTSELLERS', 'Articoli più venduti');
define('BOX_HEADING_BRANDS','Acquista per marca');
define('BOX_HEADING_CATEGORIES','Categorie');
define('BOX_HEADING_CURRENCIES','Valute');
define('BOX_HEADING_CUSTOMER_ORDERS','Ordina di nuovo rapidamente');
define('BOX_HEADING_FEATURED_PRODUCTS','Articoli consigliati');
define('BOX_HEADING_INFORMATION','Informazioni');
define('BOX_HEADING_LANGUAGES','Lingue');
define('BOX_HEADING_LINKS', ' [more]');
define('BOX_HEADING_MANUFACTURERS','Produttori');
define('BOX_HEADING_MANUFACTURER_INFO', 'Informazioni sul produttore');
define('BOX_HEADING_MORE_INFORMATION', 'Ulteriori informazioni');
define('BOX_HEADING_NOTIFICATIONS','Notifiche');
define('BOX_HEADING_REVIEWS','Recensioni');
define('BOX_HEADING_SEARCH','Ricerca');
define('BOX_HEADING_SHOPPING_CART','Carrello acquisti');
define('BOX_HEADING_SPECIALS','Offerte speciali');
define('BOX_HEADING_WHATS_NEW','Nuovi articoli');
define('BOX_INFORMATION_ABOUT_US','Informazioni su di noi');
define('BOX_INFORMATION_CONDITIONS','Termini e condizioni');
define('BOX_INFORMATION_WIDERRUFSRECHT','Diritto di recesso');
define('BOX_INFORMATION_ZAHLUNGSARTEN', 'Metodi di pagamento');
define('BOX_INFORMATION_IMPRESSUM', 'Impronta');
define('BOX_INFORMATION_CONTACT','Contatto');
define('BOX_INFORMATION_DISCOUNT_COUPONS','Buoni promozionali');
define('BOX_INFORMATION_ORDER_STATUS','Stato dell\'ordine');
define('BOX_INFORMATION_PAGE_2','Pagina 2');
define('BOX_INFORMATION_PAGE_3','Pagina 3');
define('BOX_INFORMATION_PAGE_4','Pagina 4');
define('BOX_INFORMATION_PRIVACY','Protezione dei dati');
define('BOX_INFORMATION_SHIPPING', 'Prezzi e spedizione');
define('BOX_INFORMATION_SITE_MAP','Mappa del sito');
define('BOX_INFORMATION_UNSUBSCRIBE','Cancellazione della newsletter');
define('BOX_MANUFACTURER_INFO_HOMEPAGE','%s Homepage');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Altri articoli');
define('BOX_NOTIFICATIONS_NOTIFY', 'Notificami gli aggiornamenti di <strong>%s</strong>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Smetti di notificarmi gli aggiornamenti di <strong>%s</strong>');
define('BOX_REVIEWS_NO_REVIEWS', 'Non ci sono ancora recensioni');
define('BOX_REVIEWS_TEXT_OF_5_STARS','%s su 5 stelle!');
define('BOX_REVIEWS_WRITE_REVIEW','Scrivi una recensione per questo articolo');
define('BOX_SEARCH_ADVANCED_SEARCH','Ricerca avanzata');
define('BOX_SHOPPING_CART_EMPTY','Il tuo carrello è vuoto');
define('CAPTION_UPCOMING_PRODUCTS','Questi articoli saranno presto disponibili');
define('CART_ITEMS','nel carrello: ');
define('CART_QUANTITY_SUFFIX','&nbsp;x');
define('CART_SHIPPING_METHOD_ADDRESS','Indirizzo:');
define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Download');
define('CART_SHIPPING_METHOD_FREE_TEXT','Spedizione gratuita');
define('CART_SHIPPING_METHOD_RATES','Costi');
define('CART_SHIPPING_METHOD_TEXT','Metodi di spedizione disponibili');
define('CART_SHIPPING_METHOD_TO','Spedizione a: ');
define('CART_SHIPPING_OPTIONS','Costi di spedizione stimati:');
define('CART_SHIPPING_QUOTE_CRITERIA', 'Le spese di spedizione sono calcolate in base all\'indirizzo selezionato:');
define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS','Articoli consigliati...');
define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL','Tutti gli articoli ...');
define('CATEGORIES_BOX_HEADING_SPECIALS','Offerte speciali ...');
define('CATEGORIES_BOX_HEADING_WHATS_NEW','Articoli nuovi ...');
define('CATEGORY_COMPANY','Azienda');
define('CATEGORY_PERSONAL', 'I vostri dati personali');
define('CHARSET','utf-8');
define('DATE_FORMAT','d.m.Y');
define('DATE_FORMAT_LONG','%A %d %B, %Y');
define('DB_ERROR_NOT_CONNECTED', 'ERRORE: non è stato possibile stabilire una connessione al database');
define('DIVERS', 'Diversità/nessun saluto'); 
define('DOB_FORMAT_STRING','dd.mm.yyyy');
define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG', 'Nota: i download saranno attivati solo dopo la conferma della ricezione del pagamento');
define('EMAIL_SALUTATION','Buona giornata');
define('EMAIL_SEND_FAILED','ERRORE: Errore nell\'invio di un\'e-mail a: "%s" <%s> con oggetto: "%s"');
define('EMPTY_CART_TEXT_NO_QUOTE','Oops! La sessione è scaduta ... Si prega di aggiornare il carrello...');
define('EMP_SHOPPING_FOR_MESSAGE','Attualmente è connesso per %1$s (%2$s).');
define('ENTRY_CITY','Città:');
define('ENTRY_CITY_ERROR','La città deve essere almeno ' . ENTRY_CITY_MIN_LENGTH . ' caratteri.');
define('ENTRY_CITY_TEXT','*');
define('ENTRY_COMPANY', 'Azienda:');
define('ENTRY_COMPANY_ERROR','Inserire il nome della società');
define('ENTRY_COMPANY_TEXT','');
define('ENTRY_COUNTRY','Paese:');
define('ENTRY_COUNTRY_ERROR','È necessario selezionare un paese dal menu a discesa Paesi');
define('ENTRY_COUNTRY_TEXT','*');
define('ENTRY_CUSTOMERS_REFERRAL','Codice di riferimento:');
define('ENTRY_DATE_FROM','Data da:');
define('ENTRY_DATE_OF_BIRTH','Data di nascita:');
define('ENTRY_DATE_OF_BIRTH_ERROR','La data di nascita è corretta? Il nostro sistema richiede la data in questo formato: GG.MM.AAAA (ad es. 21 maggio 1970) o in questo formato: AAAA-MM-GG (ad es. 1970-05-21)');
define('ENTRY_DATE_OF_BIRTH_TEXT','* (es. 21/05/1970)');
define('ENTRY_DATE_TO','Data a:');
define('ENTRY_EMAIL','Indirizzo e-mail:');
define('ENTRY_EMAIL_ADDRESS','Indirizzo e-mail:');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'L\'indirizzo e-mail non sembra essere corretto. Si prega di modificarlo.');
define('ENTRY_EMAIL_ADDRESS_CONFIRM', 'Conferma l\'indirizzo e-mail:'); 
define('ENTRY_EMAIL_ADDRESS_CONFIRM_NOT_MATCHING', 'Gli indirizzi e-mail specificati non corrispondono'); 
define('ENTRY_EMAIL_ADDRESS_ERROR','L\'indirizzo e-mail è corretto? Dovrebbe essere almeno ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caratteri. Riprovare.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Il vostro indirizzo e-mail è già registrato. Effettuare il login o registrarsi con un altro indirizzo e-mail.');
define('ENTRY_EMAIL_ADDRESS_TEXT','*');
define('ENTRY_EMAIL_CONTENT_CHECK_ERROR','Ha dimenticato il suo messaggio? Vorremmo avere sue notizie. Potete inserire i vostri commenti nel campo di testo sottostante.');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_NAME_CHECK_ERROR','Scusi, il suo nome è corretto? Il nostro sistema richiede un minimo di ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri. Si prega di riprovare.');
define('ENTRY_EMAIL_PREFERENCE','Newsletter e formato e-mail'); 
define('ENTRY_EMAIL_TEXT_DISPLAY','Solo testo');
define('ENTRY_ENQUIRY','Messaggio:');
define('ENTRY_FAX_NUMBER','Numero di fax:');
define('ENTRY_FAX_NUMBER_TEXT','');
define('ENTRY_FIRST_NAME','Nome:');
define('ENTRY_FIRST_NAME_ERROR','Il nome è corretto? Il nostro sistema richiede un minimo di ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caratteri. Si prega di riprovare.');
define('ENTRY_FIRST_NAME_TEXT','*');
define('ENTRY_GENDER','Saluto:');
define('ENTRY_GENDER_ERROR','Scegliere un saluto');
define('ENTRY_GENDER_TEXT','*');
define('ENTRY_INCLUDE_SUBCATEGORIES','Includere le sottocategorie');
define('ENTRY_LAST_NAME','Cognome:');
define('ENTRY_LAST_NAME_ERROR','Il cognome è corretto? Il nostro sistema richiede un minimo di ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caratteri. Si prega di riprovare.');
define('ENTRY_LAST_NAME_TEXT','*');
define('ENTRY_NAME','Nome completo:');
define('ENTRY_NEWSLETTER','Iscriviti alla nostra newsletter');
define('ENTRY_NEWSLETTER_TEXT','');
define('ENTRY_NICK','Nickname del forum:');
define('ENTRY_NICK_DUPLICATE_ERROR','Questo nickname è già in uso. Si prega di provarne un altro.');
define('ENTRY_NICK_TEXT','*');
define('ENTRY_PASSWORD','Password:');
define('ENTRY_PASSWORD_CONFIRMATION','Conferma password:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT','*');
define('ENTRY_PASSWORD_CURRENT','Password attuale:');
define('ENTRY_PASSWORD_CURRENT_TEXT','*');
define('ENTRY_PASSWORD_ERROR','La password deve essere almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING','La conferma della password deve corrispondere alla password');
define('ENTRY_PASSWORD_NEW','Nuova password:');
define('ENTRY_PASSWORD_NEW_ERROR','La nuova password deve essere almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING','La conferma della password deve corrispondere alla nuova password');
define('ENTRY_PASSWORD_NEW_TEXT','*');
define('ENTRY_PASSWORD_TEXT','* (almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' caratteri)');
define('ENTRY_POST_CODE','Codice postale:');
define('ENTRY_POST_CODE_ERROR','Il codice postale deve essere almeno ' . ENTRY_POSTCODE_MIN_LENGTH . ' caratteri');
define('ENTRY_POST_CODE_TEXT','*');
define('ENTRY_PRICE_FROM','Prezzo da:');
define('ENTRY_PRICE_TO','Prezzo a:');
define('ENTRY_RECIPIENT_NAME','Nome del destinatario:');
define('ENTRY_REQUIRED_SYMBOL','*');
define('ENTRY_STATE','Stato:');
define('ENTRY_STATE_ERROR','Lo stato deve essere almeno ' . ENTRY_STATE_MIN_LENGTH . ' caratteri.');
define('ENTRY_STATE_ERROR_SELECT','Selezionare uno stato dal menu a discesa Stati.');
define('ENTRY_STATE_TEXT','*');
define('ENTRY_STREET_ADDRESS','Via e numero civico:');
define('ENTRY_STREET_ADDRESS_ERROR','La strada deve essere almeno ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caratteri.');
define('ENTRY_STREET_ADDRESS_TEXT','*');
define('ENTRY_SUBURB','Indirizzo riga 2:');
define('ENTRY_SUBURB_TEXT','');
define('ENTRY_TELEPHONE','Numero di telefono:');
define('ENTRY_TELEPHONE_NUMBER','Numero di telefono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR','Il numero di telefono deve essere almeno ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caratteri');
define('ENTRY_TELEPHONE_NUMBER_TEXT','*');
define('ERROR_AT_LEAST_ONE_INPUT','Deve essere inserito almeno uno dei campi del modulo di ricerca');
define('ERROR_CART_UPDATE','<strong>Per favore aggiorna il tuo ordine.</strong> ');
define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Si prega di confermare i nostri termini e condizioni');
define('ERROR_CORRECTIONS_HEADING','Si prega di correggere le seguenti informazioni: <br>');
define('ERROR_CUSTOMERS_ID_INVALID', 'Non è stato possibile verificare le informazioni del cliente! <br>Si prega di accedere o creare nuovamente il proprio account cliente...');
define('ERROR_DATABASE_MAINTENANCE_NEED','<a href="https://www.zen-cart-pro.at/themen/logfiles-und-troubleshooting/" rel="noopener" target="_blank">Errore 0071: Sembra esserci un problema con il database. È richiesta l\'esecuzione delle funzioni di manutenzione del database.</a>');
define('ERROR_DESTINATION_DOES_NOT_EXIST','Errore: il target non esiste');
define('ERROR_DESTINATION_NOT_WRITEABLE','Errore: la destinazione non è scrivibile.');
define('ERROR_FILETYPE_NOT_ALLOWED','Errore: Tipo di file non consentito.');
define('ERROR_FILE_NOT_SAVED','Errore: File non salvato.');
define('ERROR_FILE_TOO_BIG','Attenzione: il file era troppo grande per essere caricato!<br>L\'ordine può essere effettuato, ma vi preghiamo di contattarci per ricevere aiuto con il caricamento');
define('ERROR_INVALID_FROM_DATE','Data di inizio non valida');
define('ERROR_INVALID_KEYWORDS','Parole chiave non valide');
define('ERROR_INVALID_TO_DATE','Data di inizio non valida');
define('ERROR_MAXIMUM_QTY','Quantità corretta - quantità massima aggiunta al carrello');
define('ERROR_MISSING_SEARCH_OPTIONS','Parametri di ricerca mancanti');
define('ERROR_NO_PAYMENT_MODULE_SELECTED','Selezionare un metodo di pagamento');
define('ERROR_PRICE_FROM_MUST_BE_NUM','Il prezzo di deve essere un numero');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM','Il prezzo di deve essere maggiore o uguale al prezzo di');
define('ERROR_PRICE_TO_MUST_BE_NUM','Il prezzo deve essere un numero');
define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED','Si prega di confermare la nostra politica sulla privacy selezionando la casella sottostante');
define('ERROR_PRODUCT','<br>L\'articolo: ');
define('ERROR_PRODUCT_ATTRIBUTES','<br>L\'articolo: ');
define('ERROR_PRODUCT_OPTION_SELECTION','<br> ... Valori di opzione non validi selezionati');
define('ERROR_PRODUCT_QUANTITY_MAX',' ... Errore nella quantità massima - ');
define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Errore di quantità massima - ');
define('ERROR_PRODUCT_QUANTITY_MIN','; ... Errore di quantità minima - ');
define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART','); ha una restrizione di quantità minima. ');
define('ERROR_PRODUCT_QUANTITY_ORDERED','<br>Hai ordinato un totale di: ');
define('ERROR_PRODUCT_QUANTITY_UNITS',' ... errore di unità di misura - ');
define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Errore nelle unità di misura - ');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br>Siamo spiacenti, ma questo prodotto è stato rimosso dal nostro inventario in questo momento.<br>Questo articolo è stato rimosso dal tuo carrello.');
define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br>Siamo spiacenti, ma le opzioni selezionate per questo prodotto sono cambiate e sono state rimosse dal nostro inventario in questo momento.<br>Questo articolo è stato rimosso dal tuo carrello.');
define('ERROR_QUANTITY_ADJUSTED','La quantità aggiunta al carrello è stata modificata. L\'articolo richiesto non è disponibile in quantità parziali. La quantità dell\'articolo:<br>');
define('ERROR_QUANTITY_CHANGED_FROM','); è stata modificata da: ');
define('ERROR_QUANTITY_CHANGED_TO',' a ');
define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE','Siamo spiacenti, ma non accettiamo più indirizzi di fatturazione o spedizione in "%s".  Si prega di aggiornare questo indirizzo per continuare.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE','La data di arrivo deve essere maggiore o uguale alla data di partenza.');
define('FAILED_TO_ADD_UNAVAILABLE_PRODUCTS','I prodotti selezionati non sono attualmente disponibili per l\'acquisto...');
define('FEMALE','Donna');
define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart-pro.at" rel="noopener noreferrer" target="_blank">Zen Cart</a>');
define('FORM_REQUIRED_INFORMATION','* Informazioni richieste');
define('FREE_SHIPPING_DESCRIPTION','Spedizione gratuita per ordini superiori a %s');
define('HEADING_ADDRESS_INFORMATION','Informazioni sull\'indirizzo');
define('HEADING_BILLING_ADDRESS','Indirizzo di fatturazione');
define('HEADING_DELIVERY_ADDRESS','Indirizzo di consegna');
define('HEADING_DOWNLOAD','Per scaricare i file, fare clic sul pulsante "Download" e selezionare "Salva su disco" dal menu a comparsa');
define('HEADING_ORDER_COMMENTS','Istruzioni speciali o commenti sull\'ordine');
define('HEADING_ORDER_DATE','Data dell\'ordine:');
define('HEADING_ORDER_HISTORY','Storico dello stato e commenti');
define('HEADING_ORDER_NUMBER','Ordine #%s');
define('HEADING_PAYMENT_METHOD','Metodo di pagamento');
define('HEADING_PRODUCTS','Prodotti');
define('HEADING_QUANTITY','Quantità');
define('HEADING_SEARCH_HELP','Guida alla ricerca');
define('HEADING_SHIPPING_METHOD','Metodo di spedizione');
define('HEADING_TAX','Imposta');
define('HEADING_TOTAL','Totale');
define('HTML_PARAMS','dir="ltr" lang="it"');
define('ICON_ERROR_ALT','Errore');
define('ICON_IMAGE_ERROR','error.png');
define('ICON_IMAGE_SUCCESS','success.png');
define('ICON_IMAGE_TINYCART','cart.gif');
define('ICON_IMAGE_TRASH','small_delete.png');
define('ICON_IMAGE_UPDATE','button_update_cart.png');
define('ICON_IMAGE_WARNING','warning.png');
define('ICON_SUCCESS_ALT','success');
define('ICON_TINYCART_ALT','Aggiungi questo prodotto al tuo carrello cliccando qui');
define('ICON_TRASH_ALT','Elimina');
define('ICON_UPDATE_ALT','Aggiorna');
define('ICON_WARNING_ALT','Avviso');
define('IMAGE_ALT_PREFIX','(immagine per)');
define('IMAGE_ALT_TEXT_NO_TITLE','Un\'immagine generica');
define('JS_ERROR','Si sono verificati degli errori durante l\'elaborazione del modulo.Si prega di apportare le seguenti correzioni:\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED','* Selezionare un metodo di pagamento per l\'ordine.');
define('JS_ERROR_SUBMITTED','Questo modulo è già stato inviato. Premere OK e attendere il completamento del processo');
define('JS_REVIEW_RATING','* Selezionare una valutazione per questo articolo.');
define('JS_REVIEW_TEXT','* Si prega di aggiungere qualche parola al commento. La recensione deve essere almeno ' . REVIEW_TEXT_MIN_LENGTH . ' caratteri.');
define('LANGUAGE_CURRENCY','EUR');
define('MALE','Mr');
define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Free!');
define('MORE_INFO_TEXT','... more info');
define('NOT_LOGGED_IN_TEXT','Non ho effettuato l\'accesso');
define('ORDER_HEADING_DIVIDER','&nbsp;-&nbsp;');
define('OTHER_BOX_NOTIFY_REMOVE_ALT','Rimuovi questa notifica di prodotto');
define('OTHER_BOX_NOTIFY_YES_ALT','Notifica gli aggiornamenti di questo prodotto');
define('OTHER_BOX_WRITE_REVIEW_ALT','Scrivi una recensione su questo prodotto');
define('OTHER_DOWN_FOR_MAINTENANCE_ALT','Il sito web è attualmente chiuso per manutenzione. Si prega di tornare più tardi.');
define('OTHER_IMAGE_BLACK_SEPARATOR','pixel_black.gif');
define('OTHER_IMAGE_BOX_NOTIFY_REMOVE','box_products_notifications_remove.gif');
define('OTHER_IMAGE_BOX_NOTIFY_YES','box_prodotti_notifiche.gif');
define('OTHER_IMAGE_BOX_WRITE_REVIEW','box_write_review.gif');
define('OTHER_IMAGE_CALL_FOR_PRICE','call_for_prices.png');
define('OTHER_IMAGE_CUSTOMERS_AUTHORIZATION','customer_authorisation.gif');
define('OTHER_IMAGE_CUSTOMERS_AUTHORIZATION_ALT','CUSTOMER_AUTHORISATION WAITING ...');
define('OTHER_IMAGE_DOWN_FOR_MAINTENANCE','down_for_maintenance.png');
define('OTHER_IMAGE_PRICE_IS_FREE','free.png');
define('OTHER_IMAGE_REVIEWS_RATING_STARS_FIVE','stars_5_small.png');
define('OTHER_IMAGE_REVIEWS_RATING_STARS_FOUR','stars_4_small.png');
define('OTHER_IMAGE_REVIEWS_RATING_STARS_ONE','stars_1_small.png');
define('OTHER_IMAGE_REVIEWS_RATING_STARS_THREE','stars_3_small.png');
define('OTHER_IMAGE_REVIEWS_RATING_STARS_TWO','stars_2_small.png');
define('OTHER_REVIEWS_RATING_STARS_FIVE_ALT','Cinque stelle');
define('OTHER_REVIEWS_RATING_STARS_FOUR_ALT','Quattro stelle');
define('OTHER_REVIEWS_RATING_STARS_ONE_ALT','Una stella');
define('OTHER_REVIEWS_RATING_STARS_THREE_ALT','Tre stelle');
define('OTHER_REVIEWS_RATING_STARS_TWO_ALT','Due stelle');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' non sono attualmente disponibili in magazzino in quantità sufficiente.<br>Si prega di modificare la quantità degli articoli contrassegnati con (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Grazie');
define('OUT_OF_STOCK_CAN_CHECKOUT','Con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' sono attualmente esauriti.<br>Questi articoli saranno consegnati più tardi.');
define('PAGE_ACCOUNT','Il mio account');
define('PAGE_ACCOUNT_EDIT','Informazioni sul conto');
define('PAGE_ACCOUNT_HISTORY','Cronologia ordini');
define('PAGE_ACCOUNT_NOTIFICATIONS','Abbonamenti alla newsletter');
define('PAGE_ADDRESS_BOOK','Rubrica');
define('PAGE_ADVANCED_SEARCH','Ricerca');
define('PAGE_CHECKOUT_SHIPPING','Transazione di acquisto');
define('PAGE_FEATURED','Offerte speciali');
define('PAGE_PRODUCTS_ALL','Tutti i prodotti');
define('PAGE_PRODUCTS_NEW','Nuovi prodotti');
define('PAGE_REVIEWS','Recensioni');
define('PAGE_SHOPPING_CART','Carrello della spesa');
define('PAGE_SPECIALS','Offerte');
define('PAYMENT_JAVASCRIPT_DISABLED', 'Non è stato possibile continuare l\'ordine perché Javascript è disabilitato. Si prega di abilitare Javascript per continuare.');
define('PAYMENT_METHOD_GV', 'Buono regalo / coupon promozionale');
define('PAYMENT_MODULE_GV', 'GS/AK');
define('PLEASE_SELECT','Selezionare...');
define('PREVNEXT_BUTTON_NEXT', '[Next&nbsp;&raquo;]');
define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Precedente]');
define('PREVNEXT_TITLE_NEXT_PAGE','Pagina successiva');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Next %d pages');
define('PREVNEXT_TITLE_PAGE_NO','Pagina %d');
define('PREVNEXT_TITLE_PREVIOUS_PAGE','Pagina precedente');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Pagina precedente %d');
define('PREV_NEXT_PRODUCT','Articolo');
define('PRIMARY_ADDRESS_TITLE','Indirizzo primario');
define('PRODUCTS_ORDER_QTY_TEXT','Aggiungi al carrello: ');
define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Quantità nel carrello: ');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Richiedi il prezzo');
define('PRODUCTS_PRICE_IS_FREE_TEXT','È gratis!');
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unità: ');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT', 'less');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '% !');
define('PRODUCT_PRICE_DISCOUNT_PREFIX', 'Si risparmia ');
define('PRODUCT_PRICE_SALE', 'Ora solo ');
define('PULL_DOWN_ALL','Selezionare');
define('PULL_DOWN_ALL_RESET','- Reset - ');
define('PULL_DOWN_DEFAULT','Selezionare il paese');
define('PULL_DOWN_MANUFACTURERS','- Reset -');
define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT','Selezionare');
define('SEND_TO_TEXT','Invia e-mail a:');
define('SET_AS_PRIMARY', 'Usa come indirizzo predefinito');
define('SUCCESS_ADDED_TO_CART_PRODUCT', 'L\'articolo è stato aggiunto al carrello...');
define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Gli articoli selezionati sono stati aggiunti al carrello...');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Il file è stato salvato con successo.');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PREZZO');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','STK');
define('TABLE_HEADING_ADDRESS_DETAILS','Dettagli indirizzo');
define('TABLE_HEADING_BUY_NOW','Acquista ora');
define('TABLE_HEADING_BYTE_SIZE','Dimensione del file');
define('TABLE_HEADING_CREDIT_PAYMENT','Credito disponibile');
define('TABLE_HEADING_DATE_EXPECTED','Data di rilascio');
define('TABLE_HEADING_DATE_OF_BIRTH','Controlla la tua età');
define('TABLE_HEADING_DOWNLOAD_COUNT','Restante');
define('TABLE_HEADING_DOWNLOAD_DATE','Link expires');
define('TABLE_HEADING_DOWNLOAD_FILENAME','Nome del file');
define('TABLE_HEADING_FEATURED_PRODUCTS','Articoli consigliati');
define('TABLE_HEADING_IMAGE','Immagine dell\'articolo');
define('TABLE_HEADING_LOGIN_DETAILS', 'Inserisci qui i tuoi dati di accesso');
define('TABLE_HEADING_MANUFACTURER','Produttore');
define('TABLE_HEADING_MODEL','Numero di articolo');
define('TABLE_HEADING_NEW_PRODUCTS','Nuovi articoli in %s');
define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Come posso contattarvi?');
define('TABLE_HEADING_PRICE','Prezzo');
define('TABLE_HEADING_PRIVACY_CONDITIONS','Informativa sulla privacy');
define('TABLE_HEADING_PRODUCTS','Nome articolo');
define('TABLE_HEADING_PRODUCT_NAME','Nome articolo');
define('TABLE_HEADING_QUANTITY','Quantità');
define('TABLE_HEADING_REFERRAL_DETAILS', 'Come ha conosciuto il nostro negozio?');
define('TABLE_HEADING_SHIPPING_ADDRESS','Indirizzo di consegna');
define('TABLE_HEADING_SPECIALS_INDEX','Offerte speciali mensili in %s');
define('TABLE_HEADING_STATUS_COMMENTS','Commenti');
define('TABLE_HEADING_STATUS_DATE','Data');
define('TABLE_HEADING_STATUS_ORDER_STATUS','Stato dell\'ordine');
define('TABLE_HEADING_TOTAL', 'Totale');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Annunci di articoli');
define('TABLE_HEADING_WEIGHT','Peso');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTA: Il nostro negozio è chiuso per manutenzione');
define('TEXT_ALL_CATEGORIES','Tutte le categorie');
define('TEXT_ALL_MANUFACTURERS','Tutti i produttori');
define('TEXT_ALSO_PURCHASED_PRODUCTS','I clienti che hanno acquistato questo articolo hanno acquistato anche...');
define('TEXT_APPROVAL_REQUIRED','<strong>NOTICE:</strong> Le recensioni richiedono un\'approvazione preventiva prima di essere visualizzate.');
define('TEXT_ASCENDINGLY','ascendente');
define('TEXT_ATTRIBUTES_PRICE_WAS',' [was: ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opzione di sconto sulla quantità');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Opzione per gli addebiti una tantum per gli sconti sul volume');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Sconti volume disponibili');
define('TEXT_ATTRIBUTE_IS_FREE','Ora è: gratis]');
define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'REVIEW RUNNING');
define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Non è possibile effettuare il checkout - il conto cliente non è ancora attivato');
define('TEXT_AUTHORIZATION_PENDING_PRICE','Prezzo non disponibile');
define('TEXT_BANNER_BOX', 'Visita anche i nostri partner...');
define('TEXT_BANNER_BOX2', 'Visitateci oggi!');
define('TEXT_BANNER_BOX_ALL', 'Visitate i nostri partner...');
define('TEXT_BASE_PRICE', 'da ');
define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTA: Il nostro negozio è chiuso per manutenzione fino al (gg/mm/aaaa) (hh-hh): ');
define('TEXT_BY', 'da ');
define('TEXT_CALL_FOR_PRICE','Chiama per il prezzo');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La data di scadenza della carta di credito inserita non è valida. Controllare la data e riprovare');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER','Il numero di carta di credito inserito non è valido. Controllare il numero e riprovare');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD','Il numero di carta di credito che inizia con %s non è stato inserito correttamente, oppure non accettiamo questo tipo di carta. Si prega di riprovare o di utilizzare una carta di credito diversa.');
define('TEXT_CHARGES_LETTERS', 'Costo calcolato:');
define('TEXT_CHARGES_WORD', 'Costo calcolato:');
define('TEXT_CLICK_TO_ENLARGE','immagine più grande');
define('TEXT_CLOSE_WINDOW_IMAGE', ' - clicca sull\'immagine per chiuderla');
define('TEXT_COUPON_GV_RESTRICTION_ZONES','Si applicano restrizioni all\'indirizzo di fatturazione');
define('TEXT_COUPON_HELP_DATE','Il coupon è valido tra %s e %s');
define('TEXT_COUPON_HELP_HEADER','Il codice di riscatto del buono sconto inserito è per ');
define('TEXT_COUPON_HELP_MINORDER','Devi spendere %s per utilizzare questo coupon su prodotti qualificati');
define('TEXT_COUPON_LINK_TITLE', 'Visualizza termini e condizioni per questo codice coupon');
define('TEXT_CURRENT_CLOSE_WINDOW','[ chiudere la finestra ]');
define('TEXT_CURRENT_REVIEWS','Recensioni attuali:');
define('TEXT_DATE_ADDED','Questo articolo è stato aggiunto al negozio il %s');
define('TEXT_DATE_ADDED_LISTING','Aggiunto il:');
define('TEXT_DATE_AVAILABLE','Questo articolo sarà in magazzino il %s');
define('TEXT_DESCENDINGLY','discendente');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> articoli)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> articoli)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> articoli consigliati)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> nuovi articoli)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> recensioni)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS','Mostra <strong>%d</strong> a <strong>%d</strong> (da <strong>%d</strong> offerte speciali)');
define('TEXT_DOWNLOADS_UNLIMITED','Unlimited');
define('TEXT_DOWNLOADS_UNLIMITED_COUNT','--- *** ---');
define('TEXT_ERROR','Si è verificato un errore');
define('TEXT_ERROR_OPTION_FOR','All\'opzione per: ');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN','ATTENZIONE: FOOTER EZ-PAGES - Attivato solo per IP amministratore');
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN','WARNING: EZ-PAGES HEADER - Only switched on for Admin IP');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN','WARNING: EZ-PAGES SIDEBOX - Attivato solo per IP amministratore');
define('TEXT_FIELD_REQUIRED','&nbsp;<span class="alert">*</span>');
define('TEXT_FILESIZE_BYTES','bytes');
define('TEXT_FILESIZE_KBS','KB');
define('TEXT_FILESIZE_MEGS','MB');
define('TEXT_FILESIZE_UNKNOWN','Unknown');
define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Gli sconti possono variare in base alle opzioni sottostanti');
define('TEXT_GV_NAME','Buono regalo');
define('TEXT_GV_NAMES','Buoni regalo');
define('TEXT_GV_REDEEM', 'Numero del buono regalo');
define('TEXT_HEADER_DISCOUNTS_OFF', 'Non sono possibili sconti...');
define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Prezzo meno sconto quantità');
define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Detrazione per lo sconto sulla quantità');
define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Detrazione per lo sconto sulla quantità');
define('TEXT_INFO_SORT_BY', 'Ordina per:');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Data di creazione - decrescente');
define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Data di creazione - ascendente');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nome articolo');
define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nome articolo - decrescente');
define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Numero articolo');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Prezzo - ascendente');
define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Prezzo - decrescente');
define('TEXT_INVALID_COUPON_ORDER_LIMIT','Hai superato il numero totale di ordini consentiti (%2$u) per utilizzare il coupon "%1$s"');
define('TEXT_INVALID_COUPON_PRODUCT','Il coupon "%1$s" non è valido per nessun prodotto presente nel carrello');
define('TEXT_INVALID_FINISHDATE_COUPON','Il coupon "%1$s" non è più valido (scaduto %2$s).');
define('TEXT_INVALID_REDEEM_COUPON','Il codice coupon "%s" non è un codice valido.');
define('TEXT_INVALID_REDEEM_COUPON_MINIMUM','Devi spendere almeno %2$s per riscattare il coupon "%1$s".');
define('TEXT_INVALID_SELECTION','Hai effettuato una selezione non valida: ');
define('TEXT_INVALID_STARTDATE_COUPON','Il coupon "%1$s" non è valido fino a %2$s.');
define('TEXT_INVALID_USER_INPUT','È richiesto l\'input dell\'utente<br>');
define('TEXT_INVALID_USES_COUPON','Il coupon "%1$s" è già stato utilizzato nel numero massimo consentito (%2$u)');
define('TEXT_INVALID_USES_USER_COUPON','Il coupon "%1$s" è stato utilizzato il numero massimo consentito di volte per cliente (%2$u).');
define('TEXT_LETTERS_FREE','Lettere gratis');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Effettua il login per il prezzo');
define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Solo showroom');
define('TEXT_LOGIN_FOR_PRICE_PRICE','Prezzo non disponibile');
define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM','');
define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Accedi al negozio');
define('TEXT_MANUFACTURER','Produttore:');
define('TEXT_MAXIMUM_CHARACTERS_ALLOWED','Caratteri massimi consentiti');
define('TEXT_MORE_INFORMATION','Per ulteriori informazioni, visitare il <a href="%s" rel="noreferrer noopener" target="_blank">sito web di questo articolo</a>.');
define('TEXT_NO_ALL_PRODUCTS','Presto verranno aggiunti altri articoli. Si prega di controllare più tardi.');
define('TEXT_NO_CAT_RESTRICTIONS','Questo coupon è valido per tutte le categorie.');
define('TEXT_NO_CAT_TOP_ONLY_DENY','Questo buono ha alcune restrizioni sui prodotti.');
define('TEXT_NO_FEATURED_PRODUCTS','Presto verranno aggiunti altri articoli consigliati. Si prega di controllare più tardi.');
define('TEXT_NO_NEW_PRODUCTS','Presto verranno aggiunti altri prodotti nuovi. Si prega di controllare più tardi.');
define('TEXT_NO_PROD_RESTRICTIONS','Questo coupon è valido per tutti i prodotti.');
define('TEXT_NO_PROD_SALES','Questo coupon non è valido per i prodotti in vendita.');
define('TEXT_NO_SHIPPING_AVAILABLE_ESTIMATOR', 'Purtroppo non abbiamo un\'opzione di spedizione disponibile per l\'indirizzo selezionato.<br><br>Si prega di effettuare il login o di modificare l\'indirizzo di spedizione desiderato per ottenere una stima dei costi di spedizione.<br><br>Se anche in questo caso non sono visibili i costi di spedizione, si prega di contattarci per trovare delle alternative!');
define('TEXT_NO_REVIEWS', 'Al momento non ci sono recensioni.');
define('TEXT_NUMBER_SYMBOL','# ');
define('TEXT_OF_5_STARS','');
define('TEXT_ONETIME_CHARGES', '*unica tariffa = ');
define('TEXT_ONETIME_CHARGES_EMAIL', "´t" . '*unica volta = ');
define('TEXT_ONETIME_CHARGE_DESCRIPTION','Possono essere applicate spese una tantum');
define('TEXT_ONETIME_CHARGE_SYMBOL', '*');
define('TEXT_OPTION_DIVIDER','&nbsp;-&nbsp;');
define('TEXT_OUT_OF_STOCK','Non disponibile in magazzino');
define('TEXT_PASSWORD_FORGOTTEN','Hai dimenticato la password?');
define('TEXT_PER_LETTER', '<br>Prezzo per lettera: ');
define('TEXT_PER_WORD','<br>Prezzo per parola: ');
define('TEXT_PRICE','Prezzo:');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM','Ho letto e accetto la vostra politica sulla privacy');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Si prega di confermare l\'accettazione della nostra politica sulla privacy selezionando la casella di controllo. Potete leggere l\'informativa sulla privacy <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">qui</span></a>.');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER','');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Nome dell\'articolo, a partire da...');
define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET','-- Reset --');
define('TEXT_PRODUCTS_MIX_OFF', '*mixed: OFF');
define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br>*Le opzioni per questo articolo non possono essere mescolate per raggiungere la quantità minima.*<br>');
define('TEXT_PRODUCTS_MIX_ON','*Misto ON');
define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*I valori delle opzioni miste sono ON<br>');
define('TEXT_PRODUCTS_QUANTITY','In stock: ');
define('TEXT_PRODUCTS_WEIGHT','Peso: ');
define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART','Aggiungi: ');
define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART','Aggiungi: ');
define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART','Aggiungi: ');
define('TEXT_PRODUCT_MANUFACTURER','Produttore: ');
define('TEXT_PRODUCT_MODEL','Numero articolo: ');
define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART','Aggiungi: ');
define('TEXT_PRODUCT_NOT_FOUND','Spiacenti, l\'articolo non è stato trovato');
define('TEXT_PRODUCT_OPTIONS','Selezionare: ');
define('TEXT_PRODUCT_QUANTITY','Unità in magazzino');
define('TEXT_PRODUCT_WEIGHT','Peso di spedizione: ');
define('TEXT_PRODUCT_WEIGHT_UNIT', 'kg');
define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Il codice voucher "%s" non è valido per l\'indirizzo selezionato');
define('TEXT_RESULT_PAGE','');
define('TEXT_REVIEW_BY','da %s');
define('TEXT_REVIEW_DATE_ADDED', 'Inserito: %s');
define('TEXT_SEARCH_HELP','<p>Le parole chiave possono essere separate da dichiarazioni AND e/o OR per ottenere un migliore controllo sui risultati della ricerca.<br>Ad esempio, Microsoft AND mouse restituirebbe risultati contenenti entrambe le parole.<br>Per mouse OR tastiera, invece, i risultati conterrebbero entrambe o una delle parole. </p><p>Le corrispondenze esatte possono essere trovate racchiudendo le parole chiave tra virgolette.<br>Ad esempio, "notebook computer" restituirà risultati contenenti la stringa esatta.</p><p>Per un controllo ancora più preciso dei risultati, è possibile utilizzare anche le parentesi.<br>Ad esempio, Microsoft AND (tastiera O mouse O "visual basic").</p>');
define('TEXT_SEARCH_HELP_LINK','Aiuto [?]');
define('TEXT_SEARCH_IN_DESCRIPTION','Cerca nelle descrizioni dei prodotti');
define('TEXT_SHIPPING_BOXES','Pacchetti');
define('TEXT_SHIPPING_WEIGHT','kg');
define('TEXT_SHOWCASE_ONLY', 'Contatto');
define('TEXT_SORT_PRODUCTS','Ordinamento articoli');
define('TEXT_TOP','Top');
define('TEXT_TOTAL_AMOUNT','&nbsp;&nbsp;Importo: ');
define('TEXT_TOTAL_ITEMS','Totale: ');
define('TEXT_TOTAL_WEIGHT','&nbsp;&nbsp;Peso: ');
define('TEXT_UNKNOWN_TAX_RATE','Aliquota fiscale sconosciuta');
define('TEXT_VALID_COUPON','Congratulazioni, hai riscattato il buono sconto');
define('TEXT_WORDS_FREE','Parola/e gratuita/e');
define('TEXT_XSELL_PRODUCTS','Consigliamo questo articolo'); 
define('TEXT_YOUR_IP_ADDRESS','Il tuo indirizzo IP è: ');
define('TYPE_BELOW','Inserisci una selezione qui sotto...');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE','WARNING: Il file della lingua non è stato trovato: ');
define('WARNING_NO_FILE_UPLOADED','Attenzione: nessun file caricato.');
define('WARNING_PRODUCT_QUANTITY_ADJUSTED','La quantità è stata adattata al livello di stock. ');
define('WARNING_SHOPPING_CART_COMBINED', 'NOTA: il carrello attuale è stato unito a quello dell\'ultima visita. Si prega di controllare il contenuto del carrello prima di concludere l\'ordine.');
// Definitions that require references to other definitions
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;'); 
define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Konto'); 
define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ'); 
define('ENTRY_EMAIL_PREFERENCE','Newsletter e formato e-mail');
if (ACCOUNT_NEWSLETTER_STATUS === '0') {
define('ENTRY_EMAIL_PREFERENCE','Formato e-mail'); 
}
define('ERROR_NO_INVALID_REDEEM_GV', 'Invalid ' . TEXT_GV_NAME . ' o ' . TEXT_GV_REDEEM); 
define('ERROR_NO_REDEEM_CODE', 'Non hai ' . TEXT_GV_REDEEM . ' inserito.'); 
define('ERROR_REDEEMED_AMOUNT', 'Congratulazioni! Hai riscattato con successo');
define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
define('TABLE_HEADING_CREDIT', 'Credito disponibile'); 
define('TEXT_AVAILABLE_BALANCE', 'Il vostro ' . TEXT_GV_NAME . ' Conto'); 
define('TEXT_BALANCE_IS', 'Il vostro ' . TEXT_GV_NAME . ' saldo è: '); 
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">I buoni promozionali non possono essere utilizzati per acquistare ' . TEXT_GV_NAMES . ' possono essere utilizzati. Limite: 1 coupon promozionale per ordine.</p>'); 
define('TEXT_SEND_OR_SPEND','Hai credito sul tuo ' . TEXT_GV_NAME . '. Se lo desidera, può inviare questo credito a un\'altra persona facendo clic sul pulsante sottostante'); 
define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Balance '); 