$(document).ready(function(){

	//Guard city to enter.
	$("#selectCity").click(function(){
		
		$.post("functions/guardCity.php", {codeCity: $(".entrada").val()}, function(result){
			if(result == 1)
				window.location.href = "home/";  //Redirect page.
			else
				alert("Falha ao acessar a cidade selecionada!");
		});		
	});
});