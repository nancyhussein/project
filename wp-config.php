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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7<yYC$A26KJk`UILWR@EI_{bT16R7i^fG>zRhE41`p*Q~7nrO9gp#~A}fm^IRe1O' );
define( 'SECURE_AUTH_KEY',  '9rTVld!7w6Of 3hjk&> [p!_Z[{Scb;DJhOW^r?Gk_m~0]z1{#@!=v)/DldTIe%@' );
define( 'LOGGED_IN_KEY',    '}Wz2X#iwW f^MF;&n0x.&oHc%:]bmGkD|1F6iv/m9scj~v$O@7H,?+x)!O.4(o^ ' );
define( 'NONCE_KEY',        'BYZij>1e^1hng]qd,:{gvgvFUyCu#?L5Z(?0CN)rN<7/T:6V /-iL>=bzZ9,aWbr' );
define( 'AUTH_SALT',        'RQ}2rZl9[t8:w:dPUbn&t[._QrhR|&ukKM1kRmwY?y?0EIKyN%@0r1[^t^23eu5]' );
define( 'SECURE_AUTH_SALT', ':;r*K3X:oC*UrU_]@<d!zi{fCvy2:.lxoEIx1,U6hO4*GqW_5;0ReV||s7pC2q3T' );
define( 'LOGGED_IN_SALT',   'YV}+u8(k umPS_f`fDMaS;heNQG@vwdt?%Ubz1Vb<=)rJ<CJVAaET3MY TDjo9de' );
define( 'NONCE_SALT',       '/@`yIZJtt$1<ceU.S?MY(,@EWQ|{`D`If_)If`K @!=fLJ,yjI&OG7VDUYINJbSZ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
