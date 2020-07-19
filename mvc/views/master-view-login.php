<?php
	if(isset($_POST["login_btn"])){
		if(empty($_POST["username"]) || empty($_POST["pass"])){
			header("location: http://localhost/Nhom420/Login/error");

		}
		else{
			$user = $_POST["username"];
			$pass = $_POST["pass"];

			$con = mysqli_connect("localhost", "root", "", "quanligiaydep") or die("Connect failed!");
			$qry = "Select * from customer_account where tentk = '$user' and pass = '$pass'";
			$result = mysqli_query($con, $qry);
			if(mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION["user"] = $user;
				header("location: http://localhost/Nhom420");
			}
			else {
				header("location: http://localhost/Nhom420/Login/Wrongpassword");
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <base href="http://localhost/Nhom420/public/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/favicon-login.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="resetpass.html" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>
					<p class="message">
						<?php
							if(isset($_GET["error"])){
								if($_GET["error"] == "wrong"){
									echo "wrong username/password";
								}
							}
						?>
					</p>
					<div class="flex-sb-m w-full p-b-48">
						<div class="container-login100-form-btn">
							<input type="submit" class="login100-form-btn" name="login_btn" value="Login">
						</div>
	
						<div>
							<span class="txt3">
								Not registered?
							</span>
							<a href="Nhom420/Register" class="txt3" style="color: greenyellow; font-weight: bold;">
								Create an account
							</a>
						</div>
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
	<script src="js/login.js"></script>

</body>
</html>