<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href=" <?php echo base_url(). 'acceso/tienda1/img/fav.png';?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Pedidos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url().'acceso/estilos/bootstrap.min.css';	 ?>">
	<link rel ="stylesheet" href="<?php echo base_url().'acceso/estilos/estilos.css'; ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <ul class="nav navbar-nav">
           <li class="nav-item">
               <a class="nav-link" href="http://localhost/tienda/index.php/registrar-usuario">Pedir</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="http://localhost/tienda/">Inicio</a>
           </li>
           
           <li class="nav-item">
               <a class="nav-link" href="http://localhost/tienda/index.php/ver-productos">Productos</a>
           </li>
       </ul>
   </nav>
   <br>
   <h2>Por favor, llena con tus datos</h2>
   <br>
	<main class="container">
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url().'	guardar-usuario' ?>"">
		

		

		<div class="row">
			<div class="col">
				<label for="identificacion" class="form-label">Identicifacion</label>
				<input id="identificacion" type="text" name="identificacion" value="<?php echo @$identificacion; ?>" class="form-control" required>
			</div>
			
		</div>
		<div class="row">
			<div class="col">
				<label for="primer_nombre" class="form-label">Primer Nombre</label>
				<input id="primer_nombre" type="text" name="primer_nombre" value="<?php echo @$primer_nombre; ?>" class="form-control" required>
			</div>
			<div class="col">
				<label for="segundo_nombre" class="form-label">Segundo Nombre</label>
				<input id="segundo_nombre" type="text" name="segundo_nombre" value="<?php echo @$segundo_nombre; ?>" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="primer_apellido" class="form-label">Primer Apellido</label>
				<input id="primer_apellido" type="text" name="primer_apellido" class="form-control" value="<?php echo @$primer_apellido; ?>" required>
			</div>
			<div class="col">
				<label for="segundo_apellido" class="form-label">Segundo Apellido</label>
				<input id="segundo_apellido" type="text" name="segundo_apellido" value="<?php echo @$segundo_apellido; ?>" class="form-control" required>
			</div>

		</div>
		
		<div class="row">
			<div class="col">
				<label for="correo" class="form-label">Correo Electrónico</label>
				<input id="correo" type="correo" name="correo" value="<?php echo @$correo; ?>" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="telefono" class="form-label">Telefono</label>
				<input id="telefono" type="text" name="telefono" value="<?php echo @$telefono; ?>" class="form-control" required>
			</div>

			<div class="row">
			<div class="col">
				<label for="direccion" class="form-label">Dirección</label>
				<input id="direccion" type="text" name="direccion" value="<?php echo @$direccion; ?>" class="form-control" required>
			</div>

			<div class="row">
			<div class="col">
				<label for="fecha" class="form-label">Fecha</label>
				<input id="fecha" type="text" name="fecha" value="<?php echo @$fecha; ?>" class="form-control" required>
			</div>

		<div class="row">
			<div class="col">
				<label for="cantidad" class="form-label">Cantidad</label>
				<input id="cantidad" type="cantidad" name="cantidad" value="<?php echo @$cantidad;?>" class="form-control" minlength="" maxlength="10" required>
			</div>

			<div class="row">
			<div class="col">
				<label for="producto" class="form-label">Producto</label>
				<input id="producto" type="text" name="producto" value="<?php echo @$producto; ?>" class="form-control" required>
			</div>

			<div class="row">
			<div class="col">
				<label for="forma_de_pago" class="form-label">Forma de pago</label>
				<input id="forma_de_pago" type="text" name="forma_de_pago" value="<?php echo @$forma_de_pago; ?>" class="form-control" required>
			</div>

		
			
		<div class="row mt-3 justify-content-center">
			<div class="col-auto">
				<button type="submit" value="Registrar datos" class="btn btn-outline-primary btn-lg">Registrar Datos</button>
			</div>
		</div>
		</form>
	</main>
	<br><br><br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</html>