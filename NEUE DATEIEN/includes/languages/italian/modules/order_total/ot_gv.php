<?php
/**
 * Zen Cart German Specific (zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: ot_gv.php 2023-10-29 20:57:14Z webchills $
 */

  define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Buoni Sconto');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES);

  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Ammontare ->&nbsp;');
  define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM);
  define('TEXT_INVALID_REDEEM_AMOUNT', 'Disponibilit&agrave; inferiore al valore immesso');
  define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Saldo Disponibile: ');
  define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Per usare i Buoni Sconto trovati gi&agrave; nel tuo account, digita l\'importo che desideri nella casella con la dicitura \'Ammontare ->\'. Ti sar&agrave; richiesto di scegliere il metodo di pagamento,  dopodich&egrave; fai click su pulsante continua per aggiornare il tuo carrello.</p><p>Se stai riscuotendo un <em>nuovo</em> Buono Sconto devi digitare il numero nella casella a fianco di Codice di Riscossione. La somma riscossa sar&agrave; aggiunta al tuo account quando farai click sul pulsante continua.</p>');
  define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', 'Settaggio include tasse = true, pu&ograve; essere solo se voce ricalcola = None');