

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
    <title> Registrar | Aves De Villeta</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Assets/css/pe-icons.css" rel="stylesheet">
    <link href="../Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Assets/css/animate.css" rel="stylesheet">
    <link href="../Assets/css/master.css" rel="stylesheet">
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