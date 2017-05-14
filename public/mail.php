<?php
if (file_exists('../vendor/phpmailer/phpmailer/PHPMailerAutoload.php')) {
	require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
}
/**
 * function mail
 **/
function send_mail($name,$email,$website,$textarea)
{
	//return $name.$email.$website.$textarea.PHP_EOL;
	$smail=new PHPMailer;
	/*parameters*/
	$smail->isSMTP();
	$smail->Host='smtp.mailgun.org';
	$smail->SMTPAuth=true;
	$smail->Username='php_hire_test@mg.farkbarn.com.ve';
	$smail->Password='notiene';
	$smail->SMTPSecure='tls';
	$smail->Port=587;
	/**/
	$smail->setFrom('php_hire_test@mg.farkbarn.com.ve', 'comment');
	$smail->addAddress('frankbarrerag@gmail.com','php-hire-test');
	$smail->addReplyTo($email,null);
	$smail->isHTML(true);
	/**/
	$smail->Subject='comment php-hire-test from:'.$name;
	$smail->Body=$name.PHP_EOL.$website.PHP_EOL.$textarea.PHP_EOL;
	$smail->AltBody='txt plain';
	/**/
	if (!$smail->send()) {
		echo "no Sent".PHP_EOL;
		echo "error: ".$smail->ErrorInfo.PHP_EOL;
	} else {
		echo "yes! Sent :) RockAndRoll".PHP_EOL;
	}
}

?>