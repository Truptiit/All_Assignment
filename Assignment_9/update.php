<?php 
	include "connection.php"; 
	include "side_bar.php";
	
	$query = "SELECT * FROM user_db where User_ID= ".$_GET['id'];
	$result = $con->query($query);
	if($result->num_rows > 0){
	  while ($data = $result->fetch_assoc()) {
	  	 $User_ID = $data['User_ID'];
	  	 $User_Name = $data['User_Name'];
	  	 $User_Email = $data['User_Email'];
	  	 $User_Password = $data['User_Password'];
		}
	}

		


?>

<div class="well">
  <form id="form" name="form" method="post" action="db_Update_user.php">
			<div>
				<input type="hidden" name="User_ID" id="User_ID" value="<?php echo $_GET['id']?>">
			</div>
						
			<div>
			<label for="user_name">User_Name</label>
			<input type="text" id="user_name" name="user_name" value="<?php echo $User_Name ?>">
			</div>
			<br>

			<div>
			<label for="user_email">User_Email</label>
			<input type="email" id="user_email" name="user_email" value="<?php echo $User_Email ?>">
			</div>
			<br>

			<div>
			<label for="user_password">User_Password</label>
			<input type="text" id="user_password" name="user_password" value="<?php echo $User_Password ?>">
			</div>
			<br>

          <!-- Details form other table -->
          <!-- <?php

          $query1 = "SELECT * FROM user_details WHERE user_detail_id= ".$_GET['id'];
	$result1 = $con->query($query1);
	if($result1->num_rows > 0){
	  while ($data1 = $result1->fetch_assoc()) {
	  	 $User_City = $data1['user_city'];
	  	 $User_Name = $data1['User_Name'];
	  	 $User_Email = $data1['User_Email'];
	  	 $User_Password = $data1['User_Password'];
		}
	}
	?> -->
                      
          <!-- <div>
            <label>User City</label>
            <input type="text" name="User_City" placeholder="User City" value="<?php echo $user_city ?>">
          </div><br>
          
          <div>
            <label>User State </label>
            <input type="text" name="User_State" placeholder="User State">
          </div><br>

          <div>
            <label>User Address </label>
            <input type="text" name="User_Address" placeholder="User Address ">
          </div><br>

          <div>
            <label>User Pincode </label>
            <input type="text" name="user_pincode" id="user_pincode" placeholder="User Pincode ">
          </div><br> -->

          

			<div>
			<button type="submit" name="submit">Update</button>
			</div>
			
		</form>
		</div>


<script>
		$(document).ready(function() {
      $("#form").validate({
		rules: {
			user_email: {
				email: function(element){
					 return isNaN($("#user_email").val());
					}
			},

		  	user_password:{
		  		minlength:8,
		  	},
		  	user_name:{
		  		maxlength:3,
		  	}	
		  			
			},

		messages: {
			user_email: {
				email: "Please enter a valid email address"
			},
			user_name: "Please Enter atleast 3 character"
			user_password: "Please enter a 8 digit Numbers."

			},

	});
});
	
</script>