function buttonAction() {
   document.getElementById("demo").innerHTML = "Clicked";
}
function textColorChange() {
  
   var x = document.getElementById("userColor").value;
   document.getElementById("p1").style.color = x;  
    
}

$(document).ready(function(){
	$("#Query").click(function() {	
	  $("#div2").css("background-color", $("#userColor2").val()); 
	});
	$("#b3").click(function(){	
	  $("#p3").fadeOut();
    }); 
});