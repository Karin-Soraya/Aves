<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nuestro Proyecto | Aves De Villeta</title>
    <link href="<?=base_url?>Assets/css/bootstrapvista.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/pe-icons.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/vista.css" rel="stylesheet">
         
    <script src="<?=base_url?>Assets/js/jquery.js"></script>
    <link rel="shortcut icon" href="<?=base_url?>Assets/images/logos/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/images/ico/apple-touch-icon-72x72.png">
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
                                    <h2 class="main-title">Nuestro Proyecto</h2>
                                    <hr>
                                    <p>Conoce un poco acerca de este maravilloso proyecto.</p>
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
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                        <p><h3 class="main-title text-justify">JUSTIFICACIÓN DEL PROYECTO</h3></p>
<p class="proyectotext text-justify">
    Hoy por hoy el turismo de naturaleza es uno los escenarios
con mayor proyección turística del país, gracias a las más de
1900 especies que existen atraves del territorio colombiano,
sus exuberantes paisajes, valles, montañas, páramos,
altiplanicies, entre mucho otros hacen que la riqueza hídrica,
natural y multicultural sean privilegiadas para la realización
del avistamiento de aves ya sea por hobby, gusto por la
naturaleza, paisajes o el estudio de las distintas especies.
Reconocer senderos donde el aviturismo sea el protagonista
puede generar un mayor desarrollo turístico de la zona siempre de la mano con la sostenibilidad ambiental.

</br></br>
En el municipio de Villeta no existe una caracterización de la
avifauna y flora, hábitat y entorno de las aves, así mismo no
hay identidad de los habitantes con la conservación y
preservación del medio que estas necesitan para sobrevivir.
Es por esto que la caracterización de avistamiento de aves y
la identificación pertinente de cada ítem mencionado podrá
contribuir al crecimiento turístico, cultural y medioambiental
de la localidad.

</p>

<p><h3 class="main-title text-justify">OBJETIVO GENERAL DEL PROYECTO</h3></p>
<p class="proyectotext text-justify">
    Realizar la caracterización de la avifauna y su flora para
actividades de aviturismo del municipio de Villeta para
establecer la viabilidad de avistamiento de aves como nuevo
producto turístico del municipio.
</p>
<video width="1180" class="videop" src="../Assets/images/team/PUBLICITARIO.mp4"  controls></video>


<p><h3 class="main-title text-justify">PARTICIPACIONES CON EL PROYECTO</h3></p>
<p class="proyectotext text-justify">
    <li>1.     Participación en REDCOSLSI Bogotá con semilleros de investigación. (Bogotá)</li>
    <li>2.     Participación en I encuentro de Investigaciones de Cocina y Turismo, organizado por la Red de Hotelería y Turismo. (Cali)</li>
    <li>3.     Participación con avistamiento de aves en la semana de la ciencia y de la tecnología en (Cájica -Cundinamarca)</li>
    <li>4.     Participación en el evento de "I Congreso Internacional De Turismo DE AVENTURA SENA" (San Gil – Santander)</li>
    <li>5.     Participación en el primer Congreso de Ciencia, Innovación y Productividad: retos para la sostenibilidad. Cipres 2018 (FUSAGASUGA)</li>
    <li>6.     Participación en el V Intercambio Internacional de Agroecología (PITALITO- HUILA)</li>
    <li>7.     Participación en el IV encuentro de innovación, investigación y emprendimiento Waliperri 2021 en el departamento de Guania</li>
</p>



                    </div>
                    <div class="col-md-4 fade-up">

                    </div>
                </div>
               <div class="gap"></div>
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">GALERIA</h2>
                    <hr>
                    <p>ESTAS SON ALGUNAS DE LAS FOTOGRAFÍAS DEL PROCESO</p>
                </div> 
                <div class="gap"></div>

                <div id="meet-the-team" class="row fade-down">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicato-->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
      <li data-target="#myCarousel" data-slide-to="10"></li>
      <li data-target="#myCarousel" data-slide-to="11"></li>
      <li data-target="#myCarousel" data-slide-to="12"></li>
      <li data-target="#myCarousel" data-slide-to="13"></li>
      <li data-target="#myCarousel" data-slide-to="14"></li>
      <li data-target="#myCarousel" data-slide-to="15"></li>
      <li data-target="#myCarousel" data-slide-to="16"></li>
      <li data-target="#myCarousel" data-slide-to="17"></li>
      <li data-target="#myCarousel" data-slide-to="18"></li>
      <li data-target="#myCarousel" data-slide-to="19"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
           <img src="<?=base_url?>Assets/images/team/grupo9.png" alt="">  
        
            
      </div>

      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_1.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_2.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_3.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_4.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_5.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_6.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_7.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_8.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_9.jpg" alt="" >
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_10.jpg" alt="" >
      </div>
      <div class="item"> 
              <video poster="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/IMG_vid.jpg"  controls> 
                  <source src="<?=base_url?>Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/VID_20211004_073552.mp4" type="video/mp4" > 
            </video>
      </div>
      <div class="item"> 
            <img src="<?=base_url?>Assets/images/team/grupo2.png" alt="">
      </div>
    
      <div class="item">
            <img src="<?=base_url?>Assets/images/team/grupo1.png" alt="">        
      </div>
      <div class="item">
              <img src="<?=base_url?>Assets/images/team/grupo4.png" alt="">      
      </div>
      <div class="item">
              <img src="<?=base_url?>Assets/images/team/grupo5.png" alt="">      
      </div>
      <div class="item">
              <img src="<?=base_url?>Assets/images/team/grupo6.png" alt="">      
      </div>
      <div class="item">
              <img src="<?=base_url?>Assets/images/team/grupo7.png" alt="">      
      </div>
      <div class="item">
              <img src="<?=base_url?>Assets/images/team/grupo8.png" alt="">      
      </div>
      <div class="item">
             
              <img src="<?=base_url?>Assets/images/team/grupo3.png" alt="">
      </div>

    </div>

  </div>
                </div><!--/#meet-the-team-->
                <div class="gap"></div>  
                <div class="gap"></div>   
            </div>      
        </section>
    </div>

   
    <?php require_once 'Views/layout/footer.php'; ?>
       

        <!--/#footer-->
   

    <script src="<?=base_url?>Assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>Assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url?>Assets/js/plugins.js"></script><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="<?=base_url?>Assets/js/init.js"></script>
    <script src="<?=base_url?>Assets/js/bg.js"></script>

</body>
</html>