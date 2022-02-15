<?php 
	include "connection.php"; 
	include "side_bar.php";

		
		 /*$_SESSION['User_Name'];
		 $_SESSION['User_Email'];
		 $_SESSION['User_Password'];
		 $_SESSION['Created_Date'];*/

		  $User_Name = $_POST['User_Name'];
		  $User_Email = $_POST['User_Email'];
		  $User_Password = $_POST['User_Password'];

	  	 $query = "INSERT INTO user_db(User_Name,User_Email,User_Password)values('$User_Name','$User_Email','$User_Password')";

	  	 if ($con->query($query)) {
	  	 	echo "record Added";
	  	 	header("Location:user.php");
	  	 }
	  	 else{
	  	 	echo "Failed!!";
	  	 } 

?>
<br><br><button type="submit" name="back"><a href="User.php">Go back</a></button>