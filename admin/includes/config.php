<?php

@session_start();


//ACTUAL DATABASE SERVER SETIINGS
/*
define("DB_HOST","external-db.s27627.gridserver.com");

define("DB_USER","db27627_dev");

define("DB_PASS","D3vt3st1nG");

define("DB_NAME","db27627_deaconTest");

define("TBL_PREFIX","");
*/
//ACTUAL DATABASE SERVER SETIINGS

define("DB_HOST","localhost");

define("DB_USER","root");

define("DB_PASS","");

define("DB_NAME","journal");

define("TBL_PREFIX","");
/*


//LOCAL DATABASE SERVER SETIINGS
*/
// define("DB_HOST","mysql1000.mochahost.com");

// define("DB_USER","niloy83_test");

// define("DB_PASS","test123");

// define("DB_NAME","niloy83_universal");
//define("SITE_URL","localhost");

define("TBL_PREFIX","");
define("SITE_URL","http://inventorsarena.com/projects/journal");
// END


/*define("DOMAIN_TITLE","Webzeng.com");

define("ADMIN","Webzeng Administration");

define("SITE","Webzeng Admin Panel");

define("SITE_NAME","Webzeng Admin Panel");

define("SITE_PATH",$_SERVER['DOCUMENT_ROOT']);

define("URL","http://www.webzeng.com/");

define("head_str","WEBZENG ADMIN PANEL");
*/

//define("foot_str","WEBZENG Admin Panel");

define("SESSION_HANDLE","database");

define("SESSION_TIMEOUT","15");

define("ROWS_PER_PAGE","8");

function extension($file_ext_name)
{
	$ext = end(explode('.', $file_ext_name));
				 
	// 2. The "strrchr" approach
	$ext = substr(strrchr($file_ext_name, '.'), 1);
				 
	// 3. The "strrpos" approach
	$ext = substr($file_ext_name, strrpos($file_ext_name, '.') + 1);
				 
	// 4. The "preg_replace" approach
	$ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $file_ext_name);
				 
	// 5. The "never use this" approach
	//   From: http://php.about.com/od/finishedphp1/qt/file_ext_PHP.htm
	$exts = split("[/\\.]", $file_ext_name);
	$n = count($exts)-1;
	$ext = $exts[$n];
	return $ext;	
}

?>