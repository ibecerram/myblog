<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '09698be04545e2e5f2413162500be5be79c99e3fd8649752' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pjRh0A( @juEZr nA/-%OaBs,0W-]MS8C4)BYFW|vYx[_m?gX+Nr4m?)4BdU0p[q' );
define( 'SECURE_AUTH_KEY',  'uJa+(Xyds{X.g&lO5rWsv~F?[dIlEDw6JotaRIyMl%;~M<17KaX^/9%6J2? b1hE' );
define( 'LOGGED_IN_KEY',    'z^CxIc%XWdR-]iN`9/mxlgJ#W)M..;k4&2;*^IQQ}`bky7snji8xCRJ.}cES1p%X' );
define( 'NONCE_KEY',        ' *~<Vnm(ftaKp~N!h*8a]|&5j)R0@yjyC})?<{|KghEM?E_zb9Z{sWC}AH@~.d-7' );
define( 'AUTH_SALT',        'E%fqAFr.(BX<#wGX(V+Odl+XbpYhi:Jp!iaeN&*.=8sP}ntEin3A~EJ@AVnkD_sy' );
define( 'SECURE_AUTH_SALT', 'aQ K}*<T:w#qJ`VG3_TtPeD>mMF3/:n_By<{-OHO/9!R^ByEzIu0,?]3:5O8APeb' );
define( 'LOGGED_IN_SALT',   'PK=U&8{mXA}#pjOwc=:U3hJqL<S`QLk!a9P4|/5lt`<i;,b+r+,z<f{pi+=];BMq' );
define( 'NONCE_SALT',       '0483o1^yS[>Pw/>:FXyw|AS;`!?RMNV_Sntf%m&tUkP)e:$#=%6j>sdEY$#|5a`>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
