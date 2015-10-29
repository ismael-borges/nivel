/*$("#esconder").click(function(){
	$("div").slideUp();
});
	$("#mostrar").click(function(){
			$("div").slideDown();
	});*/
	
/*$("body").on("click", function(){
	alert('click');
});

$("body").on("click mouseenter mouseleave", function(){
	alert('click mouseenter mouseleave');
});

$("body").click(function(event){
	$("div").html("click: (" + event.pageX + "," + event.pageY + ")");
});*/

/*$("body").on("click mouseenter mouseleave", function(event){
	$("div").html("click: (" + event.pageX + "," + event.pageY + ")");
});*/

$("#pessoaFisica").click(function(){
	$("#formPessoa").fadeToggle();
});

$("#pessoaJuridica").click(function(){
	$("#formPessoa").fadeToggle();
});

$("#fadeToggle").click(function(){
	$("#test").fadeToggle();
});

$("#slideToggle").click(function(){
	$("#test").slideToggle();
});

$("#animate1").click(function(){
	$("#test").animate({"border-width":"5px","margin-top":"100px"});
});

$("#animate2").click(function(){
	$("#test").animate({"border-width":"1px","margin-top":"0"});
});