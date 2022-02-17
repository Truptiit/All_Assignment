<?php 
    session_start();
	include "connection.php"; 

		 $User_ID = $_POST['User_ID'];
	  	 $User_Name = $_POST['user_name'];
	  	 $User_Email = $_POST['user_email'];
	  	 $User_Password = $_POST['user_password'];

	  	 $query = "UPDATE user_db set  User_Name = '".$User_Name."', User_Email = '".$User_Email."', User_Password = '".$User_Password."' WHERE User_ID = ".$User_ID;
	  	 if ($con->query($query)) {
	  	 	$_SESSION['message'] = "Record Updated  Successfully";
	  	 	header("Location: user.php");
	  	 	exit();

	  	 }
	  	 else{
	  	 	$_SESSION['message'] = "Record Updatedation Failed!!!";
	  	 	header("Location: user.php");
	  	 	exit();
	  	 	
	  	 } 

?>
<!-- <br><br><button type="submit" name="back"><a href="user.php">Go back</a></button>
 -->