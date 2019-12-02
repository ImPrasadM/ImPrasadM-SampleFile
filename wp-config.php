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
define( 'DB_NAME', 'sample' );

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
define( 'AUTH_KEY',         'K[RSb93MnYNHWZF=K/a*6}]V_Y83K7%T6@b(z+F<c29FBzNj)mvF.J4ckfkO^6vL' );
define( 'SECURE_AUTH_KEY',  'K_(9`MI7^HTvKUALe%<z|Nq89AwaX6#hqsTMN3T9(`Kj`Zq^xe^^~xs!]e=,S,ay' );
define( 'LOGGED_IN_KEY',    '#8#<fh*ldFcZGiS4Im.3>F43$^{mlJN:nes.Kbq}_p8fsB~FZFy8jW)-+_elD#?h' );
define( 'NONCE_KEY',        '+=]<;Vk:7zKQC4#L6DpCK2baZ|JNJuK3Ee_j:h=neVcQA$;8Y4L.F/f?79|<k]*j' );
define( 'AUTH_SALT',        ';Bvy(PfgivJi*h4xNSj+t)?i`r3:N_d?rKQ**W.-&}:>B@TkGH_sjI+0$FtP%bG=' );
define( 'SECURE_AUTH_SALT', '_BbPl*+wF,HJZTo10OW!mda@!4+7wU_PbgAh^<w`!km]hF3`BEJC83?taMkk=*0#' );
define( 'LOGGED_IN_SALT',   'EaoBr9RV0cyybx[F`TSKr|%[#7Mt3)d+^BpF>@<KOtC6(Q@=ssZZx^M^(SVO2t?V' );
define( 'NONCE_SALT',       'A!Qt_D^mVbWS$4Kv3<C;k4s@]S&OJJ|*<SiX;Y]*v7Z@yBLDTrc/GcB}y-un2N5L' );

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
