<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to the new age</title>
</head>
<body>
	<?= 'Hello World!' ?>
	<br/>
	<?= 'This is a second message' ?>
	<p>
		<a href="url-example.php">Ir a la segunda página</a>
	</p>
	<p>
		<?php 
		if (file_exists('complemento-pagos.php')) {
			include_once('complemento-pagos.php'); 
		}
		?>
	</p>
	<p>
		<?php 
		if (file_exists('complemento-donatarias.php')) {
			include_once('complemento-donatarias.php'); 
		}
		?>
	</p>
</body>
</html>