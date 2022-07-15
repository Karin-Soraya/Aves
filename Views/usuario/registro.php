<h1>Registrarse</h1>

<?php  if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'):?>
	<?php echo '<script>alert("Usuario Registrado")</script>'; ?>
	<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']== 'failed'): ?>
	<?php echo '<script>alert("Registro fallido, introduce bien los datos")</script>'; ?>
	<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>


<?php Utils::deleteSession('register'); ?>


<form action="<?=base_url?>usuario/save" method="POST" >
	
<br><br><br><br>
<br><br><br><br>


	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required/>
	
	<label for="apellido">Apellidos</label>
	<input type="text" name="apellido" required/>
	
	<label for="email">Email</label>
	<input type="email" name="email" required/>

    <label for="telefono">telefonno</label>
	<input type="number" name="telefono" required/>

    <label for="Cargo">Cargo</label>
	<input type="text" name="cargo" required/>

    <label for="ficha">ficha</label>
	<input type="number" name="ficha" required/>
	
	<label for="pass">Contraseña</label>
	<input type="password" name="password" required/>
	
	<input type="submit" value="Enviar" />

</form>