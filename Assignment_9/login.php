<?php
include "connection.php";
    session_start();
?>
<!-- <?php include "connection.php"; ?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- validation & jquery scripy -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<style>
   	body {
  				background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1G5nMDSg6MLYj55AFZPe5S08EaWc3s1ltjg&usqp=CAU');
  				background-repeat: no-repeat;
  				background-size: cover;
  				min-height: 100vh;
  				width: auto;
  				text-align: center;
			}
		h2 {
             font-size: 3.5em;
             color: #fff;
			}
		p{
			font-size: 1.5em;
             color: #fff;			
		}
		a{
			/*padding-right: 18%;*/
			color: #87ceeb;
		}
		button {
			color: rgba(255, 255, 255, 1);
			width: 6em;
			font-family: $font;
            font-weight: 100;
            font-size: 1.75em;
            border: 1px solid rgba(255, 255, 255, .75);
            background: transparent;
			transition: all 200ms ease-in;
			border-radius: .65em;
			}
			button:hover{
				background-color: #008200;
			}

input{
  font-size: 1.75em;
  padding: .55em;
  width: 40%;
  margin-bottom: 1em;
  border: none;
}
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>User Login</h2>
			     <form id="form" name="form" method="POST" action="">
			     	<input type="email" name="User_Email" placeholder="Email"><br><br>
			     	<input type="password" name="User_Password" placeholder="Password"><br><br>
			     	
			     		<button type="submit" name="submit" id="submit"><a href="Home.php">Login</a></button>
			     		
			     	
			     </form>
			     <p><b>Forgot Password?</b>
			     <a href="#">Click here</a></p>
			</div>
			
		</div>
		
	</div>


<script>
		$(document).ready(function() {
      $("#form").validate({
		rules: {
			email: {
				email: function(element){
					 return isNaN($("#email").val());
					 required: true;
					}
			},
		  	password:{
		  		minlength:8,

		  	},
		  },

		messages: {
				email: {
				email: "Invalid credentials"
			},
			mobile: "Invalid credentials"
			},

	});
});
	</script>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
	$User_Email = $_POST["User_Email"];
	$User_Password = $_POST["User_Password"];

	$_SESSION['status'] = false;

	//check valid input from user

	if($User_Email == "trupti123@gmail.com" && $User_Password == "Trupti12"){
		$_SESSION["User_Email"] = $User_Email;
		$_SESSION['status'] = true;
		header("Location: Home.php");
	}
	else{
		echo "<font color=red>Invalid Credentials";
	}
}

?>