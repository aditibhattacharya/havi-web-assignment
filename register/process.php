<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= sha1($_POST['password']);
	$dob 		= $_POST['dob'];
	$address 		= $_POST['address'];

		$sql = "INSERT INTO register (firstname, lastname, email, phonenumber, password, dob, address ) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password, $dob, $address]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}