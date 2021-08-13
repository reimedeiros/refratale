<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'refratale' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`^Y.dNk^;J0Wf Ok-M#RQm^Mw#1(M:GBta9qC$g`dn1J4YrZGRBlA@MT^dPsu.^1' );
define( 'SECURE_AUTH_KEY',  ' ^z#1d<3 h}+tT{}{&<<q*%BB2%AQgoX7]U)umS(?VCeNbA1:EB[QvBSVKlr5yTR' );
define( 'LOGGED_IN_KEY',    'e|J*4%7#9`R/d/O5<9[3O5No)>UQWhD-=*^}HD<:vewKdojpmCB [VHclL/ zNnH' );
define( 'NONCE_KEY',        'NY! 0*ejCS2u(Tkmh3|2{#LFI+(L}Z5>m?/qmX<%mS%s*u2489t34Ad=vNh:!]B2' );
define( 'AUTH_SALT',        'QQv] tu$C:;_3MscY0mCuX~rvfQBcqe/rZa/sKfu0>fia)kulAl1IRCgj?Dn~dQ2' );
define( 'SECURE_AUTH_SALT', 'YUAJ@c-Jdev+fsU7}kn$MXomR#|bTV 0J^G*F$o+I~{w+e 9A)m(OL[(5F Xp?Cl' );
define( 'LOGGED_IN_SALT',   '((+?7`f_-CaE6<>gM[eOB;#9qWmX+AM Z+*$9;mhDfkfB,VHn,4C4+Qkarp_0R=)' );
define( 'NONCE_SALT',       'TqbR+b2;;Xtl ]u !F>n){(?TT%6cUkc9i,WQeLMo_b`/&iOi6Ul0v^O$k6$2V``' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lv_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
