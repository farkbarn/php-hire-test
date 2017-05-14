<?php
	if (file_exists('mail.php')) {require 'mail.php';}
	if (file_exists('functions.php')){require 'functions.php';}

/*obj validar*/
	$validarphp = new validarphp ($_POST['name'], $_POST['email'], $_POST['website'] , $_POST['textarea']);
/*send email*/
	if ($validarphp->validar()) {
		$validarphp->SetDB();
		send_mail( $_POST['name'], $_POST['email'], $_POST['website'] , $_POST['textarea']);
		//return 'Gracias '.$_POST['name'].'. La información ha sido enviada correctamente!';
	} else {
		echo "ups! no hemos podido enviar el mensaje";
	}
?>