 <form  method="POST" name="add_name" id="add_name">
			     <input  id="idA" name="idA" type="hidden"  value="<?php echo $datos['idA']; ?>" ></input>   
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre:</label>
											  <input  onkeyup="validar()"  class="form-control" type="text" id="nombre" name="nombre"  value="<?php echo $datos['NCompletoA']; ?>" >
					</div>
					<div class="form-group label-floating">
											  <label for="cargo">Cargo:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="carrera" name="carrera" value="<?php echo $datos['CargoA']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="email">Email:</label>
											  <input onkeyup="validar()" class="form-control" id="email" name="email" type="Email" value="<?php echo $datos['EmailA']; ?>">
											     <span id="emailOK"></span>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Teléfono:</label>
											  <input onkeyup="validar()" class="form-control" type="text" id="telefono" name="telefono" value="<?php echo $datos['TelefonoA']; ?>">
											     <span id="telefonoOK"></span>
											</div>
											<div class="form-group label-floating">
											 <label for="usuario">Usuario:</label>
											  <input  onkeyup="validar()" class="form-control" type="text" id="usuario" name="usuario" value="<?php echo $datos['UsuarioA']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="password">Password:</label>
											  <input  onkeyup="validar()" class="form-control"  id="password" name="password" type="Password" value="<?php echo $datos['PasswordA']; ?>">
											</div>
			    </div>
		      	<p class="text-center">
									 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />

										    </p>
										  
									    
		    </div>
	  	</div>
	</div>
</form>

	<script> 
	document.getElementById('telefono').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('telefonoOK');
        
    emailRegex = /^\d{10}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
       document.getElementById("submit").disabled = false;
    } else {
      valido.innerText = "incorrecto";
        document.getElementById("submit").disabled = true;
    }
});
	
	document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
       document.getElementById("submit").disabled = false;
    } else {
      valido.innerText = "incorrecto";
        document.getElementById("submit").disabled = true;
    }
});
	function validar(){
  var validado = true;
  elementos = document.getElementsByClassName("form-control");
  for(i=0;i<elementos.length;i++){
    if(elementos[i].value == "" || elementos[i].value == null){
    validado = false
    }
  }
  if(validado){
  document.getElementById("submit").disabled = false;
  
  }else{
     document.getElementById("submit").disabled = true;
  //Salta un alert cada vez que escribes y hay un campo vacio
  //alert("Hay campos vacios")   
  }
} 
 $(document).ready(function(){  
     
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizar.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                	
.
                     alert(data);  
                     $('#add_name')[0].load();  
                }  
           });  
      });  
 });  
 </script>