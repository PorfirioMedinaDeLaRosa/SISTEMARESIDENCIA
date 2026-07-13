<?php


if(!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["gestion_id"]



?>
 <li>
          <a href="homegestion.php">
            <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="#!" class="btn-sideBar-SubMenu">
            <i class="zmdi zmdi-case zmdi-hc-fw"></i> Administration <i class="zmdi zmdi-caret-down pull-right"></i>
          </a>
          <ul class="list-unstyled full-box">
            <li>
              <a href="perfilgestion.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Perfil</a>
            </li>
            <li>
              <a href="imagenperfil.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Imagen Perfil</a>
            </li>
           
          </ul>
        </li>
        
        <li>
          <a href="#!" class="btn-sideBar-SubMenu">
            <i class="zmdi zmdi-card zmdi-hc-fw"></i> Residentes <i class="zmdi zmdi-caret-down pull-right"></i>
          </a>
          <ul class="list-unstyled full-box">
            <li>
              <a href="buscaralumnos.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Residentes</a>
            </li>
            <li>
              <a href="buscaralumnosdocumentos.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>Documentos enviados</a>
            </li>

             <li>
              <a href="consultapm.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>Proyectos Modificados</a>
            </li>

             <li>
              <a href="consultapb.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>Proyectos Dados de Baja</a>
            </li>
            
          </ul>
        </li>
        <li>
          <a href="#!" class="btn-sideBar-SubMenu">
            <i class="zmdi zmdi-card zmdi-hc-fw"></i> Documentos <i class="zmdi zmdi-caret-down pull-right"></i>
          </a>
          <ul class="list-unstyled full-box">
            <li>
              <a href="buscardocumentos.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>Residentes</a>
            </li>
            
            
          </ul>
        </li>

        <li>
          <a href="basededatos.php" class="btn-sideBar-SubMenu">
            <i class="zmdi zmdi-card zmdi-hc-fw"></i>Base De Datos<i class="zmdi zmdi-caret-down pull-right"></i>
          </a>
          
        </li>