<?php
require_once('config.php');

if(isset($_POST['login']))
{
	header("location:http://havi/showcreator.php");
}

//echo("Login Sucessfull");
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login| PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#82E0AA;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body >
<div class="topnav" style="color:#000000;">
  <a style="color:black" href="http://localhost/havi/showcreator.php">Back</a>
  
  
</div>
<div>
	<form  method="post">
		<div class="container">
			
			<div class="row">
			<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']="");?></span>
				<div class="col-sm-6">
					<h1>Login</h1>
					
					<hr class="mb-3">
					

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					
					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					
					
					<button type="submit" class="btn btn-lg btn-success btn-block"  id="login
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