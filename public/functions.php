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

	public function SetDB()
	{
		//http://php.net/manual/es/pdo.prepared-statements.php
		$dbhost = "localhost";
		$dbname = "pdo";
		$dbusername = "updo";
		$dbpassword = "ppdo";$conn;


$mbd = new PDO('mysql:host=localhost;dbname=pdo','updo','ppdo')

		//$link->conn = new PDO ("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);

		//$sql=$link->conn->prepare("INSERT INTO testtable(name, email, website, comment))VALUES('dd', 'dd', 'dd', 'dd')");

$sql = $mbd->prepare("INSERT INTO testtable (id,name,email,website,comment) VALUES (:id, :name,:email,:website,:comment)");
$sql->bindParam(':id', NULL);
$sql->bindParam(':name', 'Tnombre');
$sql->bindParam(':email', 'Temail');
$sql->bindParam(':website', 'Twebsite');
$sql->bindParam(':comment', 'Tcomment');

		//$sql->bindParam(1,'nombre');$sql->bindParam(2,'email');$sql->bindParam(3,'url');$sql->bindParam(4,'comment');
		//$sql->execute(array($this->name(),$this->email(),$this->website(),$this->comment()));
		$sql->execute();
		echo 'inserinto';
	}

}

?>