<?php 
	include "connection.php"; 
	 
	 $id = $_GET['id'];

	  $query = "DELETE FROM user_db where User_ID = ".$id;
	  if($con->query($query)){
	  	echo "Record Deleted";
	  }
	  else{
	  	echo "Faild!!!";
	  }



?>

			<br><br><button type="submit" name="back"><a href="user.php">Go back</a></button>