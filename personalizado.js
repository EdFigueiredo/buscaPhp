$(function(){
	//pesquisar 
	$("#busca").keyup(function(){
		var busca = $(this).val();
		if(busca != ""){
			var dados = {
				palavra : busca
			}	
		$.post('busca.php', dados, function(retorna){
			
			$(".resultado").html(retorna);
		});
		}else{
			$(".resultado").html('');
		}
	});
});