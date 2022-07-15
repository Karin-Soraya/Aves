<?php 
require_once 'Models/usuario.php';

class usuarioController{
	public function loginForm(){
            require_once 'Views/usuario/login.php';
	}

	

	public function registro(){
            require_once 'Views/usuario/registro.php';
			echo "msg estoy aqui Controlador Usuarios, Acción index";
	}

	public function save(){

		if(isset($_POST)){
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$cargo=$_POST['cargo'];
			$ficha=$_POST['ficha'];
			$password=$_POST['password'];

			$usuario=new Usuario;
			$usuario->setNombre($nombre);
			$usuario->setApellido($apellido);
			$usuario->setEmail($email);
			$usuario->setTelefono($telefono);
			$usuario->setCargo($cargo);
			$usuario->setFicha($ficha);
			$usuario->setPassword($password);

			$save=$usuario->save();
			//var_dump($_POST);

			if ($save) {
				$_SESSION['register'] = "complete";
			}else{

				$_SESSION['register'] = "failed";
			}
		}else{
			$_SESSION['register'] = "failed";
		}

		header("Location:".base_url.'usuario/registro');
		
	}//FIN SAVE


	public function login(){		

		if (isset($_POST)) {
			//identificar al usuario
			//consultar la base de datos

			$usuario= new Usuario();
			$usuario->setEmail($_POST['email']);
			$usuario->setPassword($_POST['password']);

			//USAR METODO LOGIN DE LA CLASE USUARIO

			$identity = $usuario->login();

			// var_dump($identity);
			// die();

			if ($identity && is_object($identity)) {
				$_SESSION['identity']=$identity;
				if ($identity->rol == 'admin') {
					$_SESSION['admin']=true;

				}
			}else{
				$_SESSION['error_login']="Identificación Fallida!!!";
				
			}
		}

		if (isset($_SESSION['admin'])) {
			header("Location:".base_url.'ave/registrarAve');
			

		}else{

			echo '<script>alert("Usuario incorrecto")</script>';
			echo "<script>location.href='".base_url."usuario/loginForm'</script>";

			//header("Location:".base_url.);

		}
		// //header("Location:".base_url.'usuario/loginForm');
		// echo '<script>alert("Usuario incorrecto")</script>';
		// 	echo "<script>location.href='".base_url."usuario/loginForm'</script>";

	}

		// header("Location:".base_url);
	

	public function logout(){
		if (isset($_SESSION['identity'])) {
			unset($_SESSION['identity']);
		}

		if ($_SESSION['admin']) {
			unset($_SESSION['admin']);
		}

		header("location:".base_url."usuario/loginForm");
	}


}


 ?>