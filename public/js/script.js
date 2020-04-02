$("#btnPreguntar").click(function(){
	let pregunta = $("#question").val();
	let textoSnackBar = "";
	if(pregunta.trim() == ''){
		console.error("Por favor ingresa una pregunta en la caja de texto");
		alert('Por favor ingresa una pregunta');
	}
	else{
		$.get('test/'+pregunta, function(data){
			console.log(data);
			textoSnackBar = `${data}`;
			mdtoast(textoSnackBar, {
				type: 'info',
				interaction: true,
				actionText: 'Cerrar',
				action: function(){
				this.hide();
				}
			});
		});
	}


	

});
