<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$enter 	= $_POST['enter'];
	

		$sql = "INSERT INTO creator(enter) VALUES(?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$enter]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
