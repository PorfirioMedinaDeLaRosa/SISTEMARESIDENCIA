<?php
//require('../rsesiones.php');
session_start();

if (!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"] == null) {
    print "<script>window.location='../index.php';</script>";
}
$idGT = $_SESSION["gestion_id"]



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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

            $sql = "SELECT  *  FROM  gestion
                WHERE  idGT ='$idGT'
                 ";
            $query = $db->execute($sql);




            // $count_results = mysqli_num_rows($query_searched);

            //Si ha resultados
            if (mysqli_num_rows($query)  > 0) {

                // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

                // echo '<ul>';
                // while($datos=$db->fetch_row($query))
                if ($datos = $db->fetch_row($query)) { ?>


            <?php  }
            } ?>
            <div class="full-box dashboard-sideBar-UserInfo">
                <div align="center"><img src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
                <figure class="full-box">

                    <figcaption class="text-center text-titles"><?php echo
                                                                $datos['NombreGT']; ?> <br><br> <?php echo
                                                    $datos['CargoGT']; ?></figcaption>
                </figure>

            </div>
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <?php
                include 'dashboar.php'
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

            </div>
            <?php



            //Si se ha pulsado el botón de buscar


            //Conectamos con la base de datos en la que vamos a buscar

            //   $db->query('set name utf8');

            $sql = "SELECT * FROM gestion where idGT='$idGT'";
            $query = $db->execute($sql);




            // $count_results = mysqli_num_rows($query_searched);

            //Si ha resultados
            if (mysqli_num_rows($query)  > 0) {

                // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

                // echo '<ul>';
                // while($datos=$db->fetch_row($query))
                if ($datos = $db->fetch_row($query)) { ?>



            <?php  }
            } ?>


            <div class="container-fluid">
                < class="row">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li> <a href="#list" data-toggle="tab">Revisión Carta Liberación </a></li>
                        </ul>
               <!-- Formulario -->
<form name="add_name" id="add_name" method="POST">
  <input id="Ncontrol" name="Ncontrol" type="hidden" value="<?php echo $_GET['no_control']; ?>">

  <div class="form-group label-floating">
    <label for="status">Estatus Documento</label>
    <select id="status" name="status" class="form-control">
      <option>Aceptado</option>
      <option>Rechazado</option>
    </select>
  </div>

  <div class="form-group label-floating">
    <label for="observaciones">Observaciones:</label>
    <input maxlength="1000" class="form-control" type="text" id="observaciones" name="observaciones">
  </div>

  <p class="text-center">
    <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
  </p>
</form>

<!-- ✅ Alerta de éxito -->
<div id="alerta-exito" class="alert alert-success text-center" style="display: none;">
  ✅ Documento actualizado correctamente.
</div>

<!-- ❌ Alerta de error -->
<div id="alerta-error" class="alert alert-danger text-center" style="display: none;">
  ❌ Error al actualizar el documento. Intenta nuevamente.
</div>

<!-- ✅ Script JavaScript con AJAX y alertas -->
<script>
function mostrarAlerta(tipo) {
  const alertaExito = document.getElementById("alerta-exito");
  const alertaError = document.getElementById("alerta-error");

  if (tipo === "exito") {
    alertaExito.style.display = "block";
    alertaError.style.display = "none";
    setTimeout(() => {
      alertaExito.style.display = "none";
    }, 3000);
  } else {
    alertaError.style.display = "block";
    alertaExito.style.display = "none";
    setTimeout(() => {
      alertaError.style.display = "none";
    }, 4000);
  }
}

document.getElementById("submit").addEventListener("click", function () {
  const no_control = document.getElementById("Ncontrol").value;
  const status = document.getElementById("status").value;
  const observaciones = document.getElementById("observaciones").value;

  const formData = new FormData();
  formData.append("no_control", no_control);
  formData.append("status", status);
  formData.append("modificaciones", observaciones);

  fetch("../Actualizacion2/actualizaralumnosdocumentos.php", {
    method: "POST",
    body: formData
  })
  .then(response => {
    if (response.redirected || response.ok) {
      mostrarAlerta("exito");
    } else {
      throw new Error("Error en la respuesta del servidor");
    }
  })
  .catch(error => {
    console.error("Error en AJAX:", error);
    mostrarAlerta("error");
  });
});
</script>

          




    </section>


    <!-- Notifications area -->







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


</body>

</html>