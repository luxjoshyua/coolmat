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
define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat');

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER') ?: 'root');

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:  'root');

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', getenv('AUTH_KEY') ?: '6`pi>,:7Q;s<YqnAjDnGDlc6zw;/2/8r$tu0DT1,u`q8T~Im$P0n*Ok7^<;1qouP');

define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?:  ',lnjh$}R.>Oh~Ay}n_xv.55w/bE&s)tI4gpB2%bEdsg*1*:o=uK )>Urm;w~k?)l');

define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: '@YNY%~yEh!_ JM!cV3CNu=~dTNbai}VNI]hg/F}CR4O<t<oQ-9WNtSX{*_[/3(F^');

define('NONCE_KEY', getenv('NONCE_KEY') ?: '1EtRGxw?UQ??Fb{,_OlLvYn@&-W4s&wm&csrppk$Q{C=dnQ4V~.%l>x(`cc6b2!v');

define('AUTH_SALT', getenv('AUTH_SALT') ?: ']/z%}!H 5ai|vfMPAUI+7JIj4cXT!s+&R//v-#mpb.StN4_$Fp5/$=f+>OV$a;d3');

define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: '$s5g.2)~$!84VHeJDm{&D!{WL!zg#YlJ4qy051g}wse0b8gGbBHbhY7g?FABOOpZ');

define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'bR^4D{~wihMXmx4XT{)xN+9;e6< a?CMj)K^`!Tn7_W%/s($L}:(r `Rj2eQrCmC');

define('NONCE_SALT',  getenv('NONCE_SALT') ?: 'sG`9)LIzYXez|^$@wB lOsm^#?qh26z4:x<xCFfDAq]&oDh=YLhxI5qA`.O^&Omr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
