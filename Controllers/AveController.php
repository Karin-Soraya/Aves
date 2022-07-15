<?php 
require_once 'Models/ave.php';

    class aveController{
        public function categorias(){
            $categoria = new Aves();
		    $categorias = $categoria->getavesAll();
            // echo "msg estoy aqui Controlador Ave, Acción index";
            require_once 'Views/ave/categorias.php';
            //require_once 'Views/ave/verAves.php';
        }

        public function verave(){
			Utils::isAdmin();
            $categoria = new Aves();
		    $categorias = $categoria->getavesAll();
            // echo "msg estoy aqui Controlador Ave, Acción index";
            require_once 'Views/ave/verAves.php';
        }

		

		public function registrarAve(){
			Utils::isAdmin();
			require_once 'Views/ave/registrarave.php';
	}

        public function cartografia(){
            
            require_once 'Views/ave/cartografia.php';
        }

        public function nosotros(){
            
            require_once 'Views/equipo/about-us.php';
        }



       

// class productoController{

// 	public function index(){
// 		// echo "msg estoy aqui Controlador producto, Acción index";
// 		$producto = new Productopapa();
// 		$productos = $producto-> getRandom(8); 
// 		require_once 'views/producto/destacados.php';
// 	}

// 	public function ver(){
// 		if (isset($_GET['id'])){
// 			$id=$_GET['id'];
// 			/*var_dump($id);
// 			die;*/
// 			$producto=new Productopapa;
// 			$producto->setId($id);
// 			$product= $producto->getOne();
// 		}
// 		require_once 'views/producto/ver.php';
// 	}

	public function gestion(){
		Utils::isAdmin();
		$ave = new Aves();
		$aves = $ave->getAll();
		require_once 'Views/ave/verAves.php';

	}
	public function crear(){
        Utils::isAdmin();
		require_once 'Views/ave/registrarave.php';


	}
	public function save(){
			Utils::isAdmin();
			if (isset($_POST)) {
				// var_dump($_POST);
				// die();
				$nombre_cientifico=isset($_POST['nom_cientifico']) ? $_POST['nom_cientifico']:false;
				$nombre_ingles=isset($_POST['nom_ingles']) ? $_POST['nom_ingles']:false;
				$nombre_comun=isset($_POST['nom_comun']) ? $_POST['nom_comun']:false;
				$orden=isset($_POST['orden']) ? $_POST['orden']:false;
				$familia=isset($_POST['familia']) ? $_POST['familia']:false;
				$localidad=isset($_POST['localidad']) ? $_POST['localidad']:false;
				$gremio=isset($_POST['gremio']) ? $_POST['gremio']:false;
				$distribucion=isset($_POST['distribucion']) ? $_POST['distribucion']:false;
				$altitud=isset($_POST['altitud']) ? $_POST['altitud']:false;
				$iucn=isset($_POST['iucn']) ? $_POST['iucn']:false;
				$libro=isset($_POST['libro']) ? $_POST['libro']:false;
				$descripcion=isset($_POST['descripcion']) ? $_POST['descripcion']:false;
				$foto=isset($_POST['foto']) ? $_POST['foto']:false;
				$cites=isset($_POST['cites']) ? $_POST['cites']:false;
				$cobertura=isset($_POST['opcion']) ? $_POST['opcion']:false;


				$ave = new Aves();
				$ave->setNombre_cientifico($nombre_cientifico);
				$ave->setNombre_ingles($nombre_ingles);
				$ave->setNombre_comun($nombre_comun);
				$ave->setOrden($orden);
				$ave->setFamilia($familia);
				$ave->setLocalidad($localidad);
				$ave->setGremio($gremio);
				$ave->setDistribucion($distribucion);
				$ave->setAltitud($altitud);
				$ave->setIucn($iucn);
				$ave->setLibro($libro);
				$ave->setDescripcion($descripcion);
				$ave->setFoto($foto);
				$ave->setCites($cites);
				$ave->setCobertura($cobertura);
				// $producto->setImagen($imagen);

				//guardar img
				if (isset($_FILES['foto'])) {
					$file= $_FILES['foto'];
					$filename= $file['name'];
					$mimetype=$file['type'];

					// var_dump($file);
					// die();

					if ($mimetype=="image/jpg" || $mimetype=="image/jpeg" || $mimetype=="image/png" || $mimetype=="image/gif") {
						if (!is_dir('uploads/images')) {
							mkdir('uploads/images', 0777, true);
						}
						
						$ave->setFoto($filename);
						move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);	
					}
					//--------------------------------
				}

				if (isset($_GET['id'])) {
					$id_ave=$_GET['id'];
					$ave->setId($id_ave);
					$save=$ave->modificar();
				}else{
					$save=$ave->save();
				}

				
				
				if ($save) {
						$_SESSION['ave'] = "complete";
				}else{
					$_SESSION['ave'] = "failed";
				}
			}else{
				$_SESSION['ave']="failed";
			}
			header("Location:".base_url."ave/registrarave");
		}

		public function delete(){
			Utils::isAdmin();
			if (isset($_GET['id'])) {

					$id_ave=$_GET['id'];

					// var_dump($id_ave);
					// die();
	
					$deleteAve=new Aves();
					// $deleteAve->setId($id_ave);
	
					$delete= $deleteAve->delete($id_ave);
	
					if ($delete) {
						$_SESSION['delete'] = "complete";
					}else{
						$_SESSION['delete'] = "failed";
					}
				}else{
					$_SESSION['delete']="failed";
				}
			header("Location:".base_url."ave/registrarAve");
		}	

		

		

		public function editar(){
			Utils::isAdmin();
			if (isset($_GET['id'])) {
				$id_ave=$_GET['id'];

				// var_dump($id_ave);

				$editar= true;
				$aveEditar= new Aves();
				$aveEditar->setId($id_ave);

				$av= $aveEditar->getOne();

				require_once 'Views/ave/registrarave.php';
			}else{
				header("Location:".base_url."ave/verave");
				// echo '<script>alert("Registro modificado Correctamente")</script>';
				// echo "<script>location.href='".base_url."ave/verave'</script>";
			}
		}

	
	

}
		



 