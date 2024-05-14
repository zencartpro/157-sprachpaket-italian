<?php
/**
 * Zen Cart German Specific
 * Constants used by the zen_update_orders_history function.
 * 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php 2023-12-18 16:31:14Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Stato dell\'ordine aggiornato');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Caro Sig. ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Cara signora ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Buon giorno ');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'Vi informeremo sullo stato del vostro ordine con ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Numero d\'ordine:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Dettagli dell\'ordine:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Data dell\'ordine:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Commenti: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Lo stato dell\'ordine è stato aggiornato.' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Lo stato dell\'ordine non è cambiatot:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Stato attuale:</strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Stato di età:</strong> %1$s, <strong>Nuovo stato:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Se avete domande, rispondete a questa e-mail.' . "\n");