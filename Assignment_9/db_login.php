<?php
     session_start();
     echo $_SESSION['status'];
     include "connection.php";
     $useremail = $_POST['User_Email'];
     $password = $_POST['User_Password'];


if(isset($_POST["submit"])){
	$useremail = $_POST["User_Email"];
	$password = $_POST["User_Password"];
	
	$_SESSION['status'] = false;

	//check valid input from user
	$query = "SELECT * FROM user_db WHERE User_Email = '$useremail' && User_Password = '$password' ";
	$result =  mysqli_query($con,$query);
     $count = mysqli_num_rows($result); 


if ($count==1){
	$_SESSION['User_ID']=$User_ID;
}

if($count>0){
      $_SESSION["User_Email"]=$useremail;
      $_SESSION["User_Password"]=$password;

	
		$_SESSION["status"]=true;
		header("Location:home.php");
		/*exit();*/
	}
	else{
		echo "invalid credential";
	}


}

 

?>