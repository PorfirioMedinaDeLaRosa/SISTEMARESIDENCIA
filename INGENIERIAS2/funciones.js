function actualizaDatos(){


	id=$('#idperiodo').val();
	nombre=$('#periodo').val();
	apellido=$('#status').val();
	

	cadena= "id=" + id +
			"&periodo=" + nombre + 
			"&status=" + apellido +
			

	$.ajax({
		type:"POST",
		url:"../actualizarperiodo.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#list').load('listperiodo.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function buscar(){

    var pattern = document.getElementById('buscar').value;

    var solicitud = new XMLHttpRequest();

    var data  = new FormData();

    var url = 'buscar.php';

 

    data.append("pattern", pattern);

    solicitud.open('POST',url, true);

    solicitud.send(data);

 

    solicitud.addEventListener('load', function(e){

 

        var cajadatos = document.getElementById('datos');

        cajadatos.innerHTML = e.target.responseText;

         

    }, false);

}

 

window.addEventListener('load', function(){

    document.getElementById('buscar').addEventListener('input', buscar, false);

}, false);
