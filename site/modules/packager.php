<?php
	header('Content-Type:text/javascript');
	$moduleName = preg_replace("/[^A-Za-z0-9 ]/", '', $_GET['package']);
	$scriptName = preg_replace("/[^A-Za-z0-9 ]/", '', $_GET['script']);
	if($moduleName==''){
		echo 'window.app = window.app?window.app:{};';
		echo 'window.app.'.$moduleName.' = {init:function(){}};';
		echo '$(function(){ window.app.'.$moduleName.'.init(); })';
	}else{
		$filePath = './'.$moduleName.'/'.$scriptName.'.js';
		echo 'window.app = window.app?window.app:{};';
		echo 'window.app.'.$moduleName.' = '.(file_exists($filePath)?trim(file_get_contents($filePath),';'):'{init:function(){}}').';';
		echo '$(function(){ window.app.'.$moduleName.'.init(); })';
	}
?>