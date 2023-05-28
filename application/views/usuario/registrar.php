<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href=" <?php echo base_url(). 'acceso/img/logo.png';?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Pedidos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href= "<?php echo base_url(). 'acceso/css/linearicons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/themify-icons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/bootstrap.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/owl.carousel.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/nice-select.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/nouislider.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/ion.rangeSlider.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/ion.rangeSlider.skinFlat.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/magnific-popup.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'acceso/css/main.css'; ?>">
	
</head>



<body>
<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href=""><img src="<?php echo base_url().'acceso/img/logo.png';?>"alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							
							<li class="nav-item submenu dropdown">
								<a href="<?php echo base_url().'';?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="fals">Inicio</a>
								
							</li>
							<li class="nav-item submenu dropdown">
							<a class="nav-link" href="registrar-usuario">Pedir</a>
								
							</li>
							<li class="nav-item submenu dropdown">
							<a class="nav-link" href="<?php echo base_url().'login'?>">Admin</a>
								
							</li>
							<li class="nav-item submenu dropdown">
							<a class="nav-link" href="ver-productos">Productos</a>
								
							</li>
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url().''?>"><img src="<?php echo base_url().'acceso/img/logo.png';?>"alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							
                        <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url().'';?>">Inicio</a>
                        </li>
							<li class="nav-item submenu dropdown">
							<a class="nav-link" href="registrar-usuario">Pedir</a>
								
							</li>
							<li class="nav-item submenu dropdown">
							<a class="nav-link" href="<?php echo base_url().'login'?>">Admin</a>
								
							</li>
							<li class="nav-item submenu dropdown">
							<a class="nav-link" href="ver-productos">Productos</a>
								
							</li>
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
    <br>
    <br>
    <br>

   <br>
   <form method="POST" enctype="multipart/form-data" action="<?php echo base_url().'guardar-usuario';?>">
   <h2>Por favor, llena con tus datos</h2>
   <br>

	<main class="container">
	
		

		

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
				<button onclick="registrar()" type="submit" value="Registrar Datos" class="btn btn-outline-primary btn-lg">Registrar Datos</button>
			</div>
		</div>
		</form>
		
	</main>

	
	<br><br><br>

	<script type="text/javascript">

function registrar()
{
    swal(

	'Realizado',
  'Pedido Realizado Con Exito!',
  'success',
  
	);
}

	</script>
</body>


<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Nosotros</h6>
						<p>
                        Tienda deportiva chocoana con excelente calidad en tenis 1.1, no dejes pasar la oportunidad de estar cómodo y a la moda.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Siguenos</h6>
						<p>Redes Sociales</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | JuanDM <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	</p>
			</div>
		</div>
	</footer>
	<script src= "<?php echo base_url(). 'acceso/js/vendor/jquery-2.2.4.min.js'; ?>"></script>
	


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url(). 'acceso/js/jquery.nice-select.min.js'; ?>"></script>
	<script src="<?php echo base_url(). 'acceso/js/jquery.sticky.js'; ?>"></script>
	<script src="<?php echo base_url(). 'acceso/js/jquery.magnific-popup.min.js'; ?>"></script>
	
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url(). 'acceso/js/gmaps.min.js'; ?>"></script>
	<script src="<?php echo base_url(). 'acceso/js/main.js'; ?>"></script>

</html>