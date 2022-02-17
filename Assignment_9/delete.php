<?php 
    session_start();
	include "connection.php"; 
	
	 /*$id = $_GET['id'];*/

	  echo $query = "DELETE FROM user_db where User_ID = ".$_GET['id'];
	  if($con->query($query)){
	  	$_SESSION['message'] = "Record Deleted  Successfully";
	  	header("Location: user.php");
	  	exit();
	  }
	  else{
	  	$_SESSION['message'] = "Record Updatedation Failed!!!";
	  	header("Location: user.php");
	  	exit();
	  }



?>

			<!-- <br><br><button type="submit" name="back"><a href="user.php">Go back</a></button> -->