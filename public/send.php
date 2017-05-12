<?php
	if (file_exists('mail.php')) {require 'mail.php';}
	
	send_mail( $_POST['name'], $_POST['email'], $_POST['website'] , $_POST['textarea']);

	echo 'Gracias '.$_POST['name'].'. La información ha sido enviada correctamente!';
	echo "string".$_POST['name'].$_POST['email'].$_POST['website'].$_POST['textarea'].PHP_EOL;
?>