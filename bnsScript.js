function logOutButtonPressed(){
	bootbox.confirm("Are you sure you want to log out of your account?", function(result) {
		if(result){
			document.location.href="internal/destorySession.php";
		}
	});
}

function loginButtonPressed(){
	if($("#username").val()==="" || $("#password").val()===""){
	    bootbox.alert("Fields cannot be empty.", function() {		
		});
	}else{
		$("#loginSubmitButton").trigger('click');
	}

}

function registrationButtonPressed(){
	if($("#register_username").val()==="" || $("#register_password").val()==="" || $("#re_password").val()==="" || $("#register_email").val()===""){
	    bootbox.alert("Fields cannot be empty.", function() {		
		});
	}else if($("#register_password").val()!==$("#re_password").val()){
		bootbox.alert("Passwords do not match.", function() {
			document.getElementById('register_password').value="";
			document.getElementById('re_password').value="";
		});
	}else if(!validateEmail($("#register_email").val())){
		bootbox.alert("Please enter a valid email address.", function() {
			document.getElementById('register_email').value="";
		});
	}else{
		$("#registrationSubmitButton").trigger('click');
	}
}


function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( $email ) ) {
    return false;
  } else {
    return true;
  }
}