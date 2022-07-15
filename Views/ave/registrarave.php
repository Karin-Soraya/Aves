
    <?php 
    require_once 'Views/layout/headerAdmin.php'; 
    require_once ('Helpers/utils.php');
    ?>

    

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
                                <?php echo '<script>alert("Registro de Ave completado correctamente")</script>'; ?>
                                <strong style="color:#4e893f;" class="">Registro de Ave completado correctamente</strong>
                              <?php elseif(isset($_SESSION['ave']) && $_SESSION['ave']== 'failed'): ?>
                                <?php echo '<script>alert("Registro fallido")</script>'; ?>
                                <strong style="color:red;" class="">Registro De Ave Fallido</strong>
                              <?php endif; ?>


                              <?php Utils::deleteSession('ave'); ?>

                              <?php if (isset($editar) && isset($av) && is_object($av)):?>
                                  <h3 class="tittle-formu">BIENVENID@: <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellido?></h3>
                                  <h3 class="tittle-formu">EDITAR AVE: <?=$av->nombre_cientifico?></h3>
                                  <?php $urlaction= base_url."ave/save&id=".$av->id_ave;?>
                              <?php else: ?>
                                <h3 class="tittle-formu">BIENVENID@: <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellido?></h3>
                                <h3 class="tittle-formu">REGISTRAR AVE</h3>
                                  <?php $urlaction= base_url."ave/save";?>
                              <?php endif; ?>

                                  <form action="<?=$urlaction?>" method="POST" enctype="multipart/form-data">

                                     
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Nombre Cientifico:</label>
                                          <input type="text" class=""  name="nom_cientifico" value="<?=isset($av) && is_object($av) ? $av->nombre_cientifico : ''; ?>" required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Nombre En Ingles:</label>
                                          <input type="text" class=""  name="nom_ingles" value="<?=isset($av) && is_object($av) ? $av->nombre_ingles : ''; ?>"  required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Nombre Comun:</label>
                                          <input type="text" class=""  name="nom_comun" value="<?=isset($av) && is_object($av) ? $av->nombre_comun : ''; ?>" required>
                                        </div>
                                      </div>
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Orden:</label>
                                          <input type="text" class=""  name="orden" value="<?=isset($av) && is_object($av) ? $av->orden : ''; ?>" required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Familia:</label>
                                          <input type="text" class=""  name="familia" value="<?=isset($av) && is_object($av) ? $av->familia : ''; ?>"  required>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Localiad:</label>
                                         <?php $localidades= Utils::showLocalidades(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="localidad" required>
                                            <option selected></option>
                                            <?php while($localidad = $localidades->fetch_object()): ?>
                                              <option value="<?=$localidad->nombre?>" <?=isset($av) && is_object($av) && $localidad->nombre == $av->localidad ? 'selected' : ''; ?> ><?=$localidad->nombre?></option>
                                            <?php endwhile; ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row">                        
                                      
                                        <div class="col-md-4 ">
                                         <label for="#">Gremio trófico:</label>
                                         <?php $gremios= Utils::showGremios(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="gremio" required>
                                            <option selected></option>
                                            <?php while($gremio = $gremios->fetch_object()): ?>
                                              <option value="<?=$gremio->nombre?>" <?=isset($av) && is_object($av) && $gremio->nombre == $av->gremio ? 'selected' : ''; ?>  ><?=$gremio->nombre?></option>
                                            <?php endwhile; ?>
                                          </select>
                                        </div>
                                        
                                        <div class="col-md-4 ">
                                         <label for="#">Distribución / Migración:</label>
                                         <?php $distribuciones= Utils::showDistribuciones(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="distribucion" required> 
                                            <option selected></option>
                                            <?php while($distribucion = $distribuciones->fetch_object()): ?>
                                              <option value="<?=$distribucion->nombre?>" <?=isset($av) && is_object($av) && $distribucion->nombre == $av->distribucion ? 'selected' : ''; ?> ><?=$distribucion->nombre?></option>
                                            <?php endwhile; ?>

                                          </select>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Altitud:</label>
                                          <input type="text" class=""  name="altitud" value="<?=isset($av) && is_object($av) ? $av->altitud : ''; ?>" required>
                                        </div>
                                      </div>
                                      <div class="row">                        
                                      
                                        
                                        <div class="col-md-4 ">
                                         <label for="#">IUCN:</label>
                                         <?php $iucns= Utils::showIucns(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="iucn" required>
                                            <option selected></option>
                                            <?php while($iucn = $iucns->fetch_object()): ?>
                                              <option value="<?=$iucn->nombre?>"   <?=isset($av) && is_object($av) && $iucn->nombre == $av->iucn ? 'selected' : ''; ?> ><?=$iucn->nombre?></option>
                                            <?php endwhile; ?>
                                          </select>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">Libro Rojo:</label>
                                         <?php $libros= Utils::showLibroRojo(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="libro" required>
                                            <option selected></option>
                                            <?php while($libro = $libros->fetch_object()): ?>
                                              <option value="<?=$libro->nombre?>"  <?=isset($av) && is_object($av) && $libro->nombre == $av->libro ? 'selected' : ''; ?>><?=$libro->nombre?></option>
                                            <?php endwhile; ?>
                                          </select>
                                        </div>
                                        <div class="col-md-4 ">
                                         <label for="#">CITES:</label>
                                         <?php $cites= Utils::showCites(); ?> 
                                          <select class="custom-select custom-select-lg mb-3" name="cites" required> 
                                            <option selected></option>
                                            <?php while($cite = $cites->fetch_object()): ?>
                                              <option value="<?=$cite->nombre?>"   <?=isset($av) && is_object($av) && $cite->nombre == $av->cites ? 'selected' : ''; ?>><?=$cite->nombre?></option>
                                            <?php endwhile; ?>
                                          </select>
                                        </div>
                                      </div>


                                      <div class="row">  
                                        <!-- nueva insersion de campo para ingresar descripcion -->
                                      <div class="col-md-4 ">
                                         <label for="#">Descripcion:</label>
                                          <textarea type="" class=""  name="descripcion" cols="35" rows="5" required><?=isset($av) && is_object($av) ? $av->descripcion : ''; ?></textarea>
                                        </div>
                                      
                                        
                                    
                                        <div class="col-md-4 ">
                                         <label for="#">Foto:</label>
                                         <?php if(isset($av) && is_object($av) && !empty($av->foto)): ?>
                                            <img src="<?=base_url?>uploads/images/<?=$av->foto?>" alt="" width="200px" class="thumb">
                                        <?php endif; ?>

                                          <input type="file" class=""  name="foto" >
                                        </div>






                                     <div class="row">
                                        <div class="col-md-12 ">
                                          <label for="#">Cobertura Vegetal:</label></br></br>
                                          <?php $coberturas= Utils::showCoberturas(); ?> 
                                            <?php while($cobertura = $coberturas->fetch_object()): ?>
                                              <div class="checkbox-cv">
                                                <input type="checkbox" name="opcion" value="<?=$cobertura->nombre?>" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"><?=$cobertura->nombre?></label>
                                              <br>
                                              </div>
                                              
                                            <?php endwhile; ?>
                                        </div>
                                      
                                       <div class="form-group">
                                          
                                          <input type="submit" class="btn" value="REGISTRAR AVE">
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