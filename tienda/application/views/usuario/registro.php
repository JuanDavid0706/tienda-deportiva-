<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Administrador</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Bienvenido, por favor registrate.</h1>
    <br>
	<main class="container">
		<form method="POST" enctype="multipart/form-data" action="<?php echo 'guardar-admin'; ?>">

		<?php if(@$error_usuario):?>
			<div class="row">
				<div class="col">
					<h6>Ya está registrado, porfavor iniciar sesión</h6>
				</div>
			</div>
		<?php endif;?>

		
		
		<div class="row">
			<div class="col">
				<label for="nombres" class="form-label"> Nombres</label>
				<input id="nombres" type="text" name="nombres" value="<?php echo @$nombre; ?>" class="form-control" required>
			</div>
			
		
		<?php if(@$error_contra):?>
			<div class="row">
				<div class="col">
					<h6>Contraseñas no son iguales</h6>
				</div>
			</div>
		<?php endif;?>
		<div class="row">
			<div class="col">
				<label for="correo" class="form-label">Correo Electrónico</label>
				<input id="correo" type="correo" name="correo" value="<?php echo @$correo; ?>" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="contraseña" class="form-label">Contraseña</label>
				<input id="contraseña" type="contraseña" name="contraseña" value="<?php echo @$contraseña; ?>" class="form-control" minlength="8" maxlength="15" required>
			</div>
			<div class="col">
				<label for="contraseña" class="form-label">Comfirmar contraseña</label>
				<input id="contraseña" type="contraseña" name="contraseña" value="<?php echo @$contraseña; ?>"class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-text">
					Tu contraseña debe tener mínimo 8  y má ximo 15 caracteres
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<a class="form-text" href="<?php echo base_url(); ?>">Ya estás registrado, ir a iniciar sesión
				</a>
			</div>
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-auto">
				<input type="submit" name="registro_admin" value="Registrar datos" class="btn btn-success btn-lg">
			</div>
		</div>
		</form>
	</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</html>