<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Validation.</title>
	<style>
		body{
			margin-top: 50px;
			text-align: center;
			/*color: white;*/
			background-image: url('https://img.wallpapersafari.com/desktop/1366/768/5/18/8eqCRr.png');
			 background-repeat: no-repeat;
			 background-size: cover; 
		}
		.sty{
			margin: 10px;
			padding: 10px;
		}
		
	</style>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<body>
	
		<h2>Validation Form</h2>
		<form id="fid" name="fid" method="post" action="db_file_handling.php">
			
			<div class="sty">
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="fname" placeholder="First Name " required="">
			</div>

			<div class="sty">
			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lname" placeholder=" Lastname" required="">
			</div>

			<div class="sty">
			<label for="mobile">Mobile No.:</label>
			<input type="Number" id="mobile" name="mobile" placeholder="10 digit Mobile Number " required="">
			</div>

			<div class="sty">
			<label for="email">Email ID:</label>
			<input type="Email" id="email" name="email" placeholder="Emial ID" required="">
			</div>

			<div class="sty">
			<label for="pass">Password:</label>
			<input type="Password" id="pass" name="pass" placeholder="Password" required="">
			</div>

			
			<div class="sty">
			<label for="pin">Pincode:</label>
			<input type="Number" id="pin" name="pin" placeholder=" Pincode" required="">
			</div>
			<div class="sty">
			<input type="submit" name="submit">
			</div>
			
		</form>
	
	<script>
		$(document).ready(function() {
      $("#fid").validate({
		rules: {
			email: {
				email: function(element){
					 return isNaN($("#email").val());
					}
			},
			mobile:{
		  		minlength:10,
		  		maxlength:10,
		  		},	
		  	pass:{
		  		minlength:8,
		  	},	
		  	pin:{
		  		minlength:6,
		  		maxlength:6,
		  	},			
			},

		messages: {
			email: {
				email: "Please enter a valid email address"
			},
			mobile: "Please enter a 10 digit Numbers."
			},

	});
});
	
</script>
</body>
</html>