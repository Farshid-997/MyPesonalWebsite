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

define( 'DB_NAME', "test" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'P9qUgor3r^g^,!U%^lYnRtje(VWkAI*Kwxc0/3/xUVN757E8UsUsi)]F:U28^#b6' );

define( 'SECURE_AUTH_KEY',  '9aQo(K (b )4OOf:YJ4i~4N.lP?9O@`sPctm>f4BC:-LtkN*d71ym4AfzX0r}CQ7' );

define( 'LOGGED_IN_KEY',    'Qt|drD*Cnrf_2(;m&KS=t_YNu.-3@5lhG7syZ&lUQNjFZ&F@,tg_g..(z>_&6L4~' );

define( 'NONCE_KEY',        '=;s+vs*EKJXARi]&a]@`FH5e[45L4{0WUoP]gK+yCK[rpj:gbys1!%D*[9E>dL~^' );

define( 'AUTH_SALT',        '3mL?LHmKNz|!nBf L_z/ jlY VvLpPIB0Kswe)/%V}Dn-O|KL*][{7xG{#}R/0HD' );

define( 'SECURE_AUTH_SALT', 'lB)B;0vfSHe/sJGVlfv;U7uRBC^`e*hehG! MnSNP;4#@XnBEY{d]g$v1U3iS }>' );

define( 'LOGGED_IN_SALT',   'Fyb?y)I79;P~CY2l^SGb}^;x7{=(l}ES!j4c?a! ^n}*^>yY+8|C8OFS5{,3co!5' );

define( 'NONCE_SALT',       '=},_5r3H76`@_|)R.}$y7rr)`Gu<Yqd:vWRWC~,0k<l{.Ia!Lx.&w[-)pw8yD72+' );


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

