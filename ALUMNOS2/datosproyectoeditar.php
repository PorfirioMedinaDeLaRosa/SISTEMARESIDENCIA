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
               <!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
               if ($datos = $db->fetch_row($query)) { ?>



            <?php  }
            } ?>





            <form name="add_name" id="add_name" method="POST">

               <input name="idproyecto" id="idproyecto" value="<?php echo $datos['idproyecto']; ?>" type="hidden">
               <input name="nocontrol" id="nocontrol" value="<?php echo $datos['no_controlp']; ?>" type="hidden">
               <div class="form-group label-floating">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Nombre Proyecto:</h4>
                     </FONT>
                  </label>
                  <textarea cols="70" rows="2" maxlength="450" class="form-control" type="text" id="nombrep" name="nombrep"> <?php echo $datos['nombrep']; ?></textarea>
               </div>


               <?php if (!empty($datos['statusn'])): ?>
                  <label>
                     <font color="black">Opciones:</font>
                  </label><br>
                  <input disabled type="radio" name="statusn" id="statusn1" value="si" <?php echo ($datos['statusn'] == "Rechazar") ? 'checked' : ''; ?>> Rechazado
                  <input disabled type="radio" name="statusn" id="statusn2" value="no" <?php echo ($datos['statusn'] == "Aceptar") ? 'checked' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <br />
               <br />
               <?php if (!empty($datos['observacionn'])): ?>
                  <label for="objectivos">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo htmlspecialchars($datos['observacionn']); ?></textarea>
               <?php endif; ?>

               <div class="form-group label-floating">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Opción elegida:</h4>
                     </FONT>
                  </label>

                  <select class="form-control" type="text" id="opcione" name="opcione">
                     <option><?php echo $datos['opcion']; ?></option>
                     <option>Propuesta Propia</option>
                     <option>Banco de Proyectos</option>
                     <option>Trabajador</option>
                     <option>Proyecto Integrador</option>
                     <option>Proy. Educ. Dual</option>
                     <option>ENEIT</option>
                     <option>Investigación</option>

                  </select>

               </div>
               <?php if (!empty($datos['statuso'])): ?>
                  <label for="">
                     <font color="black">Opciones:</font>
                  </label>
                  <input disabled type="radio" name="statuso" value="sii" <?php echo $datos['statuso'] == "Rechazar" ? 'checked="checked"' : ''; ?>> Rechazado
                  <input disabled type="radio" name="statuso" value="noo" <?php echo $datos['statuso'] == "Aceptar" ? 'checked="checked"' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <?php if (!empty($datos['observaciono'])): ?>
                  <label for="">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo trim($datos['observaciono']); ?></textarea>
               <?php endif; ?>

            

               <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Fecha Incio :<h4>
                     </FONT>
                  </label>

                  <select class="form-control" type="text" id="DiaInicio" name="DiaInicio">
                     <option><?php echo $datos['DiaInicio']; ?></option>
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                     <option>6</option>
                     <option>7</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                     <option>11</option>
                     <option>12</option>
                     <option>13</option>
                     <option>14</option>
                     <option>15</option>
                     <option>16</option>
                     <option>17</option>
                     <option>18</option>
                     <option>19</option>
                     <option>20</option>
                     <option>21</option>
                     <option>22</option>
                     <option>23</option>
                     <option>24</option>
                     <option>25</option>
                     <option>26</option>
                     <option>27</option>
                     <option>28</option>
                     <option>29</option>
                     <option>30</option>
                     <option>31</option>

                  </select>

               </div>


               <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Mes Inicio:</h4>
                     </FONT>
                  </label>
                  <select class="form-control" type="text" id="MesInicio" name="MesInicio">
                     <option><?php echo $datos['MesInicio']; ?></option>
                     <option>Enero</option>
                     <option>Febrero</option>
                     <option>Marzo</option>
                     <option>Abril</option>
                     <option>Mayo</option>
                     <option>Junio</option>
                     <option>Julio</option>
                     <option>Agosto</option>
                     <option>Septiembre</option>
                     <option>Octubre</option>
                     <option>Noviembre</option>
                     <option>Diciembre</option>
                  </select>
               </div>


               <div class="form-group label-floating">
                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Año Inicio:</h4>
                     </FONT>
                  </label>
                  <select class="form-control" type="text" id="AnoInicio" name="AnoInicio">
                     <option><?php echo $datos['AnoInicio']; ?></option>

                     <option>2026</option>
<option>2025</option>
                  </select>
               </div>

               <?php if (!empty($datos['statusp'])): ?>
                  <label for="">
                     <font color="black">Opciones:</font>
                  </label>
                  <input disabled type="radio" name="statusp" id="statusp1" value="si3" <?php echo $datos['statusp'] == "Rechazar" ? 'checked="checked"' : ''; ?>> Rechazado
                  <input disabled type="radio" name="statusp" id="statusp2" value="no3" <?php echo $datos['statusp'] == "Aceptar" ? 'checked="checked"' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <?php if (!empty($datos['observacionp'])): ?>
                  <label for="">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo trim($datos['observacionp']); ?></textarea>
                  <br>
               <?php endif; ?>






               <div class="form-group label-floating">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Día Termino:</h4>
                     </FONT>
                  </label>

                  <select class="form-control" type="text" id="DiaTermino" name="DiaTermino">
                     <option><?php echo $datos['DiaTermino']; ?></option>
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                     <option>6</option>
                     <option>7</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                     <option>11</option>
                     <option>12</option>
                     <option>13</option>
                     <option>14</option>
                     <option>15</option>
                     <option>16</option>
                     <option>17</option>
                     <option>18</option>
                     <option>19</option>
                     <option>20</option>
                     <option>21</option>
                     <option>22</option>
                     <option>23</option>
                     <option>24</option>
                     <option>25</option>
                     <option>26</option>
                     <option>27</option>
                     <option>28</option>
                     <option>29</option>
                     <option>30</option>
                     <option>31</option>

                  </select>

               </div>


               <div class="form-group label-floating">
                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Mes Termino:</h4>
                     </FONT>
                  </label>
                  <select class="form-control" type="text" id="MesTermino" name="MesTermino">
                     <option><?php echo $datos['MesTermino']; ?></option>
                     <option>Enero</option>
                     <option>Febrero</option>
                     <option>Marzo</option>
                     <option>Abril</option>
                     <option>Mayo</option>
                     <option>Junio</option>
                     <option>Julio</option>
                     <option>Agosto</option>
                     <option>Septiembre</option>
                     <option>Octubre</option>
                     <option>Noviembre</option>
                     <option>Diciembre</option>
                  </select>
               </div>


               <div class="form-group label-floating">
                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Año Termino:</h4>
                     </FONT>
                  </label>
                  <select class="form-control" type="text" id="AnoTermino" name="AnoTermino">
                     <option><?php echo $datos['AnoTermino']; ?></option>


                     <option>2026</option>
                     <option>2027</option>

                  </select>
               </div>

               <?php if (!empty($datos['fechaterminostatus'])): ?>
                  <label for="">
                     <font color="black">Opciones:</font>
                  </label>
                  <input disabled type="radio" name="fechaterminostatus" id="fechaterminostatus1" value="si3" <?php echo $datos['fechaterminostatus'] == "Rechazar" ? 'checked="checked"' : ''; ?>> Rechazado
                  <input disabled type="radio" name="fechaterminostatus" id="fechaterminostatus2" value="no3" <?php echo $datos['fechaterminostatus'] == "Aceptar" ? 'checked="checked"' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <?php if (!empty($datos['fechaterminoobservacion'])): ?>
                  <label for="">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo trim($datos['fechaterminoobservacion']); ?></textarea>
                  <br>
               <?php endif; ?>


               <div class="form-group label-floating">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Objetivo general:</h4>
                     </FONT>
                  </label>
                  <textarea cols="70" rows="7" maxlength="500" class="form-control" type="text" id="objectivog" name="objectivog"><?php echo $datos['objectivo']; ?></textarea>
               </div>

               <?php if (!empty($datos['statusob'])): ?>
                  <label for="">
                     <font color="black">Opciones:</font>
                  </label>
                  <input disabled type="radio" name="statusob" id="statusob1" value="si4" <?php echo $datos['statusob'] == "Rechazar" ? 'checked="checked"' : ''; ?>> Rechazado
                  <input disabled type="radio" name="statusob" id="statusob2" value="no4" <?php echo $datos['statusob'] == "Aceptar" ? 'checked="checked"' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <?php if (!empty($datos['observacionob'])): ?>
                  <label for="">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo trim($datos['observacionob']); ?></textarea>
                  <br>
               <?php endif; ?>



               <div class="form-group label-floating">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Justificación:</h4>
                     </FONT>
                  </label>
                  <textarea cols="70" rows="8" maxlength="4500" class="form-control" type="text" id="justificacionp" name="justificacionp"> <?php echo $datos['justificacion']; ?></textarea>
               </div>
               <?php if (!empty($datos['statusj'])): ?>
                  <label for="">
                     <font color="black">Opciones:</font>
                  </label>
                  <input disabled type="radio" name="statusj" id="statusj1" value="si5" <?php echo $datos['statusj'] == "Rechazar" ? 'checked="checked"' : ''; ?>> Rechazado
                  <input disabled type="radio" name="statusj" id="statusj2" value="no5" <?php echo $datos['statusj'] == "Aceptar" ? 'checked="checked"' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <?php if (!empty($datos['observacionoj'])): ?>
                  <label for="">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo trim($datos['observacionoj']); ?></textarea>
                  <br>
               <?php endif; ?>


               <div class="form-group label-floating">

                  <label for="nombre">
                     <FONT COLOR="black">
                        <h4>Problemas a resolver:</h4>
                     </FONT>
                  </label>
                  <textarea cols="70" rows="8" maxlength="3000" class="form-control" type="text-center" id="problemasp" name="problemasp"> <?php echo $datos['problematica']; ?></textarea>
               </div>
               <?php if (!empty($datos['statuspr'])): ?>
                  <label for="">
                     <font color="black">Opciones:</font>
                  </label>
                  <input disabled type="radio" name="statuspr" id="statuspr1" value="si6" <?php echo $datos['statuspr'] == "Rechazar" ? 'checked="checked"' : ''; ?>> Rechazado
                  <input disabled type="radio" name="statuspr" id="statuspr2" value="no6" <?php echo $datos['statuspr'] == "Aceptar" ? 'checked="checked"' : ''; ?>> Aceptado
                  <br><br>
               <?php endif; ?>

               <?php if (!empty($datos['observacionopr'])): ?>
                  <label for="">
                     <font color="black">Observación:</font>
                  </label><br>
                  <textarea maxlength="1000" id="objectivos" name="objectivos"><?php echo trim($datos['observacionopr']); ?></textarea>
                  <br>
               <?php endif; ?>



               <br>


               <p class="text-center">
                  <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
               </p>
               <br>
               <br>
               <p class="text-center">


               </p>


         </div>
      </div>
      </div>







      </form>
      <form action="actividadeseditar.php">
         <div style="text-align:center;">
            <input type="submit" name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Anterior paso" />
         </div>
      </form>
      <form action="documentos.php">
         <div style="text-align:center;">
            <input type="submit" name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Siguiente paso" />
         </div>
      </form>

      </div>

      </div>
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

   <script>
      function validar(frm) {
         if (!frm.statusn[0].checked && !frm.statusn[1].checked) {
            alert('Falta Selecionar un campo');
            return false;
         }
         if (!frm.statuso[0].checked && !frm.statuso[1].checked) {
            alert('Falta Selecionar un campo');
            return false;
         }
         if (!frm.statusp[0].checked && !frm.statusp[1].checked) {
            alert('Falta Selecionar un campo');
            return false;
         }
         if (!frm.statusob[0].checked && !frm.statusob[1].checked) {
            alert('Falta Selecionar un campo');
            return false;
         }
         if (!frm.statusj[0].checked && !frm.statusj[1].checked) {
            alert('Falta Selecionar un campo');
            return false;
         }
         if (!frm.statuspr[0].checked && !frm.statuspr[1].checked) {
            alert('Falta Selecionar un campo');
            return false;
         }
      }
   </script>


   <script type="text/javascript">
      $(document).ready(function() {


         $('#submit').click(function() {
            $.ajax({
               url: "../Actualizacion2/actualizarproyecto.php",
               method: "POST",
               data: $('#add_name').serialize(),
               success: function(data) {
                  alert(data);
                  $('#add_name')[0].load();
               }
            });
         });
      });
   </script>


</body>

</html>