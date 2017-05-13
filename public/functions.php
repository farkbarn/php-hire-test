<?php
/**
* validarphp
*/
class validarphp
{
	protected $name;
	protected $email;
	protected $website;
	protected $textarea;
	
	public function __construct($name,$email,$website,$textarea)
	{
		$this->name=$name;
		$this->email=$email;
		$this->website=$website;
		$this->textarea=$textarea;
	}

	public function validar(/*$name,$email,$website = NULL,$textarea*/)
	{
		$muestra= "/[A-Z,a-zñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ, ]{3,}$/";//NO IMPORTA SI EL NOMBRE ESTA ESCRITO
		                                                          //CON INICIAL MINUSCULA ADD (/^[A-Z] en caso contrario)
	if (
		(preg_match($muestra,$this->name))&&
		(filter_var($this->email,FILTER_VALIDATE_EMAIL))&&
		(filter_var($this->website,FILTER_VALIDATE_URL))&&
		(preg_match($muestra,$this->textarea))
		)
		{return true;}
		else
		{return false;}

	}

	/*public function __toString()()
	{
		return
			echo $this->$val.PHP_EOL;
	}*/




/*
if (
	
	(preg_match($muestra,$this->name))&&
	(filter_var($this->email,FILTER_VALIDATE_EMAIL))&&
	(filter_var($this->website,FILTER_VALIDATE_URL))&&
	(preg_match($muestra,$this->textarea))&&
	
	)
		{return true;}
	else
		{return false;}
*/

/**/
//if ( (preg_match($muestra,$this->name))&&(filter_var($this->email,FILTER_VALIDATE_EMAIL))&&(filter_var($this->website,FILTER_VALIDATE_URL))&&(preg_match($muestra,$this->textarea))	){echo 1;}else{echo 0;}
/**/
//if ( () && (( (preg_match($muestra,"frank"))))       )     {echo 1;}else{echo 0;}
//if ( (preg_match($muestra,"ana"))&&(filter_var("frank@gmail.com",FILTER_VALIDATE_EMAIL))&&(filter_var("http://google.com",FILTER_VALIDATE_URL))&&(preg_match($muestra,"casa"))){echo 1;}else{echo 0;}
/**/



}



?>