<?php
require_once dirname( __FILE__ ) .'/inc/admin/cs-framework.php';
if ( !defined( 'THEME_DIR' ) ) {
	define( 'THEME_DIR', get_template_directory() );
}
if ( !defined( 'THEME_URI' ) ) {
	define( 'THEME_URI', get_template_directory_uri() );
}

define('INC', TEMPLATEPATH.'/inc/func');
IncludeAll( INC );
function IncludeAll($dir){
	$dir = realpath($dir);
	if($dir){
		$files = scandir($dir);
		sort($files);
		foreach($files as $file){
			if($file == '.' || $file == '..'){
				continue;
			}elseif(preg_match('/.php$/i', $file)){
				include_once $dir.'/'.$file;
			}
		}
	}
}


