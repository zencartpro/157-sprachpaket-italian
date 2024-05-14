<?php
/**
* Zen Cart German Specific
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: paypalwpp.php 2022-04-17 08:57:24Z webchills $
*/

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express');

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express (Pro 2.0 Payflow Edition) (UK)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express via Payflow Pro');

if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'undefined');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br><br><img src="images/checkout-logo-large-de.png" alt="PayPal Express"/><br><br>Dieses Modul ist eine <b>NVP/SOAP API-Integration</b>.<br>Infos zum Erstellen der API Zugangsdaten (<b>API Berechtigung mit Signatur</b>) finden Sie <a href="https://www.paypal.com/at/smarthelp/article/wie-fordere-ich-eine-api-berechtigung-mit-signatur-oder-zertifikat-an-faq3196" target=":blank">hier</a>.<br><br>' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">Verwalten Sie Ihren PayPal Account.</a>' : '<a href="https://www.paypal.com/de/webapps/mpp/merchant" target="_blank">Verwalten Sie Ihren PayPal Account.</a>') . '<br><br><font color="green">Konfiguration Anleitung:</font><br><span class="alert">1. </span><a href="https://www.paypal.com/de/webapps/mpp/merchant" target="_blank">Erstellen Sie einen PayPal Account.</a><br>' . 
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... und dr�cken auf den Button "Installieren" um PayPal Express Checkout zu aktivieren.</br>') . 
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<span class="alert">2. </span><strong>API Zugangsdaten fehlen!</strong> Dieses Modul benutzt die <strong>API Signatur</strong> Option -- Bitte geben Sie in die unteren Felder Ihren Benutzernamen, Passwort und die Signatur ein.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>PAYFLOW Credentials</strong> Dieses Modul ben�tigt Ihre <strong>PAYFLOW Partner Daten</strong>. Bitte geben Sie diese in die Felder unten ein. Diese Daten werden f�r den reibungslosen Transaktionsablauf ben�tigt..' : '<span class="alert">2. </span>Bitte stellen Sie sicher, dass Sie die notwendigen Daten f�r dieses Modul eingegeben haben.') ) . 
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br><span class="alert">3. </span>Aktivieren Sie in Ihrem Paypal Account <strong>Sofortige Zehlungsbenachrichtung</strong>:<br>unter Mein Profil w�hlen Sie <em>Sofortige Zahlungsbenachrichtung Einstellungen</em><ul style="margin-top: 0.5;"><li>und machen einen Haken in das dazugeh�rige K�stchen</li><li>Falls nicht bereits eine URL angegeben ist, geben Sie bitte folgende URL ein:<br>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</li></ul>' : '') . 
'<hr><font color="green"><strong>Voraussetzungen:</strong></font><br>*<strong>CURL</strong> wird f�r die Kommunikation mit dem Gateway genutzt und muss deshalb zwingend auf Ihrem Webspace vorhanden und aktiviert sein. Falls Sie einen CURL Proxy verwenden (NICHT empfohlen!), konfigurieren Sie diesen bitte unter Konfiguration -> Mein Shop<hr>');
}

define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Credit Card');
define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Pagamento sicuro, facile e veloce con PayPal:');
define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Credit Card');  //(used for payflow transactions)
define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Siamo spiacenti, ma non siamo riusciti a processare la tua carta di credito.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'I dati relativi alla carta di credito che ha inserito contengono un errore.  Per cortesia, controllali e prova nuovamente.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Nome carta di credito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'Cognome carta di credito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nome intestatario:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Tipo carta di credito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Numero carta di credito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Data di scadenza carta di credito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Data di attivazione carta di credito:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Numero CVV:');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(riportato sul retro della carta)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Carta di credito rifiutata. Prova con un\'altra carta o contatta la tua banca per maggiori informazioni.');
define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'Non siamo stati in grado di processare il tuo ordine. Prova nuovamente, scegli un diverso metodo di pagamento, o contatta il titolare del negozio per assistenza.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Abbiamo riscontrato un problema tecnico. Prova nuovamente, scegli un diverso metodo di pagamento, o contatta il titolare del negozio per assistenza.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Gent. Amministratore,' . "\n" . 'abbiamo riscontrato un problema in fase di inizializzazione di una transazione Paypal Express Checkout. Il cliente ha visto solo il codice errore, senza ulteriori dettagli.  I dettagli completi sono qui sotto.' . "\n\n");
define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'ATTENZIONE: Errore PayPal Express Checkout');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'L\'indirizzo immesso sembra errato o comunque non riusciamo ad avere un riscontro. Per cortesia, scegli o aggiungi un indirizzo differente e prova nuovamente.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'L\'indirizzo selezionato su PayPal non risulta un indirizzo Confermato. Per cortesia, torna a PayPal e scegli o aggiungi un indirizzo confermato e poi prova nuovamente.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal non risulta in grado di finanziare la transazione. Per cortesia, scegli un diverso metodo di pagamento o controlla i parametri per il finanziamento nel tuo conto Paypal prima di procedere.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', 'Sorry. PayPal has declined the transaction and advised us to tell you to contact PayPal Customer Service for more information. To complete your purchase, please select an alternate payment method.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Abbiamo riscontrato un errore mentre processavamo la tua carta di credito. Prova nuovamente, scegli un diverso metodo di pagamento, o contatta il titolare del negozio per assistenza.');
define('MODULE_PAYMENT_PAYPALWPP_FUNDING_ERROR','Problem mit der Finanzierungsquelle; bitte gehen Sie zu Paypal.com und zahlen Sie direkt an ' . STORE_OWNER_EMAIL_ADDRESS); 
define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Ci scusiamo per l\'inconveniente, ma non accettiamo il tipo di carta di credito che hai inserito. Per cortesia usa un\'altra carta.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Non siamo riusciti a verificare il tuo account. Per cortesia prova nuovamente.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* Il nome del titolare della carta deve essere lungo almeno ' . CC_OWNER_MIN_LENGTH . ' caratteri.\n');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* Il numero della carta di credito deve essere lungo almeno ' . CC_NUMBER_MIN_LENGTH . ' caratteri.\n');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'ATTENZIONE: Errore nella verifica dell\'indirizzo. ');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ATTENZIONE: Errore nella verifica del codice CVV. ');
define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', ' Ordine in attesa di valutazione da parte del proprietario del negozio.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' - Devi registrare le tue PayPal API Credentials prima di poter effettuare transazioni avanzate.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'Stato assegnato al tuo conto non valido.  Per cortesia, accedi alla configurazione del tuo conto e modificalo.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Siamo spiacenti. Impossibile perfezionare il pagamento: il conto Paypal del titolare negozio non risulta un conto PayPal Website Payments Pro o non ha acquistato i servizi gateway di Paypal.  Per cortesia, scegli un metodo di pagamento diverso per il tuo ordine.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Siamo spiacenti. Conto Paypal di questo negozio momentaneamente configurato in modo errato (impostazioni mixate tra produzione e sandbox). Non possiamo completare la tua transazione. Per cortesia segnala il problema al titolare del negozio in modo che possa risolvere.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Siamo spiacenti -- il conto Paypal configurato dal titolare del negozio fa riferimento ad una nazione che non prevede al momento il supporto di Website Payments Pro. Per cortesia, scegli un metodo di pagamento diverso per il tuo ordine.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTA: Modulo non ancora configurato)</span>');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Abbiamo riscontrato un problema nel recuperare i dettagli della transazione. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'There was a problem locating transactions matching the criteria you specified. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Abbiamo riscontrato un problema nel validare la transazione. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Abbiamo riscontrato un problema nel rimborsare l\ammontare specificato. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Abbiamo riscontrato un problema nell\'autorizzazione della transazione. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Abbiamo riscontrato un problema nella gestione della transazione. ');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Richiesta di rimborso rifiutata da Paypal.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Hai richiesto un rimborso parziale ma non hai specificato l\'importo.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Hai richiesto un rimborso totale ma non hai confermato la tua decisione.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Hai richiesto un\'autorizzazione ma non hai specificato l\'importo.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Hai richiesto una "capture" ma non hai specificato l\'importo.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Conferma');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Hai chiesto di annullare una transazione ma non hai confermato la tua intezione tramite l\'apposita checkbox.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Conferma');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Hai chiesto un\'autorizzazione ma non hai confermato la tua intezione tramite l\'apposita checkbox.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Hai chiesto una "capture" ma non hai confermato la tua intezione tramite l\'apposita checkbox.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'Rimborso Paypal per %s iniziato. ID Transazione: %s. Aggiorna la pagina per vedere i dettagli della transazione aggiornati nella sezione storico/commenti stato ordini.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'Autorizzazione Paypal per %s iniziata. Aggiorna la pagina per vedere i dettagli della transazione aggiornati nella sezione storico/commenti stato ordini.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Capture per %s iniziata. ID Ricevuta: %s. Aggiorna la pagina per vedere i dettagli della transazione aggiornati nella sezione storico/commenti stato ordini.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'Richiesta annullamento PayPal iniziata. ID Transazione: %s. Aggiorna la pagina per vedere i dettagli della transazione aggiornati nella sezione storico/commenti stato ordini.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Abbiamo riscontrato un errore durante la transazione. Per cortesia controlla la Reference guide delle API o i log delle trnsazione per informaizoni dettagliate.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Siamo spiacenti, ma al momento non siamo in grado di utilizzare Paypal per gestire pagamenti da regioni geografiche come quella selezionata come tuo indirizzo Paypal.  Per cortesia, scegli un metodo di pagamento diverso per il tuo ordine.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Sembra che il tuo ordine sia stato inviato due volte. Per cortesia accedi alla sezione Mio Account per verificare i dettagli dell\'ordine.  Contattaci nel caso in cui il tuo ordine non sia presente ma sia stato pagato in precedenza tramite il conto Paypal in modo che si possa verificare cosa sia accaduto e correggere il problema.');

define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Click here to pay via PayPal Express Checkout');


// EC buttons -- Do not change these values:
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG_MOBILE', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-btn-expresscheckout.gif');
define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/de_DE/i/de-pp-logo-100px.png');
define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_TXT', 'Einkaufen mit PayPal');
define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', '');


////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
//define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
//define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
////// Styling of pseudo cart contents display section
//define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
//define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


// These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nome:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Cognome:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Ragione Sociale:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Nome:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Via:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Comune');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Provincia:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'CAP:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Nazione:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email compratore:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID Compratore:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Status Compratore:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Status indirizzo:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipo pagamento:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Status pagamento:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Motivo status "in attesa":');
define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Fattura:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Data pagamento:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Valuta:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Importo lordo:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Costo pagamento:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Tasso di cambio:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Prodtti acquistati:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipo transazione:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID transazione:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID transazione superiore (parent):');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Rimborsi</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Se vuoi rimborsare questo ordine completamente, clicca qui:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Esegui rimborso completo');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Esegui rimborso parziale');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br>... oppure inserisci l\'importo parziale ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Inserisci ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'l\'importo da rimborsare qui e clicca su Rimborso Parziale');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '* Il precedente rimborso parziale esclude ogni possibile rimborso completo ma sono consentiti ulteriori rimborsi parziali fino all\'esaurimento dell\'importo.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Nota per il cliente:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Rimborsato dall\'amministratore del negozio.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Conferma: ');
define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Commenti Sistema: ');
define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Protection Eligibility:');

define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorizzazioni ordini</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Se desideri autorizzare parte di questo ordine, inserisci l\'importo qui:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Esegui Autorizzazione');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Acquisizione autorizzazioni</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Se desideri acquisire tutte o parte delle autorizzazioni per questo ordine, inserisci l\'importo e specifica se questa risulta l\'acquisizione finale.  Conferma contrassegnando l\'apposita checkbox.<br>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Esegui acquisizione');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Importo da acquisisre:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Risulta l\'acquisizione finale?');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Nota per il cliente:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Grazie per il tuo ordine.');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Conferma: ');

define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annullamento autorizzazioni</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Se desideri annullare un\'autorizzazione, inserisci l\'id autorizzazione qui, e conferma:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Nota per il cliente:</strong>');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Grazie!. Tornate a trovarci.');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Esegui annullamento');
define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Status transazione:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Codice autorizzazione:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Address match:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP match:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 match:');
define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Giorni per dirimere:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
define('EMAIL_EC_ACCOUNT_INFORMATION', 'Al momento del checkout con PayPal Express viene automaticamente creato un conto cliente presso il nostro negozio, cos� potrai riaccedere per controllare lo stato dell\'ordine. Per accedere al conto cliente utilizza i dati seguenti:');

define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Spese Una tantum relative a ');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Sovrattasse');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Gestione spese e altri costi applicabili');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Sconti');
define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Crediti applicati, inclusi buoni sconto, certificati regalo, ecc');

define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Pagamento in Stato di Verifica Frode: ');
define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Questo una notifica automatica per avvisarti che Paypal ha identificato il pagamento per un nuovo ordine come Pagamento In attesa di verifica da parte del team Anti frode. Verifica di solito completata entro 36 ore. E\' FORTEMENTE CONSIGLIATO di NON EFFETTUARE SPEDIZIONI dell\'ordine fino al termine della verifica del pagamento. Puoi consultare l\'ultimo stato di verifica dell\'ordine effettuando il login con il tuo account Paypal e controllando le transazioni recenti.');

define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLEMA: Siamo spiacenti. PayPal ha inaspettatamente restituito un indirizzo vuoto. <br>Per completare l&#39;acquisto, si prega di fornire il proprio indirizzo premendo il pulsante &quot;Iscriviti&quot; qui sotto per creare un account nel nostro negozio. In questo modo puoi scegliere nuovamente PayPal continuando con l&#39;acquisto. Ci scusiamo per l&#39;inconveniente. In caso di problemi con l&#39;acquisto, inviare una richiesta con i dettagli dalla pagina dei Contatti, in modo da essere di aiuto per completare l&#39;ordine e prevenire questo problema in futuro. Grazie.');    

define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Tutti gli articoli nel tuo carrello (vedi dettagli nel negozio e sulla ricevuta del negozio).');
define('MODULES_PAYMENT_PAYPALWPP_MESSAGE_STACK_CHECKOUT_SHIPPING', 'Paga con PayPal e utilizza un indirizzo di spedizione registrato su PayPal.<br>Ti abbiamo reindirizzato a questa pagina perch� vogliamo assicurarci che l\'indirizzo di spedizione sia corretto.<br>Controlla i dati e modificali in caso di errore.');