<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="shortcut icon" href=" <?php echo base_url(). 'acceso/tienda1/img/fav.png';?>"
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel de Administración</title>
        <link  href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url().'acceso/panel/css/styles.css'; ?>" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
                
                
                
                
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="<?php echo base_url().'salir';?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <?php if($this->session->Eliminacion_ok):?>
                            <div class="alert alert-danger"> Se Eliminó correctamente </div>

                            <?php endif;?>
                            
                            <a class="nav-link" href="<?php echo base_url().'productos';?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Productos Disponibles
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pedidos realizados</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Consolidado <a href=""></a></li>
                        </ol>
                                        
                                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pedidos Realizados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Primer Nombre</th>
                                            <th>Correo</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Identificación</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
                  <?php    if(isset($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>

                <tr>
                
                    <td><?php echo $usuario->primer_nombre; ?></td>
                    <td><?php echo $usuario->correo; ?></td>
                    <td><?php echo $usuario->direccion; ?></td>
                    <td><?php echo $usuario->telefono; ?> </td>
                    <td><?php echo $usuario->identificacion; ?></td>
                    <td><?php echo $usuario->producto; ?></td>
                    <td><?php echo $usuario->cantidad; ?></td>
                    
                    <td> 
                        <a class="btn btn-danger" href="<?php echo base_url().'gestionar-pedido/eliminar?identificacion='.@$usuario->identificacion; ?>">Eliminar</a> 
                </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Usuarios suscritos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Consolidado <a href=""></a></li>
                        </ol>
                                        
                                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Usuarios Suscritos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th> Nombre  </th> 

                                        <th> Correo  </th>

                                        <th> Contraseña </th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <strong>   
                                        
                                        <p>Usuarios Registrados hasta el momento</p>
                                        </strong> 
                                    </tfoot>
                                        
                                    <tbody>
                                    
                <?php    if(isset($usuarios_reg)): ?>
                    <?php foreach ($usuarios_reg as $usuario): ?>

                <tr>

                    
                    <td><?php echo$usuario->nombre; ?></td>

                    <td><?php echo$usuario->usuario; ?></td>
                    
                    <td><?php echo$usuario-> contraseña; ?></td>

                    
                    <td> 
                        <a class="btn btn-danger" href="<?php echo base_url().'gestionar-usuario/eliminar?identificacion='.@$usuario->_id; ?>">Eliminar</a> 
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


    



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(). 'acceso/panel/js/scripts.js'; ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(). 'acceso/panel/assets/demo/chart-area-demo.js';?>"></script>
        <script src="<?php echo base_url(). 'acceso/panel/assets/demo/chart-bar-demo.js';?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(). 'acceso/panel/js/datatables-simple-demo.js'; ?>"></script>
    </body>
</html>
