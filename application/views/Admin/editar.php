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
   <center> <h2>Registar nombre & Precio del producto</h2>
  </center>    <br>
	<main class="container">
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url().'editar';?>">
		

		
	<div class="col-sm-6 mb-3 mb-sm-0">   
		    <input id="_id" type="hidden" name="_id"  class="form-control form-control-user" required
            placeholder="Numero ID" value="<?php echo $usuario->_id;  ?>">
     </div>
		
			
		</div>
		<div class="row">
			<div class="col">
				<label for="producto" class="form-label">Producto</label>
				<input id="producto" type="text" name="producto" value="<?php echo $usuario->producto;?>" class="form-control" required>
			</div>
			<div class="col">
				<label for="precio" class="form-label">Precio</label>
				<input id="precio" type="text" name="precio" value="<?php echo $usuario->precio; ?>" class="form-control" required>
			</div>
		</div>

		
			
			
		<div class="row mt-3 justify-content-center">
		<div class="box-body">
                            <div class="col-md-12">
                     <center>
        <div class="btn-group pull-right">
         <a href="<?php echo base_url(); ?>productos" name="btn-atras" id="btn-atras" class="btn btn-danger" style="margin-right: 5px;"><span class="fa fa-backward"> Cancelar</span></a>
			<div class="col-auto">

			<button  onclick="editar()" type="submit" name="guardar" id="btn-guardar" class="btn btn-success">Guardar <span class="fa fa-save"></span></button>
                                </div>
                                </center>
                            </div>
                        </div>
				
			</div>
		</div>
		</form>
	</main>
	
	
<script type="text/javascript">

function editar()
{
    swal(

	'Editado exitosamente', 'exito',
  'success',
  
	);
}

	</script>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</html>