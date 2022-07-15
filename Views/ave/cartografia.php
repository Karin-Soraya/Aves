<?php

// require_once('../Config/conexion.php');
// require_once('../Modelo/consultas.php');
// require_once('../Controlador/CargarMapa.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rutas Avituristicas | Aves De Villeta</title>
    <link href="<?=base_url?>Assets/css/bootstrapvista.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/pe-icons.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/animatevista.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Assets/images/logos/favicon.ico">
    <link href="<?=base_url?>Assets/css/vista.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url?>Assets/images/logos/favicon.ico"  sizes="20x20">

   
    <script src="../Assets/js/jquery.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            'use strict';
            jQuery('body').backstretch([
                "<?=base_url?>Assets/images/bg/bg2.jpg",
                "<?=base_url?>Assets/images/bg/bg3.jpg",
                "<?=base_url?>Assets/images/bg/bg4.jpg"
            ], {
                duration: 5000,
                fade: 500
            });

            $("#mapwrapper").gMap({
                controls: false,
                scrollwheel: false,
                markers: [{
                    latitude: 40.7566,
                    longitude: -73.9863,
                    icon: {
                        image: "<?=base_url?>Assets/images/marker.png",
                        iconsize: [44, 44],
                        iconanchor: [12, 46],
                        infowindowanchor: [12, 0]
                    }
                }],
                icon: {
                    image: "<?=base_url?>Assets/images/marker.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0]
                },
                latitude: 40.7566,
                longitude: -73.9863,
                zoom: 14
            });
        });
    </script>
</head>
<!--/head-->

<body>
    <!--<div id="preloader"></div>-->
<?php require_once 'Views/layout/header.php'; ?>
    
    <!--/header-->

    <!-- card numero 1 -->

  
    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title"> Rutas Avituristicas</h2>
                                    <hr>
                                    <p>Algunas rutas avituristicas para la visualización de aves.</p>
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
                    <h2 class="main-title">Mapas - Rutas Avituristicas</h2>
                    <hr>
                    
                </div>

            
                <ul class="portfolio-items  col-3 isotope fade-up">
                <li class="ficha-tecnica portfolio-item isotope-item">
                <div class="content-ficha">
                    <div class="img-ft">
                        <a class="zoom-in" href="../Assets/images/'.$info1['Mapa'].'" target="blank"><img src="../Assets/images/'.$info1['Mapa'].'" alt=""><i>Clic para ampliar la fotograía</i></a>


                    </div>
                    <div class="modal fade pp_content_container" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                    <div class="margen_descripcion" id="descripcion">
                            <p><b>Nombre:</b>'.$info1['Nombre'].'</p>
                        </div>

                    <div class="margen_descripcion" id="descripcion">
                            <p><b>link:</b>   <a href="'.$info1['Link'].'">Website</a></p>
                        </div>

                        <div class="margen_descripcion" id="descripcion">
                        <p><b>Aves que se encuentran:</b><br>


                        </p>
                </div>
                   
                    
                        <div class="margen_descripcion" id="descripcion">
                            <p><b>QR:</b><img src="../Assets/images/'.$info1['Qr'].'" alt="" srcset="" style="height: 150px; width:150px;" > </p>
                        </div>
                    </div>

                </div>
            </li>

                     <?php 
                     
                    //  Cargarmapa($info);
                     ?>

                    <!--/.portfolio-item-->

                </ul>
            </div>
        </section>
    </div>

  
    <?php require_once 'Views/layout/footer.php'; ?>

        <!--/#footer-->
  

    <script src="<?=base_url?>Assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>Assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url?>Assets/js/plugins.js"></script>
    <script src="<?=base_url?>Assets/js/init.js"></script>
    <script src="<?=base_url?>Assets/js/bg.js"></script>

</body>

</html>