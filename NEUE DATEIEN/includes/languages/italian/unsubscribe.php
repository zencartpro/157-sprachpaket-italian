<?php
/**
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: unsubscribe.php 2010-08-30 15:05:14Z webchills $
 */

define('NAVBAR_TITLE', 'Annullamento Sottoscrizione');
define('HEADING_TITLE', 'Annullamento Sottoscrizione dalla nostra Newsletter');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br>Siamo dispiaciuti di apprenderere che desideri annullare la sottoscrizione dalla nostra newsletter. Se hai dubbi o domande riguardanti la Privacy, per favore leggi la nostra <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">Informativa sulla Privacy</span></a>.<br><br>I sottoscrittori della nostra newsletter ottengono notifiche sui nuovi prodotti, riduzioni di prezzo, e novit&agrave; sul sito.<br><br>Se rimani dell\'idea di non voler pi&ugrave; ricevere la nostra newsletter, clicca sul pulsante qui sotto. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br>Siamo dispiaciuti di apprenderere che desideri annullare la sottoscrizione dalla nostra newsletter. Se hai dubbi o domande riguardanti la Privacy, per favore leggi la nostra <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">Informativa sulla Privacy</span></a>.<br><br>I sottoscrittori della nostra newsletter ottengono notifiche sui nuovi prodotti, riduzioni di prezzo, e novit&agrave; sul sito.<br><br>Se rimani dell\'idea di non voler pi&ugrave; ricevere la nostra newsletter, clicca sul pulsante qui sotto. Sarai portato alla tua pagina di impostazione preferenze account, dove potrai modificare le tue sottoscrizioni. Ricordati di effettuare il login prima.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br>Il tuo indirizzo email, qui mostrato, &egrave; stato rimosso dalla nostra lista di sottoscrizione Newsletter, come da tua richiesta. <br><br>');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br>L\'indirizzo email che hai specificato non &egrave; stato trovato nel nostro database, o era gi&agrave; stato rimosso salla nostra lista di sottoscrizione newletter. <br><br>');