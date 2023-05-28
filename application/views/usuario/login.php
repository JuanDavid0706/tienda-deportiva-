<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href= "<?php echo base_url(). 'acceso/css/loginusuario.css'; ?>">
    <title>SUSCRIPCIÓN</title>
</head>
<body>
    
    <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
            <div class="row g-0">
                <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
    
                    <div class="text-center">
                    <img src="<?php echo base_url(). 'acceso/img/logo.png';?>""
                        style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Suscribete para tener noticas y promociones </h4>
                    </div>
    
                    <form  method="POST" enctype="multipart/form-data" action="<?php echo base_url().'login-guardar';?>">
                    <p>¡SUSCRIBETE!</p>
    
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example11" class="form-control"
                        placeholder="Nombre" name="nombre" />
                        <label class="form-label" for="form2Example11">Nombre</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example11" class="form-control"
                        placeholder="Phone number or email address" name="usuario" />
                        <label class="form-label" for="form2Example11">Correo</label>
                    </div>
    
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example22" class="form-control" name="contraseña" />
                        <label class="form-label" for="form2Example22">Contraseña</label>
                    </div>
    
                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Suscribete</button>
                    
                    </div>
    
                
    
                    </form>
    
                </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">Tienda de calzado deportivo</h4>
                    <p class="small mb-0">Tienda deportiva chocoana con excelente calidad en tenis 1.1, no dejes pasar la oportunidad de estar cómodo y a la moda.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

</body>
</html>