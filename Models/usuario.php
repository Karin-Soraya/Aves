<?php 

class Usuario{

	private $id;
	private $nombre; 
	private $apellido; 
	private $email; 
	private $password;
	private $telefono;
	private $cargo;
	private $ficha;
	private $rol;
	private $db;

	public function __construct(){
		$this->db=Database::connect();
	}

	function getId(){
		return $this->id;
	}

	function getNombre(){
		return $this->nombre;
	}

	function getApellido(){
		return $this->apellido;
	}

	function getEmail(){
		return $this->email;
	}


	function getPassword(){
		// return $this->pass;
		return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	}

    function getTelefono(){
		return $this->telefono;
	}

    function getCargo(){
		return $this->cargo;
	}

    function getFicha(){
		return $this->ficha;
	}

    
	function getRol(){
		return $this->rol;
	}

	

	//SET - ASIGNAR VALOR AL ATRIBUTO

	function setId($id){
		$this->id=$id;
	}

	function setNombre($nombre){
		$this->nombre=$this->db->real_escape_string($nombre);
	}

	function setApellido($apellido){
		$this->apellido=$this->db->real_escape_string($apellido);
	}

	function setEmail($email){
		$this->email=$this->db->real_escape_string($email);
	}

	function setPassword($password){
		//$this->pass=$this->db->real_escape_string($pass);

		$this->password = $password;
	}

    function setTelefono($telefono){
		$this->telefono=$this->db->real_escape_string($telefono);
	}

    function setCargo($cargo){
		$this->cargo=$this->db->real_escape_string($cargo);
	}

    function setFicha($ficha){
		$this->ficha=$this->db->real_escape_string($ficha);
	}

	function setRol($rol){
		$this->rol=$this->db->real_escape_string($rol);
	}

	

	public function save(){
		$sql="INSERT INTO usuario VALUES (NULL,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}', '{$this->getTelefono()}','{$this->getCargo()}', '{$this->getFicha()}','user');";
		$save=$this->db->query($sql);

		$result=false;
		if ($save) {
			$result=true;
		}
		return $result;
	}

	


	public function login(){
		$result=false;
		$email= $this->email;
		$password= $this->password;

		//Comprobar si el usuario existe

		$sql="SELECT * FROM usuario WHERE email='$email'";
		$login = $this->db->query($sql);

		// var_dump($login);
		// 	die();


		if ($login && $login->num_rows==1) {
			$usuario = $login->fetch_object();

			//verificar la contraseña

			$verify = password_verify($password, $usuario->password);

			if ($verify) {
				$result = $usuario;
			}
		}

		return $result;
	}

}



?>