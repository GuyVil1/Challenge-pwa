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
define('DB_NAME', 'aftercoakx556');

/** MySQL database username */
define('DB_USER', 'aftercoakx556');

/** MySQL database password */
define('DB_PASSWORD', 'xxgpUnT9Mjhr');

/** MySQL hostname */
define('DB_HOST', 'aftercoakx556.mysql.db:3306');

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
define('AUTH_KEY',         '477bMxOrgqdgZ5pQ6elyDcM2VtR+AC5fh6mH5cqpp5xJHWJxSyblmAGrTd4a');
define('SECURE_AUTH_KEY',  'wGAJC1HVCNBYNFDAc+4fNll4PLFOJ0Y4fMOPAGXJy0ULsqvKB01iv3Sria9k');
define('LOGGED_IN_KEY',    'HNNkrJDWoHQa46+/XSfaekgThH4Ibd/HmaoUGv5JRvuqUHPB6MmfyPaDkui2');
define('NONCE_KEY',        'jG/y7Pq/Cm2h5ChRgz1NzItdZ8pNu7BKdIQVu3R6SxQe7qt0Vup02fOK0Lb3');
define('AUTH_SALT',        'V75accbOjQ84h+cOaR9CW412yvehamTWZ0Tml1Ca+SsWnV0Oku9UQzba5V94');
define('SECURE_AUTH_SALT', 'OQigDZNmJd937uMRFTIaGb6IHnTqygTO0eaGjd9BzxbjRlLyKWHW70hhQhak');
define('LOGGED_IN_SALT',   'Wi44aBOYcdxuKxypmiOImPMmobT7JvrbPuxSpyCGLyWzNVGwpHCY6CB4kDOA');
define('NONCE_SALT',       'A7wtbna6QSnlZ83Vj6ZyEtOcNKlpbP3m2747uPfw5jX8pn+ruoPcDcuCmfPd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor687_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
