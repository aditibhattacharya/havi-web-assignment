<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add creator page| PHP</title>
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
<body>
<div class="topnav" style="color:#000000;">
  <a style="color:black" href="showcreator.php">Home</a>
  <a style="color:black" href="entercreator.php">Add creator</a>
  <a  style="color:black" href="showcreator.php">Back</a>
  <a style="color:black" href="#admin">Admin</a>
  
</div>
<div>
	<?php
	
	?>	
</div>
<div>
	<form  method="post">
		<div class="container">
			
			<div class="row">
			<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']="");?></span>
				<div class="col-sm-6">
					<h1>Add Creator</h1>
					
					<hr class="mb-3">
					

					<label for="email"><b>Enter Name</b></label>
					<input class="form-control" id="enter"  type="text" name="enter" required>
					<hr class="mb-3">
					
					<input class="btn btn-primary" type="submit" id="add" name="create" value="Add">
				</div>
			</div>
		</div>
	</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){
		$('#add').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var enter 	= $('#enter').val();
			
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {enter: enter},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
</script>

</body>
</html>