function inversion(){
	var inversionInicial = $(".inversion-inicial").val();
	var riesgo = $(".riesgo").val();

	$.ajax({
		"url":"ajaxInversion.php",
		"data":{riesgo:riesgo,inversionInicial:inversionInicial},
		"dataType":"json",
		"type":"get",
		success:function(data){
			
		}
	});
}