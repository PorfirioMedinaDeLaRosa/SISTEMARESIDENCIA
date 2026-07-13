<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="denker">

    <title> Resetear contraseña </title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

  </head>

  <body class="cover" >
    <div class="container" role="main">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <br><br><br>
        <form id="frmRestablecer" action="" method="post">
          <div class="panel panel-default">

            <div class="panel-heading"> Restaurar contraseña </div>
            <div class="panel-body">
              <p></p>
              <div class="form-group">
                <select name="tusuario" class="btn btn-primary"  class="form-control" id="tusuario">Tipo de usuario
                  <option>Administrador</option>
                  <option>Gestion Tecnológica </option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Recuperar contraseña" >
              </div>
               <a href="index.php">Inicio</a>
            </div>
          </div>

        </form>
        <div id="mensaje">
          
        </div>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#frmRestablecer").submit(function(event){
          event.preventDefault();
          $.ajax({
            url:'validaremail.php',
            type:'post',
            dataType:'json',
            data:$("#frmRestablecer").serializeArray()
          }).done(function(respuesta){
            $("#mensaje").html(respuesta.mensaje);
            $("#email").val('');
          });
        });
      });
    </script>

  </body>
</html>