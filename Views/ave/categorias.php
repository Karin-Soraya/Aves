<?php 

    // require_once('../Config/conexion.php');
    // require_once('../Modelo/consultas.php');
    // require_once('../Controlador/cargarAve.php');
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Categoria Aves | Aves De Villeta</title>
    <link href="<?=base_url?>Assets/css/bootstrapvista.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/pe-icons.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/animatevista.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/vista.css" rel="stylesheet">
         
    <script src="<?=base_url?>Assets/js/jquery.js"></script>
    <link rel="icon" href="<?=base_url?>Assets/images/logos/favicon.ico" type="img/png" sizes="20x20">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "<?=base_url?>Assets/images/bg/bg2.jpg",
            "<?=base_url?>Assets/images/bg/bg3.jpg",
            "<?=base_url?>Assets/images/bg/bg4.jpg"
        ], {duration: 5000, fade: 500});

        $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{     
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "<?=base_url?>Assets/images/marker.png",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: { 
                image: "<?=base_url?>Assets/images/marker.png", 
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
<!--<div id="preloader"></div>-->

<?php require_once 'Views/layout/header.php'; ?>
<!--/header-->

    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">AVES</h2>
                                    <hr>
                                    <p>En esta sección encontrarás las aves y sus fichas técnicas categorizadas</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="portfolio" class="white">
            <div class="container cont-catego">
                <div class="gap"></div> 
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">CATEGORíAS - FICHAS TÉCNICAS</h2>
                        <hr>
                        <p>En el menú de la izquierda podrás seleccionar la familia de aves que deseas obervar</p>
                    </div> 
                    <ul class="portfolio-filter categoria-menu fade-down center">
                        <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">TODAS LAS FAMILIAS</a></li>
                         <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Trochilidae">Trochilidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Accipitridae">Accipitridae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Thraupidae">Thraupidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Tyrannidae">Tyrannidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Turdidae">Turdidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Falconidae">Falconidae</a></li>
                        
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Cardinalidae">Cardinalidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Cracidae">Cracidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Fringillidae">Fringillidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Galbulidae">Galbulidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Mimidae">Mimidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Parulidae">Parulidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Picidae">Picidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Psittacidae">Psittacidae</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".Thamnophilidae">Thamnophilidae</a></li>
                       
                        

                        
                    </ul><!--/#portfolio-filter-->

                    <ul class="portfolio-items items-catego col-3 isotope fade-up" >
                        
                        <?php 
                            // cargarAves();
                        ?>

                    <?php while ($av = $categorias->fetch_object()): ?>

                        
                        <li class="ficha-tecnica portfolio-item '.$filas['familia'].' isotope-item">
                            <div class="content-ficha">
                                <div class="img-ft">
                                    <a class="zoom-in" href="../uploads/images/<?=$av->foto?>" target="blank"><img src="../uploads/images/<?=$av->foto?>" alt=""><i>Clic para ampliar la fotograía</i></a>
                                    
                                    
                                </div>
                                <div class="modal fade pp_content_container" id="myModal'.$filas['codigo_a'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div id="left">
                                        <img src="images/team/pedro.png" alt="">
                                    </div>
                                    <div id="right">
                                        <h3>PEDRO ANDRES GUILLEN</h3>
                                        <h4>APRENDIZ SENA</h4>
                                        <h4>PRODUCTOR AUDIOVISUAL</h4>
                                        <p>Como aprendiz de producción de medios audiovisuales estoy encargado de preproducción, producción, captura y postproducción de foto fija y en
                                        movimiento, para corto documental y divulgación de la avifauna y flora para las
                                        actividades de avistamiento de aves en el municipio de Villeta</p>

                                        <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                    </div>
                                    
                                  </div>
                                </div>
                                <div class="info-ft">

                                    <div class="par-catego">
                                        <i><h3 class="media-heading"><?=$av->nombre_cientifico?></h3></i>
                                        <h5>Nombre Científico</h5>
                                    </div>
                                    <div class="par-catego">
                                        <h3 class="media-heading"><?=$av->nombre_ingles?></h3>
                                        <h5>Nombre En Ingles</h5>
                                    </div>
                                    <div class="par-catego separador-catego">
                                        <h3 class="media-heading"><?=$av->nombre_comun?></h3>
                                        <h5>Nombre Común</h5>
                                    </div>
                                    <div class="par-catego separador-catego">
                                        <h3 class="media-heading"><?=$av->familia?></h3>
                                        <h5>Familia</h5>
                                    </div>

                                        
                                        <div class="par-catego"><p><b>Orden:</b> <?=$av->orden?></p></div>
                                        <div class="par-catego"><p><b>Localidad:</b> <?=$av->localidad?></p></div>
                                        <div class="par-catego"><p><b>Gremio Trofico:</b> <?=$av->gremio?></p></div>
                                        <!--<div class="par-catego"><p><b>Distribución:</b> '.$filas['distribucion'].'</p></div>-->
                                        <div class="par-catego"><p><b>Altitud:</b> <?=$av->altitud?></p></div>
                                        <div class="par-catego"><p><b>IUCN:</b> <?=$av->iucn?></p></div>
                                       <!-- <div class="par-catego"><p><b>Libro Rojo:</b> '.$filas['libro_rojo'].'</p></div> -->
                                       <!--  <div class="par-catego"><p><b>CITES:</b> '.$filas['cites'].'</p></div>   -->
                                       <!-- <div class="par-catego" id="coberturav"><p><b>Cobertura:</b> '.$filas['coberturav'].'</p></div> -->
                                        <div class="margen_descripcion" id="descripcion"><p><b>Descripcion:</b> <?=$av->descripcion?></p></div>
                                </div>

                            </div>
                        </li>


                        <?php endwhile; ?>





                        <!--/.portfolio-item-->
                        
                    </ul>
                </div>
            </section>
    </div>

    <?php require_once 'Views/layout/footer.php'; ?>


   <!--/#footer-->
    </div>

    <script src="<?=base_url?>Assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>Assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url?>Assets/js/plugins.js"></script>
    <script src="<?=base_url?>Assets/js/init.js"></script>
    <script src="<?=base_url?>Assets/js/bg.js"></script>

</body>
</html>