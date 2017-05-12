<?php
	if (file_exists('mail.php')) {require 'mail.php';}

	send_mail( $_POST['name'], $_POST['email'], $_POST['website'] , $_POST['textarea']);

	echo var_dump($_POST);

	echo 'Gracias '.$_POST['name'].'. La información ha sido enviada correctamente!';
?>