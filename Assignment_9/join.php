<?php
include "connection.php";
include "side_bar.php";
?>

<!-- user_details TABLE -->
<h3> TABLE (user_details)</h3>
<div class="table-responsive">
<table class="table" >
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