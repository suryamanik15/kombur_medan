<?php 
/*
 * Index File APP
*/
include "app/db_class.php";
include "app/app_sub.php";
include "app/config.php";
include "app/detect.php";

//////////////////////////////////////////////////////
// Informasi Admin Database
// User : admin_kombur
// Pass	: kombur

//Variabel FILE_PREFIX berada pada file config.php

$db = new APP_DB("localhost","admin_kombur","medan_app","kombur");

// APP Object Sub Class
$sub = new APP_SUB();

if ($page_name == '') {
		include $browser_t.'/index'.FILE_PREFIX;
	}
else{
		if(file_exists($browser_t.'/'.$page_name.FILE_PREFIX)){
			include $browser_t.'/'.$page_name.FILE_PREFIX;
		}else{
			include $browser_t.'/show_404.php';
		}	
	}
	
?>
