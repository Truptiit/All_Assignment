<?php
     session_start();
     echo $_SESSION['status'];
     include "connection.php";

     if (isset($_POST['User_Email']) && isset($_POST['User_Password'])) {
     	function validate($data)
     	{
     		$data = trim($data);
     		$data = stripcslashes($data);
     		$data = htmlspecialchars($data);
     		return $data;
     	}
     }

     $useremail = $_POST['User_Email'];
     $password = $_POST['User_Password'];

     if (empty($useremail)) {
     	header("Location: login.php?error=required");
     	exit();
     }
     elseif (empty($password)) {
     	header("Location: login.php?error=Password is required");
     	exit();
     }

     $query = "SELECT * FROM user_db WHERE User_Email = '$useremail' && User_Password = '$password' ";
     $result =  mysqli_query($con,$query);
     $count = mysqli_num_rows($result);
     $row = mysqli_fetch_assoc($result);

     if($count==1){
	  if ($row['User_Email'] == $useremail && $row['User_Password'] == $password) {
	  	echo "LOGIN";
	  	$_SESSION["User_Email"]=$useremail;
          $_SESSION["User_Password"]=$password;
          header("Location:home.php");
          exit();
	  }
	   else{
	   	header("Location: login.php?error=Invalid email or password");
	   	exit();
	   }
	}
	else{
		header("Location: login.php");
		exit();
	}

 

?>