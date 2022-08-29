<?php
namespace rocket;

use stdincl\bridge\IO;
use stdincl\bridge\Controller;

class Launcher extends Controller {
	public static function sitename(){
		return 'Nuevo sitio';
	}
	public static function headers(){
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" type="text/css" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/@chenfengyuan/datepicker/dist/datepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/units/dist/units.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/animate.css/animate.min.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/trumbowyg/dist/ui/trumbowyg.min.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/simplebar/dist/simplebar.min.css" />
		<link rel="stylesheet" type="text/css" href="/node_modules/protip/protip.min.css" />
		<script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="/node_modules/@chenfengyuan/datepicker/dist/datepicker.min.js"></script>
		<script type="text/javascript" src="/node_modules/gmap3/dist/gmap3.min.js"></script>
		<script type="text/javascript" src="/node_modules/inputmask/dist/jquery.inputmask.min.js"></script>
		<script type="text/javascript" src="/node_modules/jquery-maskmoney/dist/jquery.maskMoney.min.js"></script>
		<script type="text/javascript" src="/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="/node_modules/jquery.rut/jquery.rut.min.js"></script>
		<script type="text/javascript" src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/node_modules/simplebar/dist/simplebar.min.js"></script>
		<script type="text/javascript" src="/node_modules/socket.io-client/dist/socket.io.min.js"></script>
		<script type="text/javascript" src="/node_modules/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
		<script type="text/javascript" src="/node_modules/trumbowyg/dist/trumbowyg.min.js"></script>
		<script type="text/javascript" src="/node_modules/protip/protip.min.js"></script>
		<script type="text/javascript" src="/node_modules/units/dist/units.prototypes.js"></script>
		<script type="text/javascript" src="/node_modules/units/dist/units.js"></script>
		<script type="text/javascript" src="/bridge/repository-<?php echo Launcher::compilation(); ?>.js"></script>
		<script type="text/javascript" src="/bridge/lang.js"></script>
		<?php
	}
	public static function favicon(){
		?>
		<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
		<link rel="manifest" href="/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<?php
	}
	public static function compilation(){
		$settings = IO::settings();
		return $settings['compilation'];
	}
	public static function repository(){
		return array(
			'version'=>'1.0'
		);
	}
	public static function compiledRepository(){
		echo 'window.repository = '.json_encode(Launcher::repository()).';';
	}
	public static function displayAllErrors(){
		error_reporting(E_ALL);
		ini_set('display_errors','1');
	}
}
?>