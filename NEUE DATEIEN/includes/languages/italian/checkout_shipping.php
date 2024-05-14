<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_shipping.php 3027 2012-01-18 17:15:51Z LaVale $
 */

define('NAVBAR_TITLE_1', 'Conferma Ordine');
define('NAVBAR_TITLE_2', 'Modalit&agrave; di spedizione');

if($_SESSION['COWOA']) $COWOA=TRUE;

if($COWOA)
define('HEADING_TITLE', 'Step 2 of 4 - Dettagli spedizione');
else
define('HEADING_TITLE', 'Step 1 of 3 - Dettagli spedizione');


define('TABLE_HEADING_SHIPPING_ADDRESS', 'Indirizzo spedizione');
define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'La merce verrà consegnata all\'indirizzo riportato a sinistra. Se si desidera modificare, cliccare sul pulsante <em>Cambia indirizzo</em> qui accanto.');
define('TITLE_SHIPPING_ADDRESS', 'Indirizzo spedizione:');

define('TABLE_HEADING_SHIPPING_METHOD', 'Modalit&agrave; di spedizione');
define('TEXT_CHOOSE_SHIPPING_METHOD', 'Scegli la modalit&agrave; che preferisci.');
define('TITLE_PLEASE_SELECT', 'Seleziona');
define('TEXT_ENTER_SHIPPING_INFORMATION', 'Al momento questa &egrave; l\'unica modalit&agrave; di spedizione disponibile.');

define('TITLE_NO_SHIPPING_AVAILABLE', 'Attualmente non disponibile');
define('TEXT_NO_SHIPPING_AVAILABLE','<span class="alert">Spiacenti, ma attualmente non consegnamo a questa destinazione.</span><br>Se interessato puoi contattarci per eventuali opzioni alternative.');

define('TABLE_HEADING_COMMENTS', 'Spazio per richieste particolari o commenti');

if($COWOA)
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Vai alla fase 3');
else
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Vai alla fase 2');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE','- per scegliere la modalit&agrave; di pagamento.');

// when free shipping for orders over $XX.00 is active
  define('FREE_SHIPPING_TITLE', 'Spedizione gratuita');
  define('FREE_SHIPPING_DESCRIPTION', 'Spedizione gratuita per gli ordini superiori a %s');
  
define('ERROR_PLEASE_RESELECT_SHIPPING_METHOD', 'Le opzioni di spedizione disponibili sono cambiate. Prego selezionare nuovamente il metodo di spedizione desiderato.');

define('TEXT_INFORMATION_SHIPPING', 'Dal 1 luglio 2013 vi è una maggiore responsabilità per i dati degli indirizzi errati o mancanti per non erogabilità, a causa di dati errati indirizzo, le riserve DHL, una tassa di affrancatura di 15, - Euro per spedizione internazionale da calcolare. Si prega di aiutare a evitare questo errore esaminando i vostri dati. grazie');