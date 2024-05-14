<?php
/** 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_faq.php 2022-04-09 12:28:14Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');
define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Wie bestelle ich ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">Wie versende ich ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Einkaufen mit ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">Einl�sen von ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5').'">Wenn Probleme auftreten</a><br>
');

define('SUB_HEADING_TITLE_1','Wie bestelle ich ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', TEXT_GV_NAMES . ' k�nnen Sie ganz normal wie andere Artikel unseres Shops bestellen. Bezahlen k�nnen Sie bei uns mit den herk�mmlichen Bezahlarten.
  Ist die Bestellung eines ' . TEXT_GV_NAME . 's abgeschlossen, wird der Wert Ihrem pers�nlichen
   ' . TEXT_GV_NAME . 'konto gutgeschrieben. In Ihrem pers�nlichen Warenkorb erscheint der eingel�ste Betrag Ihres ' . TEXT_GV_NAME . 'kontos. Zus�tzlich erscheint ein Link Ihres ' . TEXT_GV_NAME . 's, den Sie dann an Freunde und Bekannte per E-Mail weiterleiten k�nnen.');

define('SUB_HEADING_TITLE_2','Wie versende ich ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_2','Um einen ' . TEXT_GV_NAME . ' zu versenden, brauchen Sie nur auf unsere ' . TEXT_GV_NAME . ' - Versandseite zu gehen. Den Link hierf�r finden Sie in Ihrem pers�nlichen Warenkorb.
  Beim Versenden eines ' . TEXT_GV_NAME . 's m�ssen Sie folgende Daten angeben:<br>
  Den <strong>Namen</strong> der Person, der Sie den ' . TEXT_GV_NAME . ' senden m�chten.<br>
  Die <strong>E-Mail Adresse</strong> der Person, der Sie den ' . TEXT_GV_NAME . ' senden m�chten.<br>
  Den <strong>Betrag</strong>, den Sie versenden m�chten.<br> (HINWEIS: Sie m�ssen nicht den gesamten Betrag des ' . TEXT_GV_NAME . 'kontos verwenden.)<br><br>
  Sie erhalten zus�tzlich per E-Mail eine kurze Information.
Um Fehler zu vermeiden, stellen Sie bitte sicher, dass Sie alle Daten korrekt eingegeben haben. Sie werden sp�ter zus�tzlich noch einmal die Gelegenheit haben, Ihre Angaben zu �berpr�fen, bevor Sie den Gutschein versenden.');

define('SUB_HEADING_TITLE_3','Einkaufen mit ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_3','Wenn Ihr ' . TEXT_GV_NAME . 'konto Guthaben aufweist, k�nnen Sie
  damit andere Artikel in unserem Shop kaufen. W�hrend des Bestellvorgangs wird ein zus�tzliches Eingabefeld erscheinen.<br> Geben Sie dort bitte die H�he des Betrages an, den Sie von Ihrem ' . TEXT_GV_NAME . 'konto abheben wollen.
  Sollte der Bestellwert das Guthaben Ihres ' . TEXT_GV_NAME . 'kontos �berschreiten, k�nnen Sie f�r den Differenzbetrag die gew�nschte Zahlungsweise w�hlen.
  Ist der Bestellwert geringer als das Guthaben Ihres ' . TEXT_GV_NAME . 'kontos, bleibt das Restguthaben Ihres ' . TEXT_GV_NAME . 'kontos nat�rlich f�r weitere Eink�ufe bestehen.');

define('SUB_HEADING_TITLE_4','Einl�sen von ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_4','Beim Erhalt eines ' . TEXT_GV_NAME . ' per E-Mail werden Ihnen darin der Absender, der Wert des ' . TEXT_GV_NAME . 's, sowie eine kurze Nachricht des Absenders mitgeteilt. Die
E-Mail beinhaltet auch noch den ' . TEXT_GV_NAME . ' mit dem ' . TEXT_GV_REDEEM . '. Wir empfehlen Ihnen, sich Ihren ' . TEXT_GV_NAME . ' f�r den sp�teren Gebrauch auszudrucken.<br><br><u>Sie k�nnen Ihren ' . TEXT_GV_NAME . ' nun auf
  zwei Arten einl�sen:</u><br><br>
  1. Durch Klicken auf den mitgesendeten Link der E-Mail,
  der Sie direkt auf die  ' . TEXT_GV_NAME . 'seite bringen wird. Damit dieser ' . TEXT_GV_NAME . ' g�ltig wird, m�ssen Sie - sofern Sie noch keines besitzen - ein Konto in unserem Shop erstellen.
  Nach erfolgreicher Anmeldung wird Ihnen das Guthaben dieses Gutscheins auf Ihr <br><br><center><strong>pers�nliches ' . TEXT_GV_NAME . 'konto</strong></center><br> gutgeschrieben. Ab sofort k�nnen sie nun dieses Guthaben f�r Ihre Zwecke verwenden.<br><br>
  2. W�hrend des Bestellvorgangs k�nnen Sie auf der Seite, auf der Sie Ihre <strong>Zahlungsweise</strong> angeben, auch den ' . TEXT_GV_REDEEM . ' eingeben. Geben Sie Ihren pers�nlichen ' . TEXT_GV_REDEEM . ' ein und
  klicken Sie abschlie�end auf "Einl�sen". Nach einer kurzen �berpr�fung auf G�ltigkeit des einzul�senden ' . TEXT_GV_NAME . 's wird das Guthaben Ihrem pers�nlichen ' . TEXT_GV_NAME . 'konto gutgeschrieben.<br>Ab sofort k�nnen Sie nun den Betrag zu Ihrem Zweck verwenden.');

define('SUB_HEADING_TITLE_5','Wenn Probleme auftreten.');
define('SUB_HEADING_TEXT_5','F�r Fragen zu unserem ' . TEXT_GV_NAME . ' System wenden Sie sich bitte an unseren
Service, den Sie auf unserer <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Kontaktseite</a> erreichen. Um Ihnen rasch helfen zu k�nnen, geben Sie hierf�r bitte m�glichst viele Informationen an. ');



  define('SUB_HEADING_TITLE_0','');
  define('SUB_HEADING_TEXT_0','Bitte w�hlen Sie Ihr Thema, zu dem Sie Fragen haben.');

  

define('TEXT_GV_REDEEM_INFO', 'Bitte geben Sie Ihren  ' . TEXT_GV_NAME . ' Code ein: ');
define('TEXT_GV_REDEEM_ID', 'Gutscheincode:');