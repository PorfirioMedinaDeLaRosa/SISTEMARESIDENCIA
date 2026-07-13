<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ITS | Ciudad Serdán</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" href="dist/img/tecnm.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="DiseñoTable.css">
    <link rel="stylesheet" href="DiseñoTable.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php
    include 'conexion.php';
    $sql = "CALL guardiainfo('1')";
    $query = $conexion->query($sql);
    if (mysqli_num_rows($query) > 0) {
        if ($datos = mysqli_fetch_row($query)) {
    ?>
    <?php
        }
    }
    $conexion->next_result();
    ?>

    <div class="content-wrapper1">
        <div class="wrapper">
            <!-- Preloader -->
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index.php" class="brand-link">
                    <img src="dist/img/tecnm.png" alt="Tecnm Logo" class="img-circle elevation-3" height="50" width="50" />
                    <font class="brand-text font-weight-light" size="3"><b>CAMPUS CIUDAD SERDÁN</b></font>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                        </div>
                        <div class="info">
                            <b><a href="perfil.php" class="d-block">
                                    <?php echo $datos[1]; ?>
                                    <?php echo $datos[2]; ?>
                                    <?php echo $datos[3]; ?>
			    </a></b>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        INICIO
                                    </p>
                                </a>
                            </li>
			<li class="nav-item">
                                <a href class="nav-link">
                                    <i class="nav-icon fas fa-qrcode"></i>
                                    <p>ENTRADAS Y SALIDAS</p>
                                    <i class="fas fa-angle-left right"></i>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                         <a href="Entrada.php" class="nav-link">
                                                <i class="nav-icon fas fa-qrcode"></i>
                                             <p>ENTRADA</p>
                                         </a>
                                    </li>
                                    <li class="nav-item">
                                         <a href="Salida.php" class="nav-link">
                                                <i class="nav-icon fas fa-qrcode"></i>
                                             <p>SALIDA</p>
                                         </a>
                                    </li>
                               </ul>
                         </li>
                            <li class="nav-item">
                                <a href class="nav-link">
                                    <i class="nav-icon fas fa-user-plus"></i>
                                    <p>
                                        REGISTRAR
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="Registro-Proveedor.php" class="nav-link">
                                            <i class="fas fa-truck nav-icon"></i>
                                            <p>PROVEEDOR</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Registro-Visitante.php" class="nav-link">
                                            <i class="fas fa-users nav-icon"></i>
                                            <p>VISITANTE</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href class="nav-link active">
                                    <i class="nav-icon fas fa-user-check"></i>
                                    <p>
                                        CONSULTAS
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href class="nav-link">
                                            <i class="fas fa-id-card nav-icon"></i>
                                            <p>TRABAJADORES</p>
                                            <i class="fas fa-angle-left right"></i>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="Consulta-Administrativos.php" class="nav-link">
                                                    <i class="far fa-id-badge nav-icon"></i>
                                                    <p>ADMINISTRATIVOS</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="Consulta-Jefes.php" class="nav-link">
                                                    <i class="far fa-id-badge nav-icon"></i>
                                                    <p>JEFES DE CARRERA</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="Consulta-Docentes.php" class="nav-link">
                                                    <i class="far fa-id-badge nav-icon"></i>
                                                    <p>DOCENTES</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="Consulta-Intendentes.php" class="nav-link">
                                                    <i class="far fa-id-badge nav-icon"></i>
                                                    <p>INTENDENTES</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Consulta-Alumnos.php" class="nav-link active">
                                            <i class="fas fa-graduation-cap nav-icon"></i>
                                            <p>ALUMNOS</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href class="nav-link">
                                            <i class="fas fa-truck nav-icon"></i>
                                            <p>PROVEEDORES</p>
                                            <i class="fas fa-angle-left right"></i>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="Consulta-Proveedor.php" class="nav-link">
                                                    <i class="far fa-truck nav-icon"></i>
                                                    <p>LISTA PROVEEDORES</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="Entradas-Proveedor.php" class="nav-link">
                                                    <i class="far fa-truck nav-icon"></i>
                                                    <p>CONTROL DE ENTRADA</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href class="nav-link">
                                            <i class="fas fa-users nav-icon"></i>
                                            <p>VISITANTES</p>
                                            <i class="fas fa-angle-left right"></i>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="Consulta-Visitante.php" class="nav-link">
                                                    <i class="far fa-truck nav-icon"></i>
                                                    <p>LISTA VISITANTES</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="Entradas-Visitante.php" class="nav-link">
                                                    <i class="far fa-truck nav-icon"></i>
                                                    <p>CONTROL DE ENTRADA</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        CERRAR SESIÓN
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">CONTROL DE CONSULTAS ALUMNOS</h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">INICIO</a></li>
                                    <li class="breadcrumb-item">CONSULTAS</li>
                                    <li class="breadcrumb-item">ALUMNOS</li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <section class="content-wrapper1">
                    <div class="contenedor">
                        <div id="page" class="container-fluid mt-0">
			 <input class='buscador' type="text" id="searchInput" placeholder="Buscar por cualquier campo">
                            <table>
                                <tr class='encabezado'>
                                    <th>Número Control</th>
                                    <th>Nombre Completo</th>
                                    <th>Fecha de Entrada</th>
                                    <th>Hora de Entrada</th>
                                    <th>Hora de Salida</th>
                                    <th>Carrera</th>
                                </tr>
                                <?php
                                $sql = "CALL consultaAlumnoE";
                                $query = $conexion->query($sql);
                                if (mysqli_num_rows($query) > 0) {
                                    while ($datos = mysqli_fetch_row($query)) {
                                ?>
                                        <tr class='registro'>
                                            <td><?php echo $datos[0] ?></td>
                                            <td><?php echo $datos[1] . " " . $datos[2] . " " . $datos[3]?></td>
                                            <td><?php echo $datos[4] ?></td>
                                            <td><?php echo $datos[5] ?></td>
                                            <td><?php echo $datos[6] ?></td>
                                            <td><?php echo $datos[7] ?></td>
                                        </tr>
                                <?php
                                    }
                                }
                                $conexion->next_result();
                                ?>
                            </table>
                            


                          
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2023
        <a href="https://itsciudadserdan.edu.mx/">ITSCS</a>.</strong> Todos Los Derechos Reservados.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
                </div>
            </footer>

    
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        </di>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>