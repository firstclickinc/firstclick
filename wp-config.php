<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_firstclick' );
define( 'DB_USER', 'josh' );
define( 'DB_PASSWORD', 'f73j@j8Fn)' );
define( 'DB_HOST', 'localhost' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ')d[^Le7ZbvcFjVmyg46/zpoq`8YEV5cj8vdM?zdphCS|7x()8%m2G0p2UHK+wGH%');
define('SECURE_AUTH_KEY',  '/@ |;:mO+`>LhB(<p[!Bt57|m0Mk!%i;sD==O4!5G_mI$WKJ%U2Hk PW{$z0o;L]');
define('LOGGED_IN_KEY',    '9.zK=e5@IU[R{|}jdTxP|d$81g@B&$#hCSAnXoC:  uZr$eTghs^W}w]BrR!w>D~');
define('NONCE_KEY',        '{G|JVwZeqJ{LZlden&Z>*QIWR:{V$JQd I} <}vK0O/C&l|3ww/E6d%uy~?+}b|T');
define('AUTH_SALT',        'I[t^H0P+/P.=|/LnoL!ck}ToL6b- v+7<]2.u!?0,A:BXZbY=$;~!!OZG+O(nO,Z');
define('SECURE_AUTH_SALT', '3N  E%Rkoq-].xJTovOH?~*%}R<L&TE<$m7YsZ|%R}4}#`NR]]|SlvR@DP$id*=n');
define('LOGGED_IN_SALT',   'zj@Q)UIn:&|sw3@*z*`oo32(pB-Y|_mN^=heQtb|Guki-MLH~8[4]|CESJJ)?-`$');
define('NONCE_SALT',       '.|s.aCb?8W%6{Rnx2Dg@)+NQGAx`j?f+ZE^Nwq4+Qu|Pc[{5HYqnht-;DK?<]%=(');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'firstclick' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '1af43f71c4301e5cdb05acacc148585d0ed88764' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '100531' );

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

$wpe_all_domains=array ( 0 => 'firstclick.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100531', );

$wpe_special_ips=array ( 0 => '104.196.200.220', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://localhost:8888/firstclick' );

define( 'WP_HOME', 'http://localhost:8888/firstclick' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
