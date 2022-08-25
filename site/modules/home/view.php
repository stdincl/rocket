<?php 
	require_once __DIR__.'/../../../vendor/autoload.php';
	use \rocket\Launcher;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo Launcher::sitename(); ?></title>

	<!-- io -->
	<?php Launcher::headers(); ?>
	
	<!-- favicon -->
	<?php Launcher::favicon(); ?>

	<!-- global -->
	<script type="text/javascript" src="/site/js/global-<?php echo Launcher::compilation(); ?>.js"></script>
	<link rel="stylesheet" type="text/css" href="/site/css/global-<?php echo Launcher::compilation(); ?>.css" />

	<!-- custom -->
	<script type="text/javascript" src="/site/modules/home/script-<?php echo Launcher::compilation(); ?>.js"></script>
	<link rel="stylesheet" type="text/css" href="/site/modules/home/style-<?php echo Launcher::compilation(); ?>.css" />
</head>
<body>
</body>
</html>