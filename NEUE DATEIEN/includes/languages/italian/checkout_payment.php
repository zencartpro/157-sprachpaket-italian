<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_payment.php 2023-10-29 08:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Conferma Ordine');
define('NAVBAR_TITLE_2', 'Modalit&agrave; pagamento');


define('HEADING_TITLE', 'Fase 2 di 3 - Pagamento');


define('TEXT_SELECTED_BILLING_DESTINATION', 'A sinistra vedi l\'indirizzo di fatturazione. Se necessario, lo puoi modificare cliccando sul bottone <em>Cambia indirizzo</em>.');
define('TITLE_BILLING_ADDRESS', 'Indirizzo fatturazione:');


define('TEXT_SELECT_PAYMENT_METHOD', 'Scegliere la modalità di pagamento.');
define('TITLE_PLEASE_SELECT', 'Seleziona');

define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Spiacenti, ma attualmente non accettiamo pagamenti da questa localit&agrave;.</span><br>Se interessato puoi contattarci per eventuali opzioni alternative.');


define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Vai alla Fase 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- per confermare la richiesta.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Condizioni di vendita</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Selezionare la casella sottostante per confermare di aver letto ed accettato le Condizioni generali di vendita. Per visionarle nuovamente, si prega di cliccare <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>QUI</u></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Ho letto ed accetto le Condizioni generali di vendita. Ho compreso i termini del Diritto di recesso.</span>');


define('TEXT_YOUR_TOTAL','Il Tuo Totale');