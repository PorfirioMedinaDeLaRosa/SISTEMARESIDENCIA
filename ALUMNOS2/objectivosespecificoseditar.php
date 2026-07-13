<?php
//require('../rsesiones.php');
session_start();

if (!isset($_SESSION["no_control"]) || $_SESSION["no_control"] == null) {
  print "<script>window.location='../index.php';</script>";
}
$idGT = $_SESSION["no_control"]

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/main.css">
</head>

<body>
  <!-- SideBar -->
  <section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
      <!--SideBar Title -->
      <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
        ITSCS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
      </div>
      <!-- SideBar User info -->
      <?php



      //Si se ha pulsado el botón de buscar


      //Conectamos con la base de datos en la que vamos a buscar
      include '../config.inc.php';
      $db = new Conect_MySql();
      //   $db->query('set name utf8');

      $sqll = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
                 ";
      $queryy = $db->execute($sqll);




      // $count_results = mysqli_num_rows($query_searched);

      //Si ha resultados
      if (mysqli_num_rows($queryy)  > 0) {

        // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

        // echo '<ul>';
        // while($datos=$db->fetch_row($query))
        if ($datoss = $db->fetch_row($queryy)) { ?>


      <?php  }
      } ?>
      <div class="full-box dashboard-sideBar-UserInfo">
        <div align="center"><img src="imagenperfil/<?php echo $datoss['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
        <figure class="full-box">
          <!--   <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
          <figcaption class="text-center text-titles"><?php echo
                                                      $datoss['nombre'] . " " . $datoss['ap'] . " " . $datoss['am']; ?> <br><br> <?php echo
                                                                              $datoss['carrera']; ?></figcaption>
        </figure>

      </div>
      <!-- SideBar Menu -->
      <ul class="list-unstyled full-box dashboard-sideBar-Menu">
        <?php
        include 'menu.php';

        ?>






      </ul>
    </div>
  </section>
  <!-- Content page-->
  <section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    <nav class="full-box dashboard-Navbar">
      <?php
      include 'navram.php';

      ?>
    </nav>
    <!-- Content page -->
    <div class="container-fluid">
      <div class="page-header">

        <style>
  .btn-gradient {
    background: linear-gradient(45deg, #007bff, #00c6ff);
    border: none;
    color: #fff !important;
    border-radius: 50px;
    padding: 8px 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
  }
  .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 10px rgba(0,0,0,0.15);
  }
</style>

<a data-toggle="modal" href="#Dialog-Actualizar" class="btn btn-gradient btn-sm">
  <i class="glyphicon glyphicon-plus"></i> Registrar Objetivo
</a>


      </div>

      <p class="text-center">


      </p>

    </div>
    </div>
    <div class="container-fluid">
      <div class="page-header">
               <div class="table-responsive">
         <style>
  #tabla {
    border-radius: 8px;
    overflow: hidden;
  }
  #tabla thead {
    background-color: #343a40;
    color: #fff;
  }
  #tabla tbody tr:hover {
    background-color: #f1f1f1;
  }
  #tabla td, #tabla th {
    vertical-align: middle;
  }
</style>

<table class="table table-bordered table-hover table-sm text-center" id="tabla">
  <thead>
    <tr>
      <th>Objetivo</th>
      <th>Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM objectivose, asignacionempresa
            WHERE objectivose.no_control = asignacionempresa.no_controle 
              AND asignacionempresa.no_control ='$idGT'";
    $query = $db->execute($sql);
    while($datos = $db->fetch_row($query)) {
    ?>
    <tr>
      <td><?php echo htmlspecialchars($datos['nombre']); ?></td>
      <td>
        <a data-toggle="modal" data-target="#Dialog-Modificaciones"
   data-idobjectivos="<?php echo $datos['idobjectivos']; ?>"
   data-no_control="<?php echo $datos['no_control']; ?>"
   data-numero="<?php echo $datos['numeroo']; ?>"
   data-objectivo="<?php echo htmlspecialchars($datos['nombre']); ?>"
   class="btn btn-primary btn-raised btn-xs">
   <span class="glyphicon glyphicon-pencil"></span> Actualizar
</a>

        <a class="btn btn-danger btn-raised btn-xs"
           href="../Eliminacion2/eliminaobjectivos.php?id=<?php echo $datos['idobjectivos']; ?>">
           <span class="glyphicon glyphicon-trash"></span> Eliminar
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


        </div>
      </div>




      <?php



      //Si se ha pulsado el botón de buscar


      //Conectamos con la base de datos en la que vamos a buscar


      //   $db->query('set name utf8');

      $sql = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$idGT' 
                 ";
      $query = $db->execute($sql);




      // $count_results = mysqli_num_rows($query_searched);

      //Si ha resultados
      if (mysqli_num_rows($query)  > 0) {

        // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

        // echo '<ul>';
        // while($datos=$db->fetch_row($query))
        if ($datos2 = $db->fetch_row($query)) { ?>



      <?php  }
      } ?>

      <div style="width: 700px; margin: auto; border: 0px solid blue; padding: 50px;">

        <?php if (!empty(trim($datos2['objectivos']))) : ?>
          <style type="text/css">
            textarea {
              width: 100%;
              height: 150px;
              padding: 12px 20px;
              box-sizing: border-box;
              border: 2px solid #ccc;
              border-radius: 4px;
              background-color: #f8f8f8;
              resize: none;
            }
          </style>

          <label>Observación Objetivos</label>
          <textarea disabled id="objectivos" name="objectivos"><?php echo htmlspecialchars($datos2['objectivos']); ?></textarea>
        <?php endif; ?>

      </div>


  </section>



  <?php



  //Si se ha pulsado el botón de buscar


  //Conectamos con la base de datos en la que vamos a buscar

  //   $db->query('set name utf8');

  $sqll = "SELECT * FROM asignacionobjectivos  where  no_control = '$idGT'  
                 ";
  $queryy = $db->execute($sqll);




  // $count_results = mysqli_num_rows($query_searched);

  //Si ha resultados
  if (mysqli_num_rows($queryy)  > 0) {

    // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

    // echo '<ul>';
    // while($datos=$db->fetch_row($query))
    if ($datoss = $db->fetch_row($queryy)) { ?>



  <?php  }
  } ?>

  <!-- Modal TECNM personalizado -->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- ENCABEZADO AZUL -->
      <div class="modal-header" style="background-color: #003366; color: white;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          style="color: white; opacity: 1;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Registrar Objetivos Específicos</h4>
      </div>

      <!-- CUERPO -->
      <div class="modal-body">
        <form action="../Registro2/objectivose.php" method="POST" id="formObjetivo">
          <!-- Campo oculto -->
          <input id="no_controlo" name="no_controlo" type="hidden"
            value="<?php echo $datoss['no_controlo']; ?>">

          <!-- Campo de texto -->
          <div class="form-group">
            <label for="objectivos">Objetivo Específico:</label>
            <textarea class="form-control" id="objectivos" name="objectivos" rows="4"
              placeholder="Describe el objetivo específico"></textarea>
          </div>

          <!-- Botón de registrar dentro del form -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-raised btn-sm"
              style="background-color: #0055a5; border: none;">
              <i class="glyphicon glyphicon-floppy-disk"></i> Registrar Objetivo
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


 <!-- Modal Actualizar TECNM-style -->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Modificaciones">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <!-- ENCABEZADO AZUL -->
      <div class="modal-header" style="background-color: #003366; color: white;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
          style="color: white; opacity: 1;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Actualizar Objetivo Específico</h4>
      </div>

      <!-- CUERPO -->
      <div class="modal-body">
        <form action="../Actualizacion2/actualizarobjectivos.php" method="POST" id="formActualizar">

          <!-- Campo oculto -->
          <input id="idobjectivos" name="idobjectivos" type="hidden">

          <!-- Campo de texto -->
          <div class="form-group">
            <label for="objectivo">Objetivo Específico:</label>
            <textarea class="form-control" id="objectivo" name="objectivo" rows="4"
              placeholder="Edita el objetivo específico"></textarea>
          </div>

          <!-- Botón de actualizar dentro del form -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-raised btn-sm"
              style="background-color: #0055a5; border: none;">
              <i class="glyphicon glyphicon-floppy-disk"></i> Modificar Objetivo
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script type="text/javascript" src="datatable.js"></script>


  <!--====== Scripts -->
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/sweetalert2.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/material.min.js"></script>
  <script src="../js/ripples.min.js"></script>
  <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../js/main.js"></script>

  <script>
    $.material.init();
  </script>

  <script>
    $('#Dialog-Actualizar').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      var recipient1 = button.data('numero')
      var recipient2 = button.data('objectivos')






      var modal = $(this)

      modal.find('.modal-body #no_control').val(recipient0)
      modal.find('.modal-body #numero').val(recipient1)
      modal.find('.modal-body #objectivos').val(recipient2)




    });
  </script>

  <script>
    $('#Dialog-Modificaciones').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idobjectivos')


      var recipient1 = button.data('no_control')

      var recipient2 = button.data('numero')
      var recipient3 = button.data('objectivo')






      var modal = $(this)
      modal.find('.modal-body #idobjectivos').val(recipient0)
      modal.find('.modal-body #no_control').val(recipient1)

      modal.find('.modal-body #numero').val(recipient2)
      modal.find('.modal-body #objectivo').val(recipient3)



    });
  </script>

  <script type="text/javascript">

  </script>


</body>

</html>