<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if (file_exists( dirname( __FILE__ ) . '/../production-config.php' )) {
    define( 'WP_LOCAL_DEV', false );
    include( dirname( __FILE__ ) . '/../production-config.php' );
} else {
    define( 'WP_LOCAL_DEV', true );
    include( dirname( __FILE__ ) . '/../local-config.php' );
}

define('WP_SITEURL', WP_HOME . '/wordpress');

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// =========================
// Disable automatic updates
// =========================
define( 'AUTOMATIC_UPDATER_DISABLED', true );

define( 'DISALLOW_FILE_EDIT', true );

// =======================
// Load WordPress Settings
// =======================
$table_prefix  = 'wp_';

if (! defined( 'ABSPATH' )) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
}
require_once( ABSPATH . 'wp-settings.php' );
