<?php
session_start();
include "connection.php";    
?>
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
  				background-image: url('https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto/gigs/84366486/original/c490739223326be0ddccbf3bd1d7381ce7926fa5/do-stunning-background-videos-for-your-website.png');
  				background-repeat: no-repeat;
  				background-size: cover;
  				min-height: 100vh;
  				width: auto;
  				text-align: center;
  				color: #fff;
  				font-family: "Lucida Handwriting", cursive;
  				overflow-y: hidden;

			}
		h2 {
             font-size: 3.5em;
             color: #fff;
             font-family:  "Brush Script MT", cursive;
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
width: 8em;
font-family: $font;
font-weight: 100;
font-size: 1.75em;
border: 1px solid rgba(255, 255, 255, .75);
background: transparent;
transition: all 200ms ease-in;
border-radius: .65em;
font-family:  "Brush Script MT", cursive;
}
			button:hover{
				background-color: #99CCFF;
			}

input{
  font-size: 0.8em;
  padding: 1.5em;
  width: 20%;
  height: 40%;
  margin-bottom: 1em;
  border: groove #99CCFF;
  color: black;
}
.box{
  width: 320px;
  padding: 10px;
  padding-bottom: 5px;
  border: 5px solid gray;
  margin: 0;
  text-align: center;
}
.error{
	color: red;
	font-size: 20px;
}

/*form{
	width: 500px;
	border-radius: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
	text-align: center;
}*/
    </style>
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--  -->
				
				
			     <form id="form" name="form" method="POST" action="loginDB.php" autocomplete="off">
			     	<div>
			     		<h2>User Login</h2>
			     	<label for="user_email">USER EMAIL</label><br><br>
			     	<input type="email" id="user_email" name="user_email" placeholder="Email" style="color: black;" ><br>
<!-- 			     	<label for="User_Email" class="error" style="display:none;"></label><br/>
 -->			     	</div>
     
			     	<div>
			     	<label for="user_password">USER PASSWORD</label><br><br>
			     	<input type="password" id="user_password" name="user_password" placeholder="Password"><br>
<!-- 			     	<label for="User_Password" class="error" style="display:none;"></label><br/><br>
 -->			     	</div>
			     	<div class="well">
					  <?php if(isset($_GET['error'])){ ?>
		 		    <p class="error"><?php echo $_GET['error']; ?></p>
		 	      <?php } ?> 
			     
				</div>
			     	<div>
			     	<button type="submit" name="submit" id="submit">Login</a></button>
			      </div>
			     		
			     	
			     </form>
			     
			</div>
			
		</div>
		
	</div>

<script>
		$(document).ready(function() {
      $("#form").validate({
		rules: {
			user_email: {
				email: function(element){
					 return isNaN($("#User_Email").val());
					}
			},

		  	user_password:{
		  		minlength:8,
		  	},	
		  			
			},

		messages: {
			User_Email: {
				email: "Please enter a valid email address"
			},
			user_password: "Please enter a 8 digit Numbers."
			},

	});
});
	
</script>
</body>
</html>