<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['login']))
{
	header("location:login/registration.php");
}
if(isset($_POST['register']))
{
	header("location:register/registration.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body  style="background-color:powderblue;">
<img src="img/plain.png" width="100%" height="300">

<div>
	
</div>

<div>
	<form  method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<h1>Registration</h1>		
					
					<hr class="mb-3">
					<button type="submit" class="btn btn-lg btn-success btn-block" 
					name="register">Register</button>
				</div>
				
				<div class="col-sm-6">
					<h1>Login</h1>
					<hr class="mb-3">
					<button type="submit" class="btn btn-lg btn-success btn-block" 
					name="login">Login</button>
				</div>
				
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">

</script>
</body>
</html>