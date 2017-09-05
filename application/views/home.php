<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title> 
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/home.css">
</head>
<body>

<div id="container">
	<h1>esta es la pagina de inicio!</h1>

	<div id="body">
		<p><?= $cuerpo . '' . $info ?></p>
		<button class="btn btn-primary">acptar</button>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	<a href="<?= base_url() ?>link">aqui estoy</a>
</div>

</body>
</html>