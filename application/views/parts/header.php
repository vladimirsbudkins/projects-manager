<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Projects Manager</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php $this->assets->css(); ?>
	</head>
	
	<body class="<?php echo $this->router->class == 'auth'?'login-layout':'navbar-fixed';?>">