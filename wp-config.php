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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "u356155903_aguiaandrade" );

/** Database username */
define( 'DB_USER', "u356155903_aguiaandrade" );

/** Database password */
define( 'DB_PASSWORD', "@Ff75638100" );

/** Database hostname */
define( 'DB_HOST', "31.170.167.1" );

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
define( 'AUTH_KEY',         '?8O12,{B{lb4W /He$WODSyIm*,hl_mTI^$2?.J<=#36[.Ky[)_alH7c9 P5sq+u' );
define( 'SECURE_AUTH_KEY',  '46?#jJXKm[L| 8)JC_HMjqu(4-;?`vgUTSk@6.JfX$`Uw[NG-JT):6tN|w#}Pqhj' );
define( 'LOGGED_IN_KEY',    'Zn^fK2u4`H#%;AIlR$K3sxg_F[jZ6WDQw$=+6{/}r]s76ymb7>HF*!+kZ`n~:_t|' );
define( 'NONCE_KEY',        'g/Zhk(G)aR Tx0vC7<pq:[3fPYee *45v#&!~NM[9; T{sGo8VRfuysBi)oZDs3u' );
define( 'AUTH_SALT',        '5uDHQSaiSd%XO.VDOvsEq6HYDHk~F&(`83)K,bVTfAr21@X$*L|&qk3!m<^rsiv3' );
define( 'SECURE_AUTH_SALT', 'CD}L(HU7ZQMrJusrBEnVo4R=-i437QJUVP<T6X$DEkfZ?$g[p1i<(9*4)KCJ EJS' );
define( 'LOGGED_IN_SALT',   '2p!6. Buj]@esYzmW1;WVP!WU<O#,fV#t+o@[XhiT87f)q^G9yG}70E@]*kRjMFL' );
define( 'NONCE_SALT',       'qU=NKLpc07LgJN;ft4ZUpH3idoWxJ!t/,9yS}Vfh:qAM4z%`_$FEKP.u%O<{.~fU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wgm_';

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



define( 'DUPLICATOR_AUTH_KEY', '&:u9,agyN1z`b_UnKEJy7]Gz;<kK.I8O*eB=j=N|)_- `c5P}Z}U{D>p;XPgCv`u' );
define( 'WP_PLUGIN_DIR', 'D:/ProjetosGit/wampserver/www/aguiaandradevidros/wp-content/plugins' );
define( 'WPMU_PLUGIN_DIR', 'D:/ProjetosGit/wampserver/www/aguiaandradevidros/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
