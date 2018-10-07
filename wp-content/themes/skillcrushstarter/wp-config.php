<?php
# Database Configuration
define( 'DB_NAME', 'wp_cat810' );
define( 'DB_USER', 'cat810' );
define( 'DB_PASSWORD', 'YiLHYYPNNDxlSCoJ4cGI' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'RLEw37--ROXTOpJOv_=F~7uaCN)?rax_4+6JuNrzjK3Z4w$rETNlZ2+jeN]|whY[');
define('SECURE_AUTH_KEY',  'Bg?tg0@o;=Hx20VJ<Bm>3g k]VS,]W+%RdorkGWL_>8t35Ki$eM}R<t }|B-0l q');
define('LOGGED_IN_KEY',    'Ew,i7mFR.V`U<t0GPH[WnbvWq4q>@-Fy0-v1n JUaJUZ!@{,EoO6E^b-_;F{f+e~');
define('NONCE_KEY',        'amtT.A~}!X#Y[thIg=#jz1~Ak}$fb)&Bf1^0|NDPIxf>(cyHF<NbBG1E-QD*k+*^');
define('AUTH_SALT',        '{agIlm!VT|#eZsB|z60T+3R^&}l@qykGAGCqjJ>2V-mkih]!nNc6bu9+DA!C-dn-');
define('SECURE_AUTH_SALT', '~/s&+sS@c#XXdKaCJ!@]GqNpJTAnb:GaS8Zze/#YK063Np1vKhu-$~FKFx}~,|7V');
define('LOGGED_IN_SALT',   '?VEIXSG`gMNMGmYnA3GKp_Su@/$2k78xo#,z;k).+V){Rm{W6LjbIP]creP?3xR_');
define('NONCE_SALT',       '6OID{]x@}w7bFgIuO@w@};)z=3q;cq<{#NR>-si#sHhhqL}Tcx7.9i<D+#.-Y-9v');

define( 'DISALLOW_FILE_EDIT', true );

# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'cat810' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c04a02e1f38c84f7f174c5e7c66ad79c73889349' );

define( 'WPE_CLUSTER_ID', '120441' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'cat810.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120441', );

$wpe_special_ips=array ( 0 => '35.240.83.155', );

$wpe_ec_servers=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
