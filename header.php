<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Chase Allbee</title>
<link rel="stylesheet" type="text/css" href="dist/styles.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/logo.png">
</head>

<body style="display:none;">
<header>

	<a href="/chaseallbee.com/" animation="slide-in" animation-delay=".001s">
	<?php
		$color_background = '';
		$url = $_SERVER['REQUEST_URI'];
		if ($url == '/' || strpos($url, "/about") !== false || $url == '/chaseallbee.com/') {
			echo '<img class="circle" src="img/Logo.png" />';
			$color_background = 'black-text';
		}
		else{
			echo '<img class="circle" src="img/kk-2.png" />';
		}
	?></a>
	<a class="bordered" href="/chaseallbee.com/"><p class="<?php echo $color_background;?>" animation="slide-in" animation-delay=".2s">Home</p></a>
	<a class="bordered" href="about"><p class="<?php echo $color_background;?>" animation="slide-in" animation-delay=".3s">About</p></a>
</header>
<div class="fader">
