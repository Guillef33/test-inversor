function inversion(){
	var inversionInicial = $(".inversion-inicial").val();
	var riesgo = $(".riesgo").val();

	$.ajax({
		"url":"ajaxInversion.php",
		"data":{riesgo:riesgo,inversionInicial:inversionInicial},
		"dataType":"json",
		/*Cuando ponemos dataType en ajax, y le enviamos desde el php un array multidimensional entiende que debe transformarlo en success en un objeto*/
		"type":"get",
		success:function(data){	
			$(".detalles-table tbody").empty();
			$(".detalles-table tbody").append(data.bajo);
			$(".detalles-table tbody").append(data.moderado);
			$(".detalles-table tbody").append(data.arriesgado);
			// Modo de llamar un indice interno de un objeto en javascript 
			//data.bajo
			// Modo de llamar un indice interno de un array multidimensional en PHP, equivalente al objeto de javascript 
			//$data["bajo"]
		}
	});
}