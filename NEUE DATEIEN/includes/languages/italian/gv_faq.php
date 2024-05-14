<?php
/** 
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_faq.php 2024-05-14 19:28:14Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');
define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Come posso ordinare ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">Come si invia ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Comprare con ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">Riscatto di ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5').'">Quando si verificano problemi</a><br>
');

define('SUB_HEADING_TITLE_1','Come ordinare ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', TEXT_GV_NAMES . ' possono essere ordinati come gli altri articoli del nostro negozio. È possibile pagare con le consuete modalità di pagamento.
  Se l\'ordine di un ' . TEXT_GV_NAME . 's viene completato, il valore verrà aggiunto al vostro conto personale
   ' . TEXT_GV_NAME . 'conto viene accreditato. L\'importo riscattato del vostro ' . TEXT_GV_NAME . 'del conto. Inoltre, un link al vostro ' . TEXT_GV_NAME . 's, che potrete poi inoltrare ad amici e conoscenti via e-mail.');

define('SUB_HEADING_TITLE_2','Come posso inviare ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_2','Per inviare un ' . TEXT_GV_NAME . ', è sufficiente fare clic sul nostro ' . TEXT_GV_NAME . ' della nostra pagina di invio. Troverà il relativo link nel suo carrello personale.
  Quando si invia un ' . TEXT_GV_NAME . ', è necessario immettere i seguenti dati:<br>
  Il <strong>nome</strong> della persona a cui si vuole inviare il ' . TEXT_GV_NAME . ' si desidera inviare.<br>
  L\'<strong>indirizzo e-mail</strong> della persona a cui si desidera inviare il ' . TEXT_GV_NAME . ' che si desidera inviare.<br>
  L\'<strong>importo</strong> che si desidera inviare.<br> (NOTA: non è necessario inviare l\'intero importo del ' . TEXT_GV_NAME . 'conto.)<br><br>
  Riceverete anche una breve notifica via e-mail.
Per evitare errori, assicuratevi di aver inserito correttamente tutti i dati. Avrete inoltre la possibilità di ricontrollare i vostri dati in un secondo momento, prima di inviare il voucher.');

define('SUB_HEADING_TITLE_3','Shopping con ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_3','Se il vostro ' . TEXT_GV_NAME . 'il vostro conto ha del credito, potete usarlo per
  per acquistare altri articoli nel nostro negozio. Durante il processo di ordinazione, apparirà un campo di immissione aggiuntivo.<br> Si prega di inserire la somma di denaro che si desidera prelevare dal proprio ' . TEXT_GV_NAME . 'conto che si desidera prelevare.
  Se il valore dell\'ordine supera il saldo del conto ' . TEXT_GV_NAME . 'conto, è possibile selezionare il metodo di pagamento desiderato per la differenza.
  Se il valore dell\'ordine è inferiore al saldo del conto ' . TEXT_GV_NAME . 'conto, il saldo rimanente del vostro ' . TEXT_GV_NAME . 'conto rimarrà ovviamente per ulteriori acquisti');

define('SUB_HEADING_TITLE_4','Riscatto' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_4','Quando si riceve un ' . TEXT_GV_NAME . ' via e-mail, il mittente, il valore del ' . TEXT_GV_NAME . ', oltre a un breve messaggio del mittente. Il messaggio
e-mail contiene anche il ' . TEXT_GV_NAME . ' con il simbolo ' . TEXT_GV_REDEEM . ' Si consiglia di visionare il proprio ' . TEXT_GV_NAME . '<br><br><u>È possibile stampare il proprio ' . TEXT_GV_NAME . ' in due modi
  due modi:</u><br><br>
  1. cliccando sul link inviato con l\'e-mail,
  che vi porterà direttamente alla pagina ' . TEXT_GV_NAME . '. In modo che questo ' . TEXT_GV_NAME . ' sia valido, è necessario creare un account nel nostro negozio - se non ne avete già uno.
  Una volta effettuata la registrazione, il saldo di questo buono verrà accreditato sul vostro <br><br><center><strong>nome personale ' . TEXT_GV_NAME . 'conto</strong></center><br> sarà accreditato. Ora è possibile utilizzare questo credito per i propri scopi.<br><br>
  2. durante il processo d\'ordine, nella pagina in cui si specifica il <strong>metodo di pagamento</strong>, è possibile selezionare anche l\'opzione ' . TEXT_GV_REDEEM . ' nella pagina in cui si inserisce il metodo di pagamento. Inserite il vostro ' . TEXT_GV_REDEEM . ' e
  quindi cliccare su "Riscatta". Dopo un breve controllo della validità del ' . TEXT_GV_NAME . ' da riscattare, il credito verrà aggiunto al vostro ' . TEXT_GV_NAME . ' D\'ora in poi potrà utilizzare l\'importo per i suoi scopi.');

define('SUB_HEADING_TITLE_5','Se si verificano problemi.');
define('SUB_HEADING_TEXT_5','Per domande sul nostro ' . TEXT_GV_NAME . ', si prega di contattare il nostro
Servizio Assistenza, che potete trovare nella nostra <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">pagina dei contatti</a>. Per potervi aiutare rapidamente, vi preghiamo di fornire il maggior numero di informazioni possibile. ');

define('SUB_HEADING_TITLE_0','');
define('SUB_HEADING_TEXT_0','Selezionare l\'argomento su cui si hanno domande');
define('TEXT_GV_REDEEM_INFO', 'Inserire il proprio ' . TEXT_GV_NAME . ' codice: ');
define('TEXT_GV_REDEEM_ID', 'Codice del buono:');