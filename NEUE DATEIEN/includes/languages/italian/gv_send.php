<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_send.php 2024-04-12 18:52:16Z webchills $
 */

define('HEADING_TITLE', 'Invia ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Conferma il ' . TEXT_GV_NAME);
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Inviato');
define('NAVBAR_TITLE', 'Invia ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Messaggio da ' . STORE_NAME);
define('HEADING_TEXT','<br>Per cortesia, inserisci qui sotto i dettagli dei ' . TEXT_GV_NAME . ' che desideri inviare. Per maggiori informazioni, consulta le nostre <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a><br>');

define('ENTRY_MESSAGE', 'Messaggio per destinatario:');
define('ENTRY_AMOUNT', 'Ammontare del ' . TEXT_GV_NAME . ':');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Manca l\'indirizzo E-mail. Scrivilo qui sotto. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Questo ' . TEXT_GV_NAME . ' ammontare non sembra essere corretto. Cortesemente correggi.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Questo indirizzo email &egrave; corretto? Cortesemente verifica!');
define('MAIN_MESSAGE', '<br>Stai inviando un ' . TEXT_GV_NAME . ' del valore di %s a %s,  il cui indirizzo email &egrave; %s.<br>Se queste informazioni non sono corrette, puoi modificare il messaggio cliccando sul pulsante <strong>modifica</strong>.<br><br>Il messaggio che stai inviando &egrave;:<br><br>');
define('SECONDARY_MESSAGE', 'Caro(a) %s,<br><br>' . 'Ti &egrave; stato inviato un ' . TEXT_GV_NAME . ' del valore di %s da %s');
define('PERSONAL_MESSAGE', '%s dice');
define('TEXT_SUCCESS', '<br>Complimenti,<br>il tuo ' . TEXT_GV_NAME . ' &egrave; stato inviato!');
define('TEXT_SEND_ANOTHER', 'Spedisci un altro ' . TEXT_GV_NAME . '?');


define('EMAIL_GV_TEXT_SUBJECT', 'Un regalo da %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Complimenti, hai ricevuto un ' . TEXT_GV_NAME . ' del valore di %s');
define('EMAIL_GV_FROM', 'Questo ' . TEXT_GV_NAME . ' ti è stato inviato da %s');
define('EMAIL_GV_MESSAGE', 'con il seguente messaggio: ');
define('EMAIL_GV_SEND_TO', 'Ciao, %s');
define('EMAIL_GV_REDEEM', 'Per riscuotere questo ' . TEXT_GV_NAME . ', clicca sul link sottostante. Ti consigliamo anche di annotare il codice del Buono: %s  qualora dovessero insorgere difficoltà.');
define('EMAIL_GV_LINK', 'Per riscuotere clicca qui');

define('EMAIL_GV_FIXED_FOOTER', 'Se dovessi incontrare difficoltà nella riscossione dei ' . TEXT_GV_NAME . ' mediante il link automatico qui sopra, ' . "\n" .
'puoi anche inserire il ' . TEXT_GV_NAME . ' e riscuoterlo durante la procedura di acquisto.');
define('EMAIL_GV_SHOP_FOOTER', '');