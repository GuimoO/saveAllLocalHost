$(document).ready(function(){
	// $('#btn').click(function(){

	// 	$("h1").text("Salut à tous les fdp!");

	// 	$("p").text("Comme Charly!");
	// })
	// var fdp = Number(prompt("Combien ?"));
	// alert(fdp + " est le chiffre que ta choisi");

	
	$('.btn').click(function(){

		var titre = $(this).prev().find('.trip');
		//console.log(titre);   = à un var dump en php!

		var toggle = $(this).prev().find('li:last-child');

		toggle.slideToggle(520);
		titre.css('color', 'red');
	});
	
});

