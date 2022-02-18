<?php
     session_start();
     /*echo $_SESSION['status'];*/
     include "connection.php";
     
     if(isset($_POST["submit"])){
	$useremail = $_POST["user_email"];
	$password = $_POST["user_password"];

	/*if (empty($useremail) && empty($password)) {
		$_SESSION['message'] = "Email and Password Required";
	  	 	header("Location: login.php");
	  	 	exit();
	
	}
	
	elseif (empty($useremail)) {
     	header("Location: login.php?error=Email is required");
     	exit();
     }
     
     elseif (empty($password)) {
     	header("Location: login.php?error=Password is required");
     	exit();
     }
     
     elseif ($User_Password == $password && $User_Email != $useremail) {
		$_SESSION['message'] = "Invalid User/ User is not Registered";
	  	 	header("Location: login.php");
	  	 	exit();
	}*/

	
	$_SESSION['status'] = false;

	//check valid input from user
	$query = "SELECT * FROM user_db WHERE User_Email = '$useremail' && User_Password = '$password' ";
	$result =  mysqli_query($con,$query);
     $count = mysqli_num_rows($result); 
      /*fetch id from table */
      $fetch = mysqli_fetch_assoc($result);
      $User_ID = $fetch['User_ID'];
	

if ($count==1){

	$_SESSION['User_ID']=$User_ID;
	/*$_SESSION["user_email"]=$useremail;
      $_SESSION["user_password"]=$password;*/
}

if($count>0){
      

	
		$_SESSION["status"]=true;
		header("Location:home.php");
		exit();
	}
	else{
		$_SESSION['message'] = "Invalid User or Invalid credentials";
	  	 header("Location: login.php");
	  	 exit();
		
	}


}
?>