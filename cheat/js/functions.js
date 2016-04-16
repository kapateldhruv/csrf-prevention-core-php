// JavaScript Document

$("document").ready(function() {
    $("#cheat_frm_link").click(function(){  
		/*$("#cheat_frm").submit(function(){
				
			});*/
			
		$.ajax({
			   type: "POST",
			   url: "http://localhost/csrf_demo/transfer.php",
			   data: $("#cheat_frm").serialize(), // serializes the form's elements.
			   success: function(data)
			   {
				  //window.location.href = "http://www.amazon.in"; 
				  
				  window.location.href= "test.php";
			   }
	 	});
	});
	
	$("#secure_cheat_frm_link").click(function(){  
		/*$("#cheat_frm").submit(function(){
				
			});*/
			
		$.ajax({
			   type: "POST",
			   url: "http://localhost/csrf_demo/secure-transfer.php",
			   data: $("#cheat_frm").serialize(), // serializes the form's elements.
			   success: function(data)
			   {
				  //window.location.href = "http://www.amazon.in";
				  window.location.href= "test.php";
			   }
	 	});
	});
	
});