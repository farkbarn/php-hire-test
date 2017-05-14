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
	protected $val;
	
	public function __construct($name,$email,$website,$textarea)
	{
		$this->name=$name;
		$this->email=$email;
		$this->website=$website;
		$this->textarea=$textarea;
	}

	public function validar()
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

	public function name(){return $this->name.PHP_EOL;}
	public function email(){return $this->email.PHP_EOL;}
	public function website(){return $this->website.PHP_EOL;}
	public function comment(){return $this->textarea.PHP_EOL;}

	public function ConnectionSet(){

    $conn = NULL;
        try{
            $conn = new PDO("mysql:host=127.0.0.1;dbname=pdo", "updo", "ppdo");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){echo 'ERROR: ' . $e->getMessage();}
            
	$sql = $conn->prepare("INSERT INTO testtable (id,name,email,website,comment) VALUES ('".NULL."', '".$this->name()."', '".$this->email()."', '".$this->website()."', '".$this->comment()."')");
	$sql->execute();
    }
}

//http://php.net/manual/es/pdo.construct.php


?>