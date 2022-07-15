<?php

    // //Se verifica si existe la sesion
    // session_start();
    // if(empty($_SESSION['active'])){
    //   echo "<script>alert('Error, se requiere iniciar sesión.')</script>";
    //   echo "<script>location.href='login.php'</script>";

    //   //header('location: login.php');
    // }
?>

<?php
    require_once ('Helpers/utils.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Editar | Aves De Villeta</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Assets/css/pe-icons.css" rel="stylesheet">
    <link href="../Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Assets/css/animate.css" rel="stylesheet">
    <link href="../Assets/css/vista.css" rel="stylesheet">
    <link href="../Assets/css/estilos.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <script src="../Assets/js/jquery.js"></script>
    <link rel="shortcut icon" href="../Assets/images/logos/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script type="text/javascript">
      $(document).ready(function () {
      var trigger = $('.hamburger'),
      overlay = $('.overlay'),
      isClosed = false;

      trigger.click(function () {
        hamburger_cross();      
      });

      function hamburger_cross() {

        if (isClosed == true) {          
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {   
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
      }
  
      $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
      });  
      });

    
    </script>

</head><!--/head-->


<?php 
// if(isset($_SESSION['admin'])): 
?>

<body>
<div id="preloader"></div>

<d   <div id="wrapper" class="toggled">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       <img src="../Assets/images/bg/logoMenu.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="<?=base_url?>ave/registrarave">REGISTRAR AVES</a>
                </li>
                <li>
                    <a href="<?=base_url?>ave/verave">VER AVES</a>
                </li>
                <li>
                    <a href="<?=base_url?>usuario/logout">CERRAR SESIÓN</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <div id="menuAdmin"  class="container">
                          <div class="row register-row">

                              <div class="col-md-10 col-sm-10">
                                  


                              <?php  if(isset($_SESSION['ave']) && $_SESSION['ave'] == 'complete'):?>
                                <?php echo '<script>alert("Registro Exitoso")</script>'; ?>
                                <strong style="color:#4e893f;" class="">Registro De Ave completado correctamente</strong>
                              <?php elseif(isset($_SESSION['ave']) && $_SESSION['ave']== 'failed'): ?>
                                <?php echo '<script>alert("Registro fallido")</script>'; ?>
                                <strong style="color:red;" class="">Registro De Ave Fallido</strong>
                              <?php endif; ?>


                              <?php Utils::deleteSession('ave'); ?>


                                  <form action="<?=base_url?>ave/save" method="POST" enctype="multipart/form-data">
                                  <h3 class="tittle-formu">BIENVENID@: <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellido?></h3>

                                      <h3 class="tittle-formu">EDITAR AVE</h3>
                                     
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Nombre Cientifico:</label>
                                          <input type="text" class=""  name="nom_cientifico" required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Nombre En Ingles:</label>
                                          <input type="text" class=""  name="nom_ingles" required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Nombre Comun:</label>
                                          <input type="text" class=""  name="nom_comun" required>
                                        </div>
                                      </div>
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Orden:</label>
                                          <input type="text" class=""  name="orden" required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Familia:</label>
                                          <input type="text" class=""  name="familia" required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Localiad:</label>
                                         <?php $localidades= Utils::showLocalidades(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="localidad" required>
                                            <option selected></option>
                                            <?php while($localidad = $localidades->fetch_object()): ?>
                                              <option value="<?=$localidad->nombre?>"><?=$localidad->nombre?></option>
                                            <?php endwhile; ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Gremio trófico:</label>
                                          <select class="custom-select custom-select-lg mb-3" name="gremio" required>
                                            <option selected></option>
                                            <option value="Granivoro">Granívoro</option>
                                            <option value="Insectivoro">Insectívoro</option>
                                            <option value="Frugivoro">Frugívoro</option>
                                            <option value="Nectarivoro">Nectarívoro</option>
                                            <option value="Insectivoro / Frugivoro">Insectívoro / Frugívoro</option>
                                            <option value="Omnivoro">Omnívoro</option>
                                            <option value="Carnivoro">Carnívoro</option>
                                          </select>
                                        </div>
                                        
                                        <div class="col-md-4 ">
                                         <label for="#">Distribución / Migración:</label>
                                          <select class="custom-select custom-select-lg mb-3" name="distribucion" required> 
                                            <option selected></option>
                                            <option value="Altitudinal">Altitudinal</option>
                                            <option value="Alt-Loc">Alt-Loc</option>
                                            <option value="Casi Endemica">Casi Endémica</option>
                                            <option value="Endemica">Endémica</option>
                                            <option value="Introducida">Introducida</option>
                                            <option value="Lat-Alt">Lat-Alt</option>
                                            <option value="Lat-Alt-Trans-Loc">Lat-Alt-Trans-Loc</option>
                                            <option value="Lat-Loc">Lat-Loc</option>
                                            <option value="Lat-Lon-Trans">Lat-Lon-Trans</option>
                                            <option value="Lat-Trans">Lat-Trans</option>
                                            <option value="Lat-Trans-Loc">Lat-Trans-Loc</option>
                                            <option value="Local ">Local </option>

                                          </select>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Altitud:</label>
                                          <input type="text" class=""  name="altitud" required>
                                        </div>
                                      </div>
                                      <div class="row">                        
                                      
                                        
                                        <div class="col-md-4 ">
                                         <label for="#">IUCN:</label>
                                          <select class="custom-select custom-select-lg mb-3" name="iucn" required>
                                            <option selected></option>
                                            <option value="LC">LC</option>
                                            <option value="DD">DD</option>
                                            <option value="NT">NT</option>
                                            <option value="VU">VU</option>
                                            <option value="EN">EN</option>
                                            <option value="CR">CR</option>
                                          </select>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Libro Rojo:</label>
                                          <select class="custom-select custom-select-lg mb-3" name="libro" required>
                                            <option selected></option>
                                            <option value="LC">LC</option>
                                            <option value="DD">DD</option>
                                            <option value="NT">NT</option>
                                            <option value="VU">VU</option>
                                            <option value="EN">EN</option>
                                            <option value="CR">CR</option>
                                          </select>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">CITES:</label>
                                          <select class="custom-select custom-select-lg mb-3" name="cites" required> 
                                            <option selected></option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                          </select>
                                        </div>
                                      </div>


                                      <div class="row">  
                                        <!-- nueva insersion de campo para ingresar descripcion -->
                                      <div class="col-md-4 ">
                                         <label for="#">Descripcion:</label>
                                          <textarea type="" class=""  name="descripcion" required></textarea>
                                        </div>
                                      
                                        
                                    
                                        <div class="col-md-4 ">
                                         <label for="#">Foto:</label>
                                          <input type="file" class=""  name="foto" >
                                        </div>







                                        <!--
                                        <div class="col-md-4 ">
                                         <label for="#">Foto N2:</label>
                                          <input type="file" class=""  name="foto2" >
                                        </div>
                                     --> </div><!--
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Foto N3:</label>
                                          <input type="file" class=""  name="foto3" >
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Foto N4:</label>
                                          <input type="file" class=""  name="foto4" >
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Video:</label>
                                          <input type="file" class=""  name="video" >
                                        </div>
                                      </div>-->
                                     <div class="row">
                                        <div class="col-md-12 ">
                                          <label for="#">Cobertura Vegetal:</label></br></br>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Bosques" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Bosques</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="vegetación herbacea o arbustiva" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Vegetación herbacea o arbustiva</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Areas abiertas"  class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Areas abiertas</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Cultivos transitorios y permanentes" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Cultivos transitorios y permanentes</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Pastos" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Pastos</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Aguas continentales" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Aguas continentales</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Vegetacion secundaria en transicion" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Vegetación secundaría o en transición</label>
                                          </div>
                                          <div class="checkbox-cv">
                                            <input type="checkbox" name="opcion[]" value="Zonas Urbanizadas" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Zonas Urbanizadas</label>
                                          </div>
                                        </div>
                                      
                                       <div class="form-group">
                                          
                                          <input type="submit" class="btn " value="MODIFICAR AVE">
                                       </div></div>

                                  </form>
                              </div>
                          </div>
                      </div>                 
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <script src="../Assets/js/bootstrap.min.js"></script>
    <script src="../Assets/js/jquery.prettyPhoto.js"></script>
    <script src="../Assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="../Assets/js/init.js"></script>
    <script src="../Assets/js/bg.js"></script>

</body>

<?php 
// endif; 
?>
</html>