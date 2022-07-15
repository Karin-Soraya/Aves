<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Aves De Villeta</title>
    <link href="<?=base_url?>Assets/css/bootstrapvista.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/pe-icons.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url?>Assets/css/vista.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <script src="<?=base_url?>Assets/js/jquery.js"></script>
    <link rel="icon" href="<?=base_url?>Assets/images/logos/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

    
</head><!--/head-->
<body>
    <script>
        function preback (){window.history.forward();}
        setTimeout("preback()", 0);
        window.onunload=function(){null};
    </script>
    
    <?php require_once 'Views/layout/header.php'; ?>

   

<div id="preloader"></div>
    <div id="login"  class="container">
        <div class="row login-row">
            
            <div class="col-md-5 col-sm-5">
                <img src="<?=base_url?>Assets/images/bg/logologin.png" alt="">
                <a href="<?=base_url?>index.php">VOLVER PAGINA PRINCIPAL</a>
            </div>
            <div class="col-md-7 col-sm-7">
					
                
                <form action="<?=base_url?>usuario/login" method="POST">
                    <h3 class="tittle-form">INICIAR SESIÓN</h3>
                     <div class="form-group">
                       
                        <input type="email" required class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                      </div>
                     <div class="form-group">
                        
                        <input type="password" required class="form-control login-input" id="exampleInputPassword1" placeholder="Contraseña" name="password">
                     </div>
                     <div class="form-group">
                        
                        <input type="submit" class="btn login-input" value="INGRESAR">
                     </div>
                </form>
               
            </div>
            


        </div>
    </div>

   

    <script src="<?=base_url?>Assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url?>Assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url?>Assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="<?=base_url?>Assets/js/init.js"></script>
    <script src="<?=base_url?>Assets/js/bg.js"></script>
    
    
</body>
</html>