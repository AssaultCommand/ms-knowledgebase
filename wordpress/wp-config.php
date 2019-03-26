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
define( 'DB_NAME', 'armorwat_maerschalk' );

/** MySQL database username */
define( 'DB_USER', 'armorwat_mrschlk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YkwieQ_ld6{d' );

/** MySQL hostname */
define( 'DB_HOST', '192.99.219.32' );

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
define( 'AUTH_KEY',         '11~#sViZ7x+AMG=-6OE$LmtSQt`R[w)rSHqo<l3[E(qb_:FMSim]fL snjv!C%eB' );
define( 'SECURE_AUTH_KEY',  '#/CN]#Nt_s0/ T*M.o(~<Jbfs&+;U6S_.BE{Ab/ABdTw(qTfI-0$)&w:-&2+OCV$' );
define( 'LOGGED_IN_KEY',    'y.]  _cAOdL)oZ7xF6hgGPW/kQYob}9_<bF4Lo|^j$yPPzn,LfrNFX*lL.5DKQ2[' );
define( 'NONCE_KEY',        'JYQ;V9MdR;foOf[p4#drhub]_)?)kO@U9V+`4RLsaDE+UohgLqd,@zD<r:E4`AZ*' );
define( 'AUTH_SALT',        ' @H8G2aic.yVJmvRmWktG+gjB0`0^%wZ5Be~87K7:8V@=A7bH@eHXphou!UiR.gj' );
define( 'SECURE_AUTH_SALT', '4?g ns*%6>?qNOE6Z7i.tBTJvgFcVS$<O1&qOgL8iAb-x|$])VHQ_*@0O%pQ}MX+' );
define( 'LOGGED_IN_SALT',   'E5govCJeBEc>UsZ0;:T{GWDT]tQ}&^d+8?Mc2P`1{KsfrlH:+_p.i|Wv$Lp,km}}' );
define( 'NONCE_SALT',       ' U2cUB6vPf9,%GEH^ipqRF:*Gu5F>znDGRkeL~;8C97[eoq~rD{%.r#0E{u9Mb_c' );

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
