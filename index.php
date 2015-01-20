<?php
	ob_start();//new
	session_start();
	include 'internal/myConnection.php';
	include 'internal/loginCheck.php';
?>

<!DOCTYPE html>

<html>

<head>
	<title>Buy_N_Sell</title>	
	<!-- API header files -->
	<script src="apiFiles/jquery-1.10.2.min.js"></script>
	<script src="apiFiles/bootstrap.js"></script>
	<link href="apiFiles/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="apiFiles/bootstrap-theme.css">
	<script type="text/javascript" src="apiFiles/bootbox.js"></script>
 	<script type="text/javascript" src="apiFiles/sorttable.js"></script>

	<!-- Personal header files -->
	<script src="bnsScript.js"></script>
	<link href="bnsStyle.css" rel="stylesheet">
</head>


<body>



	<div id="footerDiv">
		<hr>
    	Developped by team <span id="footerSpan"><b>HAUNTED</b></span>.
  	</div>


  	<!-- Modal divs -->
  	<!-- Login Modal -->
  	<div class="modal fade" id="loginForm">
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	  <div class="modal-dialog" id="signinDialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	          <h4 class="modal-title">LOGIN</h4>
	        </div>

	        <div class="modal-body">
	          <input class="form-control" required id="username" name="username" placeholder="Enter your username here." required type="text">
	          <input class="form-control" required id="password" name="password" placeholder="Enter your password here." required type="password">
	        </div>

	        <div class="modal-footer">
	          <a href="#" data-dismiss="modal" class="btn btn-default">Close</a>  
	          <input type="button" class="btn btn-primary" value="Log In" onclick="loginButtonPressed();">
	          <input type="submit" id="loginSubmitButton" name ="loginSubmitButton" style="display:none">     
	        </div>
	      </div>
	    </div>
	  </form> 
	</div>
	<!-- Registration Modal -->
	<div class="modal fade" id="registraionForm">
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	  <div class="modal-dialog" id="signinDialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	          <h4 class="modal-title">Registration</h4>
	        </div>

	        <div class="modal-body">
	          <input class="form-control" required id="register_username" name="register_username" placeholder="Enter your desired username." required type="text">
	          <input class="form-control" required id="register_email" name="register_email" placeholder="Enter your email address." required type="text">
	          <input class="form-control" required id="register_password" name="register_password" placeholder="Enter your password here." required type="password">
	          <input class="form-control" required id="re_password" name="re_password" placeholder="Enter your password again." required type="password">
	        </div>

	        <div class="modal-footer">
	          <a href="#" data-dismiss="modal" class="btn btn-default">Close</a>  
	          <input type="button" class="btn btn-primary" value="Create Account" onclick="registrationButtonPressed();">
	          <input type="submit" id="registrationSubmitButton" name ="registrationSubmitButton" style="display:none">     
	        </div>
	      </div>
	    </div>
	  </form> 
	</div>



</body>


</html>