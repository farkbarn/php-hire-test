<?php
	if (file_exists('mail.php')) {require 'mail.php';}
	if (file_exists('functions.php')){require 'functions.php';}

	$validarphp = new validarphp ($_POST['name'], $_POST['email'], $_POST['website'] , $_POST['textarea']);
	//echo var_dump($validarphp->validar());/*test*/

	send_mail( $_POST['name'], $_POST['email'], $_POST['website'] , $_POST['textarea']);

	//echo var_dump($_POST);

	echo 'Gracias '.$_POST['name'].'. La información ha sido enviada correctamente!';
?>