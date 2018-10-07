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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'T#MulfMVNkqF2<Yw%@K1qaZKdmkV}lrej;#7&w82(hHZkui|HRXRmgu|/r.P|>:I');
 define('SECURE_AUTH_KEY',  '2red=zv/yKOf-]coWnVa*2taak/e49SNaNQ!GWa`vJ/[$F;<pm+#]qqV:IX?yb2H');
 define('LOGGED_IN_KEY',    'cVrQmFM^_|+8DU(+L{+.)P6M1;,t9+`-*(RM_bAdJQUy)}?N2~q=)K!R{C++iThu');
 define('NONCE_KEY',        ',D=?HY-JqQ3K1N&b81E]6Mc2aq -}Q.|GO+QNUFmZVtMD [f+v=gi%<!9^X!pPqY');
 define('AUTH_SALT',        'T#Dn?GasSu2v-Mb?%[+LER2r6PBu(KT4R7pH1}Me<w7R>Qc0i -lzK-@J97W0;UY');
 define('SECURE_AUTH_SALT', '7pKFyK+Ox68l]]_N t?:!P$+wrf|$,lM+{ZLBO{jk$qN#xXYOtvJ/}K|0s7n|ho ');
 define('LOGGED_IN_SALT',   'jx)Y(k0C+(cT!^-8b%T>_f_5^nMO|T8S@)zu%QO*kwVKH!*obQ5HkJjF4|!||mL8');
 define('NONCE_SALT',       ']q|FN&vr<v UN0Hlgq|ZYC_~^RGYaG(wB4LTAdV&B!YDw*`4,S0~H):(bGinuQ&n');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
