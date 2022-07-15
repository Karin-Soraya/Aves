<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <title>Inicio | Aves De Villeta</title> -->
    <title> Inicio | Aves De Villeta   </title> 

    <link href="<?=base_url?>Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/pe-icons.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>Assets/js/jquery.js"></script>

   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <link rel="shortcut icon" href="<?=base_url?>Assets/images/logos/favicon.ico">
</head>

<body>
<?php require_once 'Views/layout/header.php'; ?>

    <!-- NAVEGACION-->
    <!-- <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
    <div id="search-wrapper">
        <div class="container">
            <input id="search-box" placeholder="Search">
        </div>
    </div>
    </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">NavBar</span>
                    <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand" href=""><h1><img src="Assets/images/logos/logoMenu.png" alt=""></h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li ><a href="">Inicio</a></li>
                    <li><a href="Vista/about-us.php">Nuestro Proyecto</a></li>
                    <li><a href="Vista/categorias.php">Aves - Categorias</a></li>
                    <li><a href="Vista/Cartografia.php">Cartografia</a></li>
                    <li><a href="Vista/login.php">login</a></li>                    
                </ul>
                 <a class="navbar-brand navbar-right">
                    <h1><img src="Assets/images/logos/logo_sennova.png" width="160" height="35" alt=""></h1>
                </a>
            </div>
        </div>
    </header> -->
    
    <!--/header--> 
    
    <!--/header-->
    
    <div id="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators editarindicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner editarcarousel">
                <div class="item active">
                    <img src="<?=base_url?>Assets/images/bg/bg3.jpg" alt="Awesome Image">
                    <div class="txtleft">
                        <p>LA MAGIA ESTA </br> <b>EN OBSERVAR</b></p>
                    </div>
                </div>

                <div class="item">
                    <img src="<?=base_url?>Assets/images/bg/bg1.jpg" alt="Awesome Image">
                    <div class="txtleft">
                        <p>UN CANTO ES UN</br> <b>LATIDO MAS</b></p>
                    </div>
                </div>
                <div class="item ">
                    <img src="<?=base_url?>Assets/images/bg/bg2.jpg" alt="Awesome Image">
                    <div class="txtleft">
                        <p><b>SER AVE</b></br>ES SER LIBRE</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?=base_url?>Assets/images/bg/bg4.jpg" alt="Awesome Image">
                    <div class="txtleft">
                        <p><b>LA SINFONÍA</b></br>DE LA NATURALEZA</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?=base_url?>Assets/images/bg/bg5.jpg" alt="Awesome Image">
                    <div class="txtleft">
                        <p><b>VOLAR</br> </b>AMANDO EL AIRE</p>
                    </div>
                </div>
                <div id="text-home">
                    <p>
                        El avistamiento de aves es una actividad amigable con el </br> medio ambiente, que consiste, en observar las aves en sus hábitats</br> naturales con fines recreativos...<i> Juan Obando</i></br>

                    </p>
                </div>
            </div>

            <!-- Controls
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa"><img src="assets/img/izq.png" alt=""></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa"><img src="assets/img/der.png" alt=""></span>
      </a> -->
        </div>
    </div>
     <?php //print_r($data); ?> 

    <div id="content-wrapper">
        <section id="services" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">BIENVENIDOS</h2>
                            <!-- <audio autoplay src="images/aves.mp3"></audio>-->
                            <hr>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-block">
                            <div class="media-body fade-up">
                                <img src="Assets/images/bg/bienvenidos.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-block">

                            <div class="media-body fade-up">
                                <h3 class="media-heading">VILLETA CUNDINAMARCA</h3>

                                <p>Entendiendo la observación de aves como estrategia de conservación de la riqueza natural y paisajista del territorio y a su vez como alternativa para mejorar la calidad de vida de las poblaciones locales, se establece el aviturismo como una herramienta que vincula a la comunidad y la academia en procesos de investigación que aportan al desarrollo de nuevas iniciativas en los diferentes sectores económicos y ambientales, especialmente al sector turismo.</br>En este caso para la consolidación de un producto turístico especializado en el municipio de Villeta donde se resalte el valor e importancia de la avifauna por medio de la actividad turistica para locales y extranjeros, por medio de una caracterización previa de especies, identificación de zonas potenciales e implementación de protocolos y planes de contingencia para la implementación y monitoreo de la actividad.</p>
                                <p><i>Marco Danilo Gongora</i></p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--/.row-->
            </div>
            <div class="gap"></div>
           
        </section>

       

        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">EQUIPO DEL PROYECTO</h2>
                    <hr>
                    <!-- <p>Este proyecto esta siendo ejecutado por aprendices e instructores SENA de difetrentes PROGRAMAS DE FORMACIÓN del CENTRO DE DESARROLLO AGROINDUSTRIAL Y EMPRESARIAL</p>-->
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-personal">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">

                            <!-- Instructores 2021 -->

                                 <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/EVA DEL PILAR DIAZ.jpg" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-1" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/EVA DEL PILAR DIAZ.jpg" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>EVA DEL PILAR DIAZ IBAÑEZ</h3>
                                                <h4>INSTRUCTORA</h4>
                                                <h4>INVESTIGADORA DE LA RED AMBIENTAL</h4>
                                                <p>Instructora investigadora encargada de gestionar los procesos contractuales y actividades del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>EVA DEL PILAR DIAZ IBAÑEZ<small class="role muted"></br>INSTRUCTORA</small></h5>
                                        <p>INVESTIGADORA DE LA RED AMBIENTAL</p>

                                    </div>
                                </div>
                            </div>




                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/gustavo.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-2" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/gustavo.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>GUSTAVO ADOLFO DONCEL</h3>
                                                <h4>INSTRUCTOR SENA</h4>
                                                <h4>PRODUCTOR AUDIOVISUAL</h4>
                                                <p> Como instructor de producción de medios audiovisuales, su función es dirigir la producción audiovisual del proyecto en sus diferentes etapas y realizar junto con el equipo de trabajo la captura de imágenes de la avifauna y video del proyecto.<p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>GUSTAVO A. DONCEL<small class="role muted"></br>INSTRUCTOR SENA</small></h5>
                                        <p>PRODUCTOR <br>AUDIOVISUAL</p>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/ANDRES CUBILLOS.JPG" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-3" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/ANDRES CUBILLOS.JPG" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>ANDRES GUILLERMO CUBILLOS OCAMPO</h3>
                                                <h4>INSTRUCTOR SENA</h4>
                                                <h4>INVESTIGADOR DE LA RED ADMINISTRATIVA</h4>

                                                <p>Instructor de gestión administrativa encargado de planear y coordinar las salidas al campo para su respectiva ejecución.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>ANDRES GUILLERMO CUBILLOS OCAMPO<small class="role muted"></br>INSTRUCTOR SENA</small></h5>
                                        <p>INVESTIGADOR DE LA RED ADMINISTRATIVA</p>

                                    </div>

                                </div>
                            </div>


                            
                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/DANIEL ROBLEDO.jpg" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-4" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/DANIEL ROBLEDO.jpg" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>DANIEL ARMANDO ROBLEDO BUITRAGO</h3>
                                                <h4>INGENIERO AMBIENTAL</h4>
                                                <h4>MAGISTER EN DESARROLLO SOSTENIBLE Y MEDIO AMBIENTE.</h4>
                                                <p>Encargado de los sistemas de información geográfica y cartografía del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>DANIEL ARMANDO ROBLEDO BUITRAGO<small class="role muted"></br>INGENIERO AMBIENTAL</small></h5>
                                        <p>EXPERTO EN SISTEMAS DE INFORMACIÓN GEOGRÁFICA.</p>

                                    </div>
                                </div>
                            </div>

                        
                        </div>  

                        <div class="item">

                        <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/AMANDA  TIPAZ.jpg" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-5" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/AMANDA  TIPAZ.jpg" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>EDITH AMANDA TIPAZ TIPAZ</h3>
                                                <h4>INSTRUCTORA SENNOVA.</h4>
                                                <h4>INSTRUCTORA SENNOVA DE LA RED DE QUÍMICA APLICADA.</h4>
                                                <p>Instructora encargada de direccionar y revisar el cumplimiento del objetivo, resultados y productos del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                   <div class="team-content fade-up">
                                        <h5>EDITH AMANDA TIPAZ TIPAZ<small class="role muted"></br>INSTRUCTORA SENNOVA.</small></h5>
                                        <p>RED DE QUÍMICA APLICADA.</p>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/gina.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-6" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/gina.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>GINA LIZETH TRIANA</h3>
                                                <h4>INSTRUCTORA SENA</h4>
                                                <h4>GUÍA PROFESIONAL - LIDER DEL PROYECTO</h4>
                                                <p>Como líder del proyecto, se encarga de planificar,
                                                    dinamizar y ejecutar los objetivos trazados en la investigación, es responsable de gestionar los recursos humanos, económicos y materiales necesarios para para obtener los resultados esperados, con la calidad necesaria en los plazos previstos.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>GINA LIZETH TRIANA<small class="role muted"></br>INSTRUCTORA SENA</small></h5>
                                        <p>GUÍA PROFESIONAL - LIDER DEL PROYECTO</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/felipe.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-7" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/felipe.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>LUIS FELIPE RESTREPO</h3>
                                                <h4>INSTRUCTOR SENA</h4>
                                                <h4>ANALISTA Y DESARROLLADOR WEB</h4>
                                                <p>Como instructor en Análisis y Desarrollo de Sistemas de Información, 
                                                    su función es la de diseñar y desarrollar esta plataforma web, en donde las 
                                                    personas interesadas podrán encontrar toda la caracterización de la avifauna
                                                     del municipio de Villeta en las diferentes salidas de campo.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>LUIS FELIPE RESTREPO<small class="role muted"></br>INSTRUCTOR SENA</small></h5>
                                        <p>ANALISTA Y DESARROLLADOR WEB</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/juan.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2021-8" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2021-8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/juan.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>JUAN CARLOS OBANDO</h3>
                                                <h4>ASESOR EXTERNO</h4>
                                                <h4>BIÓLOGO ORNITÓLOGO</h4>
                                                <p>Biólogo ornitólogo, especialista en evaluación del impacto ambiental de proyectos y
                                                    guía profesional de turismo. En el proyecto se encarga de la caracterización de la avifauna del
                                                    municipio de Villeta-Cundinamarca.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="team-content fade-up">
                                        <h5>Juan Carlos Obando<small class="role muted"></br>ASESOR EXTERNO</small></h5>
                                        <p>BIÓLOGO ORNITÓLOGO</p>


                                    </div>
                                </div>
                            </div>




                        </div>

                            
                        

                        <div class="item">


                        <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/HEIDY MARTINEZ.jpg" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal1" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/HEIDY MARTINEZ.jpg" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>HEIDY VALENTINA MARTINEZ RODRIGUEZ</h3>
                                                <h4>APRENDIZ EN ETAPA PRODUCTIVA </h4>
                                                <h4>TECNÓLOGO EN MEDIOS AUDIOVISUALES</h4>
                                                <p>Aprendiz en etapa productiva encargada de apoyar en la producción de captura de imagen, video y edición del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>HEIDY VALENTINA MARTINEZ RODRIGUEZ<small class="role muted"></br>APRENDIZ EN ETAPA PRODUCTIVA</small></h5>
                                        <p>TECNÓLOGO EN MEDIOS AUDIOVISUALES</p>

                                    </div>
                                </div>
                            </div>



                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/MARLLY BERNAL.jpeg" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal2" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/MARLLY BERNAL.jpeg" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>MARLLY YULIETH BERNAL ARANGO</h3>
                                                <h4>APRENDIZ EN ETAPA PRODUCTIVA </h4>
                                                <h4>TECNÓLOGO EN MEDIOS AUDIOVISUALES</h4>
                                                <p>Aprendiz en etapa productiva encargada de apoyar 
                                                    en la producción de captura de imagen, video y edición del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>MARLLY YULIETH BERNAL ARANGO<small class="role muted"></br>APRENDIZ EN ETAPA PRODUCTIVA</small></h5>
                                        <p>TECNÓLOGO EN MEDIOS AUDIOVISUALES</p>

                                    </div>
                                </div>
                            </div>





                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/ESTEFANI MARTINEZ.JPG" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal3" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/ESTEFANI MARTINEZ.JPG" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>ESTEFANI TATIANA MARTINEZ SANCHEZ</h3>
                                                <h4>BIÓLOGA Y MAGÍSTER EN CIENCIAS BIOLÓGICAS DE LA UNIVERSIDAD DE CALDAS</h4>
                                                <p>Participó en la caracterización de aves silvestres y la elaboración de rutas potenciales en las veredas del municipio de Villeta-Cundinamarca.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>ESTEFANI TATIANA MARTINEZ SANCHEZ<small class="role muted"></br></small></h5>
                                        <p>BIÓLOGA Y MAGÍSTER EN CIENCIAS BIOLÓGICAS DE LA UNIVERSIDAD DE CALDAS</p>

                                    </div>

                                </div>
                            </div>



                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/KAREN MENDEZ.jpg" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal4" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/equipo-2021/FOTOGRAFIAS-EQUIIPO DE TRABAJO/KAREN MENDEZ.jpg" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>KAREN JIMENA MENDEZ BRAVO</h3>
                                                <h4>APRENDIZ EN ETAPA PRODUCTIVA</h4>
                                                <h4>TECNÓLOGO EN CONTROL AMBIENTAL</h4>
                                                <p>Aprendiz en etapa productiva encargada de apoyar en la recopilación de datos de las salidas de campo.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>KAREN JIMENA MENDEZ BRAVO<small class="role muted"></br>APRENDIZ EN ETAPA PRODUCTIVA</small></h5>
                                        <p>TECNÓLOGO EN CONTROL AMBIENTAL</p>

                                    </div>
                                </div>
                            </div>



                        </div>



                        <div class="item">

                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/pedro.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal5" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/pedro.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>PEDRO ANDRES GUILLEN</h3>
                                                <h4>APRENDIZ SENA</h4>
                                                <h4>PRODUCTOR AUDIOVISUAL</h4>
                                                <p>Como aprendiz de producción de medios audiovisuales esta encargado de la preproducción, producción, captura y postproducción de foto fija y en
                                                    movimiento, para corto documental y divulgación de la avifauna y flora para las
                                                    actividades de avistamiento de aves en el municipio de Villeta-Cundinamarca.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>PEDRO A. GUILLEN<small class="role muted"></br>APRENDIZ SENA</small></h5>
                                        <p>PRODUCTOR AUDIOVISUAL</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/leidy.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal6" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/leidy.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>LEIDY MARCELA DELGADO</h3>
                                                <h4>APRENDIZ SENA</h4>
                                                <h4>CONTROL AMBIENTAL</h4>
                                                <p>Su función principal es la de apoyar la educación ambiental, además de ello dirigir actividades de concientización y apoyo en reforestación.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>LEIDY M. DELGADO<small class="role muted"></br>APRENDIZ SENA</small></h5>
                                        <p>CONTROL AMBIENTAL</p>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/marco.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal7" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/marco.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>MARCO DANILO GÓNGORA</h3>
                                                <h4>APRENDIZ SENA</h4>
                                                <h4>GUIA TURÍSTICO</h4>
                                                <p>Su principal función es caracterizar zonas con posible potencial para el aviturismo
                                                    en Villeta, experto en avistamiento de aves.</br>
                                                    Además de identificar zonas a trabajar durante el proyecto, diseñar ficha de diagnóstico y
                                                    caracterización.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>MARCO D. GÓNGORA<small class="role muted"></br>APRENDIZ SENA</small></h5>
                                        <p>GUIA TURÍSTICO</p>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/genny.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal8" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/genny.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>GENNY MARITZA MANTILLA</h3>
                                                <h4>APRENDIZ SENA</h4>
                                                <h4>PRODUCTORA AUDIOVISUAL</h4>
                                                <p>Como aprendiz de producción de medios audiovisuales esta encargada de la preproducción, producción, captura y postproducción de foto fija y en
                                                    movimiento, para corto documental y divulgación de la avifauna y flora para las
                                                    actividades de avistamiento de aves en el municipio de Villeta-Cundinamarca.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>GENNY M. MANTILLA<small class="role muted"></br>APRENDIZ SENA</small></h5>
                                        <p>PRODUCTORA AUDIOVISUAL</p>

                                    </div>
                                </div>
                            </div>

                        </div>




                        <div class="item">


                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/diegov.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal9" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/diegov.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>DIEGO ARMANDO VELANDIA CASTRO</h3>
                                                <h4>APRENDIZ SENA</h4>
                                                <h4>RECURSOS NATURALES</h4>
                                                <p>Como aprendiz del tecnólogo en gestión de recursos naturales se encarga de la
                                                     identificación de los servicios eco-sistémicos que proveen las veredas del municipio de
                                                      Villeta y sus alrededores a partir de la
                                                    percepción de los actores campesinos y estudiantes en la relación con la
                                                    transformación del paisaje en los municipios.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>Diego A. Velandia<small class="role muted"></br>APRENDIZ SENA</small></h5>
                                        <p>RECURSOS NATURALES</p>

                                    </div>
                                </div>
                            </div>




                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/isabel.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal10" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/isabel.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>Lidia Isabel Toro Barreto</h3>
                                                <h4>INSTRUCTORA SENA</h4>
                                                <h4>GUÍA TURÍSTICA</h4>
                                                <p>Como administradora turística es Colaboradora del proyecto y relacionista Pública.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>Isabel Toro B.<small class="role muted"></br>INSTRUCTORA SENA</small></h5>
                                        <p>GUÍA TURÍSTICA</p>

                                    </div>
                                </div>
                            </div>




                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/samuel.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal11" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/samuel.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>SAMUEL GUSTAVO RUEDA</h3>
                                                <h4>INSTRUCTOR SENA</h4>
                                                <h4>ESPECIALISTA EN MERCADEO</h4>
                                                <p>Investigador. ESP Gestion de proyectos, ESP comercializacion. Formulador y asesor interno del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>Samuel Rueda M.<small class="role muted"></br>INSTRUCTOR SENA</small></h5>
                                        <p>ESPECIALISTA EN MERCADEO</p>

                                    </div>
                                </div>
                            </div>





                            <div class="col-md-3 col-xs-6">
                                <div class="center team-member">
                                    <div class="team-image">
                                        <img class="img-responsive img-thumbnail bounce-in" src="Assets/images/team/leidyc.png" alt="">
                                        <div class="overlay">
                                            <a class="preview btn btn-outlined btn-primary" href="#myModal12" rel="prettyPhoto">Ver</a>
                                        </div>
                                    </div>
                                    <div class="modal fade pp_content_container" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div id="left">
                                                <img src="Assets/images/team/leidyc.png" alt="">
                                            </div>
                                            <div id="right">
                                                <h3>LEIDY CALIFA</h3>
                                                <h4>INSTRUCTORA SENA</h4>
                                                <h4>GESTIÓN DE RECURSOS NATURALES</h4>
                                                <p>Apoyo en el levantamiento de información ambiental del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>LEIDY CALIFA<small class="role muted"></br>INSTRUCTORA SENA</small></h5>
                                        <p>RECURSOS NATURALES</p>

                                    </div>
                                </div>
                            </div>



                        </div>

                      






                    </div>

                


                </div>

            </div>

            <div class="gap"></div>
            <!--/#meet-the-team-->
            <div class="gap"></div>
            <div class="gap"></div>
    </div>
    </section>

    <section id="stats" class="divider-section">
        <div class="container">
            <div class="row textff">
                <h2 class="titulof">DATOS DE INTERÉS</h2>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                        <h1><span class="counter">3672</span></h1>
                        <h3>HORAS DE AVISTAMIENTO</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                        <h1><span class="counter">157</span></h1>
                        <h3>ESPECIES REGISTRADAS</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                        <h1><span class="counter">17</span></h1>
                        <h3>RUTAS EXPLORADAS</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                        <h1><span class="counter">8</span></h1>
                        <h3>PROGRAMAS DE FORMACIÓN VINCULADOS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>



    </section>
    <?php require_once 'Views/layout/footer.php'; ?>
   
    </div>
    </section>


    </div>

    <script src="<?=base_url?>Assets/js/plugins.js"></script>
    <script src="<?=base_url?>Assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>Assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="<?=base_url?>Assets/js/init.js"></script>
    <script src="<?=base_url?>Assets/js/bg.js"></script>

</body>

</html>