$(function(){
	$('#search_form').submit(function(e) {
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#resultados').html('<h2>Cargando</h2>');

		$.ajax({
			type: 'POST',
			url: '../VISTA/busquedaRecintos.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp !=""){
					$('#resultados').html(resp);
				}
			}
		})
	})
})