<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'havi');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User page| PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #82E0AA;
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


<body>

<div class="topnav">
  <a style="color:black" href="showcreator.php">Home</a>
  <a style="color:black" href="entercreator.php">Add creator</a>
  <a style="color:black" href="admin.php">Admin</a>
  
</div>

<div >
<h1 style="text-align:center;">Welcome to creators page</h1>

</div>




<div>
	
	<form  method="post">
		<div class="container">
			
			<div class="row">
			<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']="");?></span>
				<div class="col-sm-6">
					<h1>Added Creator</h1>
					
					<hr class="mb-6">
					<table  cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" width="100%">
									<thead>
										<tr class="col-sm-6">
											<th>Creator</th>

									    </tr>
										
									</thead>
									<tbody>
									<?php 
                                 
	              $query=mysqli_query($con,"select enter from creator"); 

 while($r=mysqli_fetch_array($query))
{
?>	

<tr>
											
  <td><?php echo htmlentities($r['enter']);?></td>
											
											
											
										<?php  } ?>
										
								</table>
								
					
                    <hr class="mb-3">
					
					
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