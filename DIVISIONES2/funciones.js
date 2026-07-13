function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"../Eliminacion2/eliminaAAA.php",
			data:cadena,
			success:function(r){
				if(r==1){
					 $("#list").load('list.php');
					alertify.success("Eliminado con exito!");
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
