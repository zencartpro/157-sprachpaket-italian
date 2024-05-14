<?php
/**
 * Zen Cart German Specific (zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: ot_coupon.php 2024-05-14 20:57:14Z webchills $
 */

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Buoni sconto');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Buono regalo/coupon');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Buoni sconto');
  define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', TEXT_GV_REDEEM);



  define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Digita il codice del buono acquisto a fianco della scritta Riscuoti buono. L\'importo sarà utilizzato per intero e verrà automaticamente scontato dal totale, una volta premuto il pulsante Continua.</p><p>Nota: si pu&ograve; utilizzare un solo buono per ordine.</p>');
  define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Il tuo Codice di Riscossione: ');
define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'RIMUOVERE');
  define('TEXT_REMOVE_REDEEM_COUPON', 'Il Buono Sconto &egrave; stato rimosso come richiesto!');
  define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', 'Settaggio include tasse = true, pu&ograve; essere solo se voce ricalcola = None');
  define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Per rimuovere un Buono Sconto da questo ordine digita <b>REMOVE</b> e premi Invio o Continua</p>');