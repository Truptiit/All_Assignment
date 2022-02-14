<br>
<?php 
	include "connection.php"; 

		 $User_ID = $_POST['User_ID'];
	  	 $User_Name = $_POST['User_Name'];
	  	 $User_Email = $_POST['User_Email'];

	  	 $query = "UPDATE user_db set User_ID = '".$User_ID."', User_Name = '".$User_Name."', User_Email = '".$User_Email."' WHERE User_ID = ".$User_ID;
	  	 if ($con->query($query)) {
	  	 	echo "record updated";
	  	 }
	  	 else{
	  	 	echo "record updatedation fail!!";
	  	 } 

?>
<br><br><button type="submit" name="back"><a href="User.php">Go back</a></button>
