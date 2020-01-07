<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_template');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'Sc=#>x7jK/it8SQ[]|6swEAcVvp?1@LFp<`| a>E{E|oyr}G:VSN0&7|MtCb.V$_');
define('SECURE_AUTH_KEY',  'oBA-tdROyHfp2T:&i0^%-[fk-xEvJi*?OUd!3}cqlnK%p3pM&}[2B^$wxCB1# Cj');
define('LOGGED_IN_KEY',    'PU;8u6}eHFChLkDI-b?3}l|3%gF<bk&6sCaI>BiqoHKhC *@WYk?K $x-#XZ$v)Q');
define('NONCE_KEY',        '}zt=MtjSwS|_$Tv 9N]8H[vTD[W04gj-<3VeNAk*?|6 td%CxF5TVdJFLh_ly`iB');
define('AUTH_SALT',        'y%-u5%Wids^NuhwNp|3LP#gI=sMxZV|-nLo2Ijr8q3eOV/)s0|oXcsfzdZ$ID72t');
define('SECURE_AUTH_SALT', '<{r`,%oSJa_-.z=DgEQ&d/H)<)jpbjgr2+5Msy4ADBWT#pig:!KE_L&#gP:_;~-e');
define('LOGGED_IN_SALT',   '?tepvJBR_.&xPEY,DLr|L +]2E9[5 ~M[fwwW R6q]p%*9&XO9>l:JTpn#zbdN@_');
define('NONCE_SALT',       'MWT*Z<ibDyT?F v9HFfv*b`(KrrA(mS}DNZ-ak =<+@ba]:pvf&=1t|-)XzY=!Mi');


$table_prefix = 'wp_';

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
