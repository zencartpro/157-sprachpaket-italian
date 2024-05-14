<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: download_time_out.php 2023-10-29 09:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Il tuo download ...');
define('HEADING_TITLE', 'Il tuo downolad ...');

define('TEXT_INFORMATION', 'Spiacenti, ma il tuo download &egrave; scaduto.<br><br>
  Se avevi altri download e vuoi recuperarli,
  recati alla pagina del <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Tuo account</a> per rivedere il tuo ordine.<br><br>
  Oppure, se ritieni che qualcosa sia andato storto in fase di ordinazione <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Contattaci</a> <br><br>
  Grazie!
  ');