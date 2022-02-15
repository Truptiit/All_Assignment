<?php

include "connection.php";
  include "side_bar.php";?>

<style>
	#table{
		font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;    
	}
	#table th{
           color: black;
           padding-top: 12px;
  	    padding-bottom: 12px;
           text-align: left;
           background-color: gray;
           text-align: center;
           border: 1px solid;
	}
	table, td, th {
  		border: 1px solid;
  		padding-top: 12px;
  	       padding-bottom: 12px;
  	       font-weight: bold;

}
#btn1{
       background-color: skyblue ;
       font-weight: bold;
       padding-right: 10px;
       padding-left: 10px;
}
#btn2{
       background-color: red ;
       font-weight: bold;
        padding-right: 10px;
       padding-left: 10px;
}
</style>

<!-- user_db TABLE -->
<h3>TABLE (user_db)</h3>
<div class="table-responsive">
	<table id="table" >
		<tr>
		<th>User ID</th>
		<th>User Name</th>
		<th>User Email</th>
		<th>Created Date</th>
		<th>Action</th>	
		</tr>
		<?php
			$query = "SELECT * FROM user_db";
			$result = $con->query($query);
			if($result->num_rows > 0){
				while ($data = $result->fetch_assoc()) {?>
					<tr>
						<td><?php echo $data['User_ID']; ?></td>
						<td><?php echo $data['User_Name']; ?></td>
						<td><?php echo $data['User_Email']; ?></td>						
						<td><?php echo $data['Created_Date']; ?></td>
						<td>
							<a href="update.php?id=<?php echo $data['User_ID']; ?>"><button type="button" id="btn1">Update</button></a>
							&nbsp&nbsp&nbsp
							<a href="delete.php?id=<?php echo $data['User_ID']; ?>"><button type="button" id="btn2">Delete</button></a>
						</td>
					</tr>
			<?php	}
			}

		?>
	
	</table>
</div>

<!-- user_details TABLE -->
<h3> TABLE (user_details)</h3>
<div class="table-responsive">
<table id="table">
		<tr>
		<th>User Detail ID</th>
		<th>User  ID</th>
		<th>User City</th>
		<th>User State</th>
		<th>User Address</th>
		<th>User Pincode</th>	
		</tr>
		<?php
			$query = "SELECT * FROM user_details";
			$result = $con->query($query);
			if($result->num_rows > 0){
				while ($data = $result->fetch_assoc()) {?>
					<tr>
						<td><?php echo $data['user_detail_id']; ?></td>
						<td><?php echo $data['user_id']; ?></td>
						<td><?php echo $data['user_city']; ?></td>
						<td><?php echo $data['user_state']; ?></td>						
						<td><?php echo $data['user_address']; ?></td>
						<td><?php echo $data['user_pincode']; ?></td>
						
					</tr>
			<?php	}
			}

		?>
	
	</table>
</div>


 

</body>
</html>
