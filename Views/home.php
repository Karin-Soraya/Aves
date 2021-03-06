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
                        <p><b>LA SINFON??A</b></br>DE LA NATURALEZA</p>
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
                        El avistamiento de aves es una actividad amigable con el </br> medio ambiente, que consiste, en observar las aves en sus h??bitats</br> naturales con fines recreativos...<i> Juan Obando</i></br>

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

                                <p>Entendiendo la observaci??n de aves como estrategia de conservaci??n de la riqueza natural y paisajista del territorio y a su vez como alternativa para mejorar la calidad de vida de las poblaciones locales, se establece el aviturismo como una herramienta que vincula a la comunidad y la academia en procesos de investigaci??n que aportan al desarrollo de nuevas iniciativas en los diferentes sectores econ??micos y ambientales, especialmente al sector turismo.</br>En este caso para la consolidaci??n de un producto tur??stico especializado en el municipio de Villeta donde se resalte el valor e importancia de la avifauna por medio de la actividad turistica para locales y extranjeros, por medio de una caracterizaci??n previa de especies, identificaci??n de zonas potenciales e implementaci??n de protocolos y planes de contingencia para la implementaci??n y monitoreo de la actividad.</p>
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
                    <!-- <p>Este proyecto esta siendo ejecutado por aprendices e instructores SENA de difetrentes PROGRAMAS DE FORMACI??N del CENTRO DE DESARROLLO AGROINDUSTRIAL Y EMPRESARIAL</p>-->
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
                                                <h3>EVA DEL PILAR DIAZ IBA??EZ</h3>
                                                <h4>INSTRUCTORA</h4>
                                                <h4>INVESTIGADORA DE LA RED AMBIENTAL</h4>
                                                <p>Instructora investigadora encargada de gestionar los procesos contractuales y actividades del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>EVA DEL PILAR DIAZ IBA??EZ<small class="role muted"></br>INSTRUCTORA</small></h5>
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
                                                <p> Como instructor de producci??n de medios audiovisuales, su funci??n es dirigir la producci??n audiovisual del proyecto en sus diferentes etapas y realizar junto con el equipo de trabajo la captura de im??genes de la avifauna y video del proyecto.<p>

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

                                                <p>Instructor de gesti??n administrativa encargado de planear y coordinar las salidas al campo para su respectiva ejecuci??n.</p>

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
                                                <p>Encargado de los sistemas de informaci??n geogr??fica y cartograf??a del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>DANIEL ARMANDO ROBLEDO BUITRAGO<small class="role muted"></br>INGENIERO AMBIENTAL</small></h5>
                                        <p>EXPERTO EN SISTEMAS DE INFORMACI??N GEOGR??FICA.</p>

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
                                                <h4>INSTRUCTORA SENNOVA DE LA RED DE QU??MICA APLICADA.</h4>
                                                <p>Instructora encargada de direccionar y revisar el cumplimiento del objetivo, resultados y productos del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                   <div class="team-content fade-up">
                                        <h5>EDITH AMANDA TIPAZ TIPAZ<small class="role muted"></br>INSTRUCTORA SENNOVA.</small></h5>
                                        <p>RED DE QU??MICA APLICADA.</p>

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
                                                <h4>GU??A PROFESIONAL - LIDER DEL PROYECTO</h4>
                                                <p>Como l??der del proyecto, se encarga de planificar,
                                                    dinamizar y ejecutar los objetivos trazados en la investigaci??n, es responsable de gestionar los recursos humanos, econ??micos y materiales necesarios para para obtener los resultados esperados, con la calidad necesaria en los plazos previstos.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>GINA LIZETH TRIANA<small class="role muted"></br>INSTRUCTORA SENA</small></h5>
                                        <p>GU??A PROFESIONAL - LIDER DEL PROYECTO</p>

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
                                                <p>Como instructor en An??lisis y Desarrollo de Sistemas de Informaci??n, 
                                                    su funci??n es la de dise??ar y desarrollar esta plataforma web, en donde las 
                                                    personas interesadas podr??n encontrar toda la caracterizaci??n de la avifauna
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
                                                <h4>BI??LOGO ORNIT??LOGO</h4>
                                                <p>Bi??logo ornit??logo, especialista en evaluaci??n del impacto ambiental de proyectos y
                                                    gu??a profesional de turismo. En el proyecto se encarga de la caracterizaci??n de la avifauna del
                                                    municipio de Villeta-Cundinamarca.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="team-content fade-up">
                                        <h5>Juan Carlos Obando<small class="role muted"></br>ASESOR EXTERNO</small></h5>
                                        <p>BI??LOGO ORNIT??LOGO</p>


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
                                                <h4>TECN??LOGO EN MEDIOS AUDIOVISUALES</h4>
                                                <p>Aprendiz en etapa productiva encargada de apoyar en la producci??n de captura de imagen, video y edici??n del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>HEIDY VALENTINA MARTINEZ RODRIGUEZ<small class="role muted"></br>APRENDIZ EN ETAPA PRODUCTIVA</small></h5>
                                        <p>TECN??LOGO EN MEDIOS AUDIOVISUALES</p>

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
                                                <h4>TECN??LOGO EN MEDIOS AUDIOVISUALES</h4>
                                                <p>Aprendiz en etapa productiva encargada de apoyar 
                                                    en la producci??n de captura de imagen, video y edici??n del proyecto.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>MARLLY YULIETH BERNAL ARANGO<small class="role muted"></br>APRENDIZ EN ETAPA PRODUCTIVA</small></h5>
                                        <p>TECN??LOGO EN MEDIOS AUDIOVISUALES</p>

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
                                                <h4>BI??LOGA Y MAG??STER EN CIENCIAS BIOL??GICAS DE LA UNIVERSIDAD DE CALDAS</h4>
                                                <p>Particip?? en la caracterizaci??n de aves silvestres y la elaboraci??n de rutas potenciales en las veredas del municipio de Villeta-Cundinamarca.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>ESTEFANI TATIANA MARTINEZ SANCHEZ<small class="role muted"></br></small></h5>
                                        <p>BI??LOGA Y MAG??STER EN CIENCIAS BIOL??GICAS DE LA UNIVERSIDAD DE CALDAS</p>

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
                                                <h4>TECN??LOGO EN CONTROL AMBIENTAL</h4>
                                                <p>Aprendiz en etapa productiva encargada de apoyar en la recopilaci??n de datos de las salidas de campo.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>KAREN JIMENA MENDEZ BRAVO<small class="role muted"></br>APRENDIZ EN ETAPA PRODUCTIVA</small></h5>
                                        <p>TECN??LOGO EN CONTROL AMBIENTAL</p>

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
                                                <p>Como aprendiz de producci??n de medios audiovisuales esta encargado de la preproducci??n, producci??n, captura y postproducci??n de foto fija y en
                                                    movimiento, para corto documental y divulgaci??n de la avifauna y flora para las
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
                                                <p>Su funci??n principal es la de apoyar la educaci??n ambiental, adem??s de ello dirigir actividades de concientizaci??n y apoyo en reforestaci??n.</p>

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
                                                <h3>MARCO DANILO G??NGORA</h3>
                                                <h4>APRENDIZ SENA</h4>
                                                <h4>GUIA TUR??STICO</h4>
                                                <p>Su principal funci??n es caracterizar zonas con posible potencial para el aviturismo
                                                    en Villeta, experto en avistamiento de aves.</br>
                                                    Adem??s de identificar zonas a trabajar durante el proyecto, dise??ar ficha de diagn??stico y
                                                    caracterizaci??n.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>MARCO D. G??NGORA<small class="role muted"></br>APRENDIZ SENA</small></h5>
                                        <p>GUIA TUR??STICO</p>

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
                                                <p>Como aprendiz de producci??n de medios audiovisuales esta encargada de la preproducci??n, producci??n, captura y postproducci??n de foto fija y en
                                                    movimiento, para corto documental y divulgaci??n de la avifauna y flora para las
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
                                                <p>Como aprendiz del tecn??logo en gesti??n de recursos naturales se encarga de la
                                                     identificaci??n de los servicios eco-sist??micos que proveen las veredas del municipio de
                                                      Villeta y sus alrededores a partir de la
                                                    percepci??n de los actores campesinos y estudiantes en la relaci??n con la
                                                    transformaci??n del paisaje en los municipios.</p>

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
                                                <h4>GU??A TUR??STICA</h4>
                                                <p>Como administradora tur??stica es Colaboradora del proyecto y relacionista P??blica.</p>

                                                <h6><em>Para cerrar esta ventana da clic fuera del recuadro</em></h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="team-content fade-up">
                                        <h5>Isabel Toro B.<small class="role muted"></br>INSTRUCTORA SENA</small></h5>
                                        <p>GU??A TUR??STICA</p>

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
                                                <h4>GESTI??N DE RECURSOS NATURALES</h4>
                                                <p>Apoyo en el levantamiento de informaci??n ambiental del proyecto.</p>

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
                <h2 class="titulof">DATOS DE INTER??S</h2>
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
                        <h3>PROGRAMAS DE FORMACI??N VINCULADOS</h3>
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