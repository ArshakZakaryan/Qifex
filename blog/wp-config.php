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
define('DB_NAME', 'wordpress_7c0');

/** MySQL database username */
define('DB_USER', 'wordpress_ee');

/** MySQL database password */
define('DB_PASSWORD', '7IbfPZl_48');

/** MySQL hostname */
define('DB_HOST', '198.71.227.85:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'RYQGI@Ah^2eqL9OKBapGjpGt%5^!!cSHUWjqmhp6qlYaW1z6Xpk8J@mcHn8SMa)7');
define('SECURE_AUTH_KEY',  'U@(!yV%3TVzhnha^qfWgVx!(n9pm8eHSNRQWe7MM)g%lyx5(tY8KIvvHnlxVC2G#');
define('LOGGED_IN_KEY',    'UL&v(v(8gccbfw*kiDRDN(!SqMMnCMtpLK7%I#zBtNA6X1Zq3ks79wE9O4hSx8xE');
define('NONCE_KEY',        'oO2D)*HJa6bKI0y8NF3O*ew)WHYwr8a1F0aViCbWvrJpF&(A#0%%IxMuOLtXROSt');
define('AUTH_SALT',        'Rl@bPkUK&b%^I&yvn9b#wmHhVp7acKc)p^*4@qIx)nbHXAK@UvNWL4K73^qwy7bF');
define('SECURE_AUTH_SALT', 'SITDRAu&jvMcO8DErrE)%Jdd#bR%)Fhkr(QFW#Tzjdeg7tq#wh4f)Kv^^SBGZW(J');
define('LOGGED_IN_SALT',   '9g&%WT!ekOtt^W^Y50K)6#zEY!KFZM&(Cm9OB9%NmRdjVCwUECI85Rt4EXvn@R@X');
define('NONCE_SALT',       'fKw(EfzvrNxnI^(9IIFe*9lTGd0CrLpGKYufb(S0gn1ATZCS*BAiOskbkaydwWnT');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2hpJm_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
