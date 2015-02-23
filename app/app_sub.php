<?php

class APP_SUB {
		
	function __construct(){
		// this is constructor my bro
	}	
	
	function sanitizeInput($input){
		return mysql_real_escape_string($input);
	}
	
	function getAccountID(){
		$q = mysql_query("SELECT * FROM tbl_account") or die(mysql_error());
		$num = mysql_num_rows($q);
		
		// filter date
		$td = getdate();
		$d = $td['mday'].$td['mon'].$td['year'];
		
		if($num <= 0){
			$val = "0".($num + 1);
			$ID = $d."-".$val;
		}else if($num > 1 && $num < 10){
			$val = "0".($num + 1);
			$ID = $d."-".$val;
		}else{
			$val = $num + 1;
			$ID = $d."-".$val;
		}
		
		return $ID;
	}
	
	function regdate(){
		$dt = getdate();
		$tgl = $dt['year']."-".$dt['mon']."-".$dt['mday'];
		
		return $tgl;
	}
	
	function getIdUser(){
		$q = mysql_query("SELECT MAX(id_user) as 'max' FROM tbl_user") or die(mysql_error());
		$num = mysql_fetch_object($q);
		
		$maks = $num->max;
		
		if($maks <= 0){
			$val = 1;
		}else{
			$val = $maks + 1;
		}
		
		return $val;
	}
}