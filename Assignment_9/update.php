<?php 
	include "connection.php"; 
	$query = "SELECT * FROM user_db where User_ID= ".$_GET['id'];
	$result = $con->query($query);
	if($result->num_rows > 0){
	  while ($data = $result->fetch_assoc()) {
	  	 $User_ID = $data['User_ID'];
	  	 $User_Name = $data['User_Name'];
	  	 $User_Email = $data['User_Email'];
		}
	}



?>

  <form id="form" name="form" method="post" action="db_Update_user.php">
			<div>
				<input type="hidden" name="User_ID" id="User_ID" value="<?php echo $_GET['id']?>">
			</div>
			<div>
			<label for="User_ID">User_ID</label>
			<input type="number" id="User_ID" name="User_ID" value="<?php echo $User_ID ?>">
			</div>
			<br>
			
			<div>
			<label for="User_Name">User_Name</label>
			<input type="text" id="User_Name" name="User_Name" value="<?php echo $User_Name ?>">
			</div>
			<br>

			<div>
			<label for="User_Email">User_Email</label>
			<input type="email" id="User_Email" name="User_Email" value="<?php echo $User_Email ?>">
			</div>
			<br>

			<div>
			<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>