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


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- validation & jquery scripy -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
		<!-- login css -->
	<link rel="stylesheet" type="text/css" href="login.css">

	


</head>
<body>
	

	<div class="container">
		<div class="row center">
			<div class="col-md-12 ">
				<!-- session message -->
<div class="container-fluid">
     <div class="row">
     <div class="col">
     <?php if(isset($_SESSION['message'])): ?>
     <div class="alert alert-success">
     <?php echo $_SESSION['message']; ?>
     </div>
	<?php endif; ?>
	<?php unset($_SESSION['message']); ?>
     </div>
     </div>
    </div>
				
				
			     <form id="form" name="form" method="POST" action="loginDB.php" autocomplete="off">
			     	<div>


			     		<h2>User Login</h2>
			     		<div class="form-group">
			     	    <label for="user_email">USER EMAIL</label><br>
			     	    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" style="color: black;" required><br>
			        </div>
			      </div>
     
			     	<div class="form-group">
			     	<label for="user_password">USER PASSWORD</label><br>
			     	<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password" required><br>
			     	</div>

			     	<!-- <div class="">
					  <php if(isset($_GET['error'])){ ?>
		 		    <p class="error"><php echo $_GET['error']; ?></p>
		 	      <php } ?> 
			      </div> -->
			     	
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
                    'user_email': {
                        required: true,
                        
                    },

                    'user_password': {
                        required: true,
                        maxlength: 8  //set lentgh , minlength -> only 8 digit  maxlength -> should be greater than 8
                        
                    },
                    
                },
                messages: {
                    user_email:{
                    required: "Please enter email",
                    
                    },
                    user_password:{
                    	required: "Please enter password",
                    	maxlength: "Enter 8 digit password"
                    }
                    
                },

	});
});
	
</script>

<!-- <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 5000);
    
 </script>
 -->
</body>
</html>