$(document).ready(function(){
	 
			function func1(){
		$("#login_area").hide();	
		$("#signUp_area").hide();
	}

	function signUp(){
		$("#signUp_area").show();	
		$("#login_area").hide();
	}
	
	function login(){
		$("#login_area").show();
	$("#signUp_area").hide();
	}			

});

	

