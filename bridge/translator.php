<?php
	session_start();
	error_reporting(0);
	header('Content-Type:text/javascript'); 
?>window.lang = <?php 
	$langFile = './lang/'.(isset($_GET['user-lang'])?$_GET['user-lang']:$_SESSION['IO_LANG']).'.json';
	if(!file_exists($langFile)){
		$langFile = './lang/es.json';
	}
	$l = file_get_contents($langFile);
	$l = str_replace("\n", '', $l);
	$l = str_replace("\t", '', $l);
	echo $l;
?>;