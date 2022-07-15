<?php 
class Aves{

	private $id_ave;
	private $nombre_cientifico; 
	private $nombre_ingles; 
	private $nombre_comun; 
	private $familia;
	private $orden;
	private $altitud;
	private $libro;
	private $foto;
	private $descripcion;
	private $localidad;
	private $gremio;
	private $distribucion;
	private $cobertura;
	private $iucn;
	private $cites;
	private $db;

	public function __construct(){
		$this->db=Database::connect();
	}

	function getId_ave(){
		return $this->id_ave;
	}

	function getNombre_cientifico(){
		return $this->nombre_cientifico;
	}
    function getNombre_ingles(){
		return $this->nombre_ingles;
	}
    function getNombre_comun(){
		return $this->nombre_comun;
	}
    function getFamilia(){
		return $this->familia;
	}
    function getOrden(){
		return $this->orden;
    }

	function getAltitud(){
		return $this->altitud;
	}

	function getLibro(){
		return $this->libro;
	}

    function getFoto(){
		return $this->foto;
	}
    
    function getDescripcion(){
		return $this->descripcion;
	}
    
    function getLocalidad(){
		return $this->localidad;
	}


	function getGremio(){
		return $this->gremio;
	}


	function getDistribucion(){
		return $this->distribucion;
	}

	function getCobertura(){
		return $this->cobertura;
	}

	function getIucn(){
		return $this->iucn;
	}

	function getCites(){
		return $this->cites;
	}



	function setId($id_ave){
		$this->id_ave=$id_ave;
	}

	function setNombre_cientifico($nombre_cientifico){
		$this->nombre_cientifico=$this->db->real_escape_string($nombre_cientifico);
	}

	function setNombre_ingles($nombre_ingles){
		$this->nombre_ingles=$this->db->real_escape_string($nombre_ingles);
	}

    function setNombre_comun($nombre_comun){
		$this->nombre_comun=$this->db->real_escape_string($nombre_comun);
	}

    function setFamilia($familia){
		$this->familia=$this->db->real_escape_string($familia);
	}

    function setOrden($orden){
		$this->orden=$this->db->real_escape_string($orden);
	}

    function setAltitud($altitud){
		$this->altitud=$this->db->real_escape_string($altitud);
	}
	function setLibro($libro){
		$this->libro=$this->db->real_escape_string($libro);
	}

    function setFoto($foto){
		$this->foto=$this->db->real_escape_string($foto);
	}

    function setDescripcion($descripcion){
		$this->descripcion=$this->db->real_escape_string($descripcion);
	}

    function setLocalidad($localidad){
		$this->localidad=$this->db->real_escape_string($localidad);
	}

	function setGremio($gremio){
		$this->gremio=$this->db->real_escape_string($gremio);
	}

    function setDistribucion($distribucion){
		$this->distribucion=$this->db->real_escape_string($distribucion);
	}

    function setCobertura($cobertura){
		$this->cobertura=$this->db->real_escape_string($cobertura);
	}

	function setIucn($iucn){
		$this->iucn=$this->db->real_escape_string($iucn);
	}

	function setCites($cites){
		$this->cites=$this->db->real_escape_string($cites);
	}

	// function setGender($gender){
	// 	$this->gender = $gender;
	// }

	public function getavesAll(){
		$aves = $this->db->query("SELECT * FROM aves ORDER BY id_ave DESC;");
		return $aves;
	}

	public function getOne(){
		
		$ave = $this->db->query("SELECT * FROM aves WHERE id_ave={$this->getId_ave()}");
        return $ave->fetch_object();

	}

	public function save(){
		$sql="INSERT INTO aves VALUES (NULL,'{$this->getNombre_cientifico()}','{$this->getNombre_ingles()}',
        '{$this->getNombre_comun()}','{$this->getOrden()}', '{$this->getFamilia()}', '{$this->getLocalidad()}',
		'{$this->getGremio()}', '{$this->getDistribucion()}', '{$this->getAltitud()}', '{$this->getIucn()}',
        '{$this->getLibro()}','{$this->getCites()}', '{$this->getFoto()}','{$this->getCobertura()}',
		'{$this->getDescripcion()}', CURDATE());";

		$save=$this->db->query($sql);

		// var_dump($sql);
		// die();

		$result=false;
		if ($save) {
			$result=true;
		}
		return $result;
	}

	public function delete($id_ave){
		$sql="DELETE FROM aves WHERE id_ave= $id_ave";
		// $sql="DELETE FROM aves WHERE id=$id_ave 
        

		$delete=$this->db->query($sql);
		// var_dump($delete);
		// die();
		$result=false;
		if ($delete) {
			$result=true;
		}
		return $result;

	}

	public function modificar(){
		//sql update 
		$sql="UPDATE aves SET  nombre_cientifico='{$this->getNombre_cientifico()}', nombre_ingles='{$this->getNombre_ingles()}',
        nombre_comun='{$this->getNombre_comun()}',orden='{$this->getOrden()}', familia='{$this->getFamilia()}', 
		localidad='{$this->getLocalidad()}', gremio='{$this->getGremio()}', distribucion='{$this->getDistribucion()}',
        altitud='{$this->getAltitud()}', iucn='{$this->getIucn()}', libro='{$this->getLibro()}', cites='{$this->getCites()}',
		cobertura='{$this->getCobertura()}', descripcion='{$this->getDescripcion()}'";

		if ($this->getFoto() != NULL) {
			$sql .= ", foto ='{$this->getFoto()}'";
		}

		$sql .= "WHERE id_ave ={$this->id_ave};";

		$guardar=$this->db->query($sql);


		//comprobacion
		$result=false;
		if ($guardar) {
			$result=true;
		}

		return $result;
	}

	public function getRandom($limit){
        $ave= $this->db->query("SELECT * FROM aves ORDER BY RAND() LIMIT $limit");
        return $ave; 
    }

	public function getLocalidades(){
		$localidades = $this->db->query("SELECT * FROM localidad ORDER BY id DESC;");
		return $localidades;
	}
	
	public function getDistribuciones(){
		$distribuciones = $this->db->query("SELECT * FROM distribucion ORDER BY id DESC;");
		return $distribuciones;
	}
    public function getGremios(){
		$gremios = $this->db->query("SELECT * FROM gremio ORDER BY id DESC;");
		return $gremios;
	}
    public function getLibros(){
		$libros = $this->db->query("SELECT * FROM libro_rojo ORDER BY id ASC;");
		return $libros;
	}
	public function getCoberturas(){
		$coberturas = $this->db->query("SELECT * FROM cobertura ORDER BY id DESC;");
		return $coberturas;
	}

	public function getIucns(){
		$iucns = $this->db->query("SELECT * FROM iucn ORDER BY id ASC;");
		return $iucns;
	}

	public function getCite(){
		$cites = $this->db->query("SELECT * FROM cites ORDER BY id ASC;");
		return $cites;
	}

}



?>