<?php 
session_start();
	include "connection.php"; 
	

/********************user_db********************/

		  $User_Name = $_POST['user_name'];
		  $User_Email = $_POST['user_email'];
		  $User_Password = $_POST['user_password'];

	  	  $query = "INSERT INTO user_db(User_Name,User_Email,User_Password)values('$User_Name','$User_Email','$User_Password')";

/****************************************************************/	  	 

/*user_details*/
	  	  
		  $User_City = empty($_POST['User_City']) ? "null" : $_POST['User_City'];
		  $User_State = empty($_POST['User_State']) ? "null" : $_POST['User_State'];
		  $User_Address = empty($_POST['User_Address']) ? "null" : $_POST['User_Address'];
		  $User_Pincode = empty($_POST['user_pincode']) ? "null" : $_POST['user_pincode'];

		   
	  	  $query1 = "INSERT INTO user_details(user_city,user_state,user_address,user_pincode)values('$User_City','$User_State','$User_Address',$User_Pincode)";

/*check both query and redirect to user page*/

	  	 if ($con->query($query) && $con->query($query1)) {
	  	 	$_SESSION['message'] = "Record Inserted  Successfully";
	  	 	header("Location:user.php");
	  	 	exit();
	  	 }
	  	 else{
	  	 	$_SESSION['message'] = "Record NOT Inserted!!!";
	  	 	header("Location:user.php");
	  	 	exit();
	  	 } 

?>
<!-- <br><br><button type="submit" name="back"><a href="User.php">Go back</a></button> -->