
<?php
    require_once 'Views/layout/headerAdmin.php'; 
    require_once ('Helpers/utils.php');
?>


        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <div id="menuAdmin"  class="container">
                          <div class="row register-row">

                              <div class="col-md-10 col-sm-10">
                              <?php  if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'):?>
                                <?php echo '<script>alert("Registro de Ave eliminado")</script>'; ?>
                                <strong style="color:red;" class="">Registro de Ave eliminado</strong>
                              <?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']== 'failed'): ?>
                                <?php echo '<script>alert("Error al eliminar")</script>'; ?>
                                <strong style="color:red;" class="">Error al eliminar</strong>
                              <?php endif; ?>


                              <?php Utils::deleteSession('delete'); ?>

                            <h3 class="tittle-formu">VER AVES</h3>
                                  
                             

                                <table id="ver">
                                    <thead>

                                        <tr>
                                        <th>Id</th>
                                        <th>Nombre Científico</th>
                                        <th>Familia</th>
                                        <th>Imagen</th>
                                        <th>Descripción</th>
                                        <th>Fecha Creación</th>
                                        <th>Acciónes</th>
                                        </tr>

                                    </thead>

                                <?php while ($av = $categorias->fetch_object()): ?>
                                    <tr>
                                        <td><?=$av->id_ave?></td>
                                        <td><?=$av->nombre_cientifico?></td>
                                        <td><?=$av->familia?></td>
                                        <td><img src="<?= base_url ?>uploads/images/<?=$av->foto?>" alt="" height="100" width="150" ></td>
                                        <!-- <td><img src="<?= base_url ?>images/upload/<?=$av->foto?>" alt="" height="100" width="150" ></td> -->
                                        <td><?=$av->descripcion?></td>
                                        <td><?=$av->fecha?></td>
                                        <td>
                                            <a href="<?=base_url?>ave/editar&id=<?=$av->id_ave?>" class="btn btn-success" id="button">Editar</a><br><br>
                                            
                                            <a href="<?=base_url?>ave/delete&id=<?=$av->id_ave?>" class="btn btn-danger" id="button" >Eliminar</a>
                                        </td>
                                    </tr>
                                 <?php endwhile; ?>

                                  
                                    
                                </table>


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