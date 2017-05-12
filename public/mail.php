<?php
if (file_exists('../vendor/phpmailer/phpmailer/PHPMailerAutoload.php')) {
	require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
}
/**
 * function mail
 **/
function send_mail($name,$email,$website,$textarea)
{
	return $name.$email.$website.$textarea.PHP_EOL;
	$smail=new PHPMailer;
	/*parameters*/
	$smail->isSMTP();
	$smail->Host='smtp.gmail.com';
	$smail->SMTPAuth=true;
	$smail->Username='user@server.dom';
	$smail->Password='nopi-nopi';
	$smail->SMTPSecure='tls';
	$smail->Port=587;
	/**/
	$smail->setFrom('from@server.dom', 'email');
	$smail->addAddress('to@server.dom','test');
	$smail->addReplyTo('from@server.dom',null);
	$smail->isHTML(true);
	/**/
	$smail->Subject='txt';
	$smail->Body='body';
	$smail->AltBody='txt plain';
	/**/
	if (!$smail->send()) {
		echo "no send".PHP_EOL;
		echo "error: ".$smail->ErrorInfo.PHP_EOL;
	} else {
		echo "yes! send :) RockAndRoll".PHP_EOL;
	}


}

?>