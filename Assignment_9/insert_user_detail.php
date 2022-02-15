<?php 
	include "connection.php"; 
	include "side_bar.php";

		  $User_ID = $_POST['User_ID'];
		  $User_City = empty($_POST['User_City']) ? "null" : $_POST['User_City'];
		  $User_State = empty($_POST['User_State']) ? "null" : $_POST['User_State'];
		  $User_Address = empty($_POST['User_Address']) ? "null" : $_POST['User_Address'];
		  $User_Pincode = empty($_POST['User_Pincode']) ? "null" : $_POST['User_Pincode'];

		   
	  	 $query = "INSERT INTO user_details(user_id ,user_city,user_state,user_address,user_pincode)values('$User_ID','$User_City','$User_State','$User_Address','$User_Pincode')";

	  	 if ($con->query($query)) {
	  	 	echo "record Added";
	  	 	
	  	 }
	  	 else{
	  	 	echo "Failed!!";
	  	 } 

?>
<br><br><button type="submit" name="back"><a href="account.php">Go back</a></button>