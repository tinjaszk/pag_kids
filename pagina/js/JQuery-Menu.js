$(document).ready(function(){
	$("#Lista1").hide();
	$("#Lista2").hide();
	$("#Lista3").hide();

	$('#Op1').mouseover(function(){
		$(this).css("background-color","#76bbfc");
		$("#Lista1").show();
	}).mouseout(function(){
		$(this).css("background-color","#389af5");
		$("#Lista1").hide();
	});

	$('#Op2').mouseover(function(){
		$(this).css("background-color","#fff87e");
		//$("#Lista2").show();
	}).mouseout(function(){
		$(this).css("background-color","#fff200");
		//$("#Lista2").hide();
	});
	
	$('#op li').mouseover(function(){
		$(this).css("background-color","#fff87e");
		//$("#Lista2").show();
	}).mouseout(function(){
		$(this).css("background-color","#fff200");
		//$("#Lista2").hide();
	});

	$('#Op3').mouseover(function(){
		$(this).css("background-color","#FF4646");
		$("#Lista3").show();
	}).mouseout(function(){
		$(this).css("background-color","#ff0101");
		$("#Lista3").hide();
	});
	$('#2op li').mouseover(function(){
		$(this).css("background-color","#FF4646");
		$("#Lista3").show();
	}).mouseout(function(){
		$(this).css("background-color","#ff0101");
		$("#Lista3").hide();
	});

	$('#Op4').mouseover(function(){
		$(this).css("background-color","#34b960");
	}).mouseout(function(){
		$(this).css("background-color","#009933");
	});

	$('ul.SubMenu li').mouseover(function(){
		$(this).css("background-color","#3560a5");
	}).mouseout(function(){
		$(this).css("background-color","#4a8bf6");
	});
	
	/*$('#Lista2 li').mouseover(function(){
		$(this).css("background-color","#B51209");
	}).mouseout(function(){
		$(this).css("background-color","#FF0101");
	});
	
	$('#Lista3 li').mouseover(function(){
		$(this).css("background-color","#FFF220");
	}).mouseout(function(){
		$(this).css("background-color","#FFF210");
	});*/
	
});