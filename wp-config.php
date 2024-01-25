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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '{/!*J1mr},C6cO9=sbAX-pNceg^#_3!npyOcWKb/}Y8SN&(N}%~)y|AGDEBWMWZ+' );
define( 'SECURE_AUTH_KEY',  '$Z%I5BOhJ1D6@I,Z$I+]]D h-3~U=Bqs1L^+c+T-oJKC@KeCHP=hOI,gqn_DA3V%' );
define( 'LOGGED_IN_KEY',    'u Y:LOPJ}*r,y5]lms<HpM0GFrtaCYJQWQ/+AEOjLWP{niBF@_8=*K`N+v&72:J~' );
define( 'NONCE_KEY',        'xR9DEA3v$:z^wrCu =728?@/$9O6`ATsc<T2l|+q6jo_yU_sy|0$rLh@e*o^Kt[$' );
define( 'AUTH_SALT',        'cQsCuHA1~+7<w 2(U@7XbA(4w(2WjSUEBZ1nnH|zQ?&|wwKp<mGvQrjrwGA&;snM' );
define( 'SECURE_AUTH_SALT', ' _3f6HNsWNVkNCCu9=0nRtqJ$4g*I8Q.)0a<];1 D{-~gK>]]3a5p1eK?bg!s2wP' );
define( 'LOGGED_IN_SALT',   'G;Q,;;1t<FRIemB{)7?-Q(s]_r#i khNsJ;viP/Oc_DB[2}p><D]14[0Abt-Zyqe' );
define( 'NONCE_SALT',       'Q~F0gJ+tZq0C2*=2Wxa|4B{~z(|7b6c%d`br4?jp5o;?<!*,Yq_b2 Q!? +&j6W*' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
