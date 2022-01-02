<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGNUP </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script type="text/javascript">
		function validate()  {
		if( document.myForm.email.value == "" )
		{  	
			alert( "Please provide your Email!" );
		        document.myForm.email.focus() ;  
			return false;   
		}
		if( document.myForm.Name.value == "" )
		{  	
			alert( "Please provide your name!" );
		        document.myForm.Name.focus() ;  
			return false;   
		}
		if( document.myForm.Country.value == "" )
		{  	
			alert( "Please provide your Country!" );
		        document.myForm.Country.focus() ;  
			return false;   
		}	
		if( document.myForm.Gender.value == "" )
		{  	
			alert( "Please provide your Gender!" );
		        document.myForm.Gender.focus() ;  
			return false;   
		}
		if( document.myForm.Phoneno.value == "" && document.myForm.Phoneno.value.length>=10&&document.myForm.Phoneno.value.length<=12)
		{  	
			alert( "Please provide your valid Phone Number!" );
		        document.myForm.Phoneno.focus() ;  
			return false;   
		}
		if( document.myForm.password.value == "")
		{  	
			alert( "Please provide your password!" );
		        document.myForm.password.focus() ;  
			return false;   
		}	
			return true;
		}
	</script> 

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="valueinsert.php" onsubmit=return(validate());>
					<span class="login100-form-title p-b-26">
						Welcome To MUUSIC
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Your Name">
						<input class="input100" type="text" name="Name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter your Country">
						<input class="input100" type="text" name="Country">
						<span class="focus-input100" data-placeholder="Country"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Your Gender">
						<input class="input100" type="text" name="Gender">
						<span class="focus-input100" data-placeholder="Gender"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Your Phoneno">
						<input class="input100" type="text" name="Phoneno">
						<span class="focus-input100" data-placeholder="Phoneno"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Your Profile URL">
						<input class="input100" type="text" name="profileurl">
						<span class="focus-input100" data-placeholder="Provide your Profile Pic URL"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Signup
							</button>
						</div>
					</div>

					
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>