<?php
namespace rocket;

use stdincl\bridge\IO;
use stdincl\bridge\Controller;
use stdincl\bridge\Parse;

class RocketTest extends Controller {
	public static function _dataCollect(
		$name,
		$avatar,
		$presentation
	){
		Parse::file($avatar);
		return array('response'=>'Nuevo sitio');
	}
}
?>