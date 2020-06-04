function busqueda(){
	var texto =document.getElementById("txtnom").value;
	var parametros = {
		"texto" : texto
	};

	$.ajax({
		data: parametros,
		url: "Ajax/valida_pg.php",
		type: "POST",
		success:function(respose){
			$("#datos").html(respose);
		}
	});
}