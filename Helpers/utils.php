<?php 

class Utils{

	public static function deleteSession($name){
		
		if(isset($_SESSION[$name])){
			$_SESSION[$name]=null;
			unset($_SESSION[$name]);
		}
		return $name;
	}

	public static function isAdmin(){
		if (!isset($_SESSION['admin'])) {
			// header("Location:".base_url."usuario/loginForm");
			echo '<script>alert("¡DENEGADO! Se requiere iniciar sesion")</script>';
			echo "<script>location.href='".base_url."usuario/loginForm'</script>";
		}else{
			return true;
		}
	}

	public static function showCategorias(){
		require_once 'Models/categoria.php';
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		return $categorias;
	}



	

	public static function isIdentity(){
		if(!isset($_SESSION['identity'])){
			header("Location:".base_url);
		}else{
			return true;
		}
	}

	

	public static function showLocalidades(){

		require_once 'Models/ave.php';
		$localidad = new Aves();
		$localidades = $localidad->getLocalidades();

		return $localidades;
	}
	public static function showDistribuciones(){
		require_once 'Models/ave.php';
		$distribucion = new Aves();
		$distribuciones = $distribucion->getDistribuciones();

		return $distribuciones;
	}
	public static function showGremios(){
		require_once 'Models/ave.php';
		$gremio = new Aves();
		$gremios = $gremio->getGremios();

		return $gremios;
	}
    public static function showLibroRojo(){
		require_once 'Models/ave.php';
		$libro = new Aves();
		$libros = $libro->getLibros();

		return $libros;
	}
    public static function showCoberturas(){
		require_once 'Models/ave.php';
		$cobertura = new Aves();
		$coberturas = $cobertura->getCoberturas();

		return $coberturas;
	}

	public static function showIucns(){
		require_once 'Models/ave.php';
		$iucn = new Aves();
		$iucns = $iucn->getIucns();

		return $iucns;
	}

	public static function showCites(){
		require_once 'Models/ave.php';
		$cite = new Aves();
		$cites = $cite->getCite();

		return $cites;
	}





}