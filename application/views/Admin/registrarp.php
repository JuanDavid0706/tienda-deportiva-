<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href=" <?php echo base_url(). 'acceso/tienda1/img/fav.png';?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url().'acceso/estilos/bootstrap.min.css';	 ?>">
	<link rel ="stylesheet" href="<?php echo base_url().'acceso/estilos/estilos.css'; ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <ul class="nav navbar-nav">
           
           <li class="nav-item">
               <a class="nav-link" href="http://localhost/tienda/index.php/productos">Ir al Panel</a>
           </li>
           
           
       </ul>
   </nav>
   <br>
   <center> <h2>Registar nombre,Precio & Cantidad del producto</h2>
  </center>    <br>
	<main class="container">
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url().'guardar-productos';?>">
		

		

		
			
		</div>
		<div class="row">
			<div class="col">
				<label for="producto" class="form-label">Producto</label>
				<input id="producto" type="text" name="producto" value="<?php echo @$producto; ?>" class="form-control" required>
			</div>
			<div class="col">
				<label for="precio" class="form-label">Precio</label>
				<input id="precio" type="text" name="precio" value="<?php echo @$precio; ?>" class="form-control" required>
			</div>
		</div>

		
			
			
		<div class="row mt-3 justify-content-center">
			<div class="col-auto">
				<button type="submit" value="Registrar datos" class="btn btn-outline-primary btn-lg">Registrar Producto</button>
			</div>
		</div>
		</form>
	</main>
	<br><br><br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</html>