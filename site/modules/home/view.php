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

	<form class="unit-card" id="unit-form-test">
		<div class="unit-body">
			<div class="unit-wrap">
				<div class="unit-form">
					<div class="unit-form-row">
						<div class="unit-input">
							<label>Name</label>
							<input type="text" name="name" />
						</div>
						<div class="unit-input">
							<label>Avatar</label>
							<input type="file" name="avatar" />
							<label></label>
						</div>
					</div>
					<div class="unit-form-row">
						<div class="unit-input">
							<label>Presentation</label>
							<textarea name="presentation"></textarea>
						</div>
					</div>
					<div class="unit-form-row">
						<div class="unit-input unit-primary">
							<input type="submit" value="Send" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>