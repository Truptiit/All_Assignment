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

 <!-- INNER JOIN -->
<h3>INNER JOIN table</h3>
<div class="table-responsive">
<table class="table">
	<tr>				   
	<th>user_name</th>
	<th>user_city</th>
	<th>user_state</th>
	<th>user_address</th>
	<th>user_pincode</th>
</tr>
<?php
/* Query->INNER JOIN*/
$sql="SELECT user_details.* ,user_db.user_name 
FROM user_db 
join user_details on user_details.user_id=user_db.user_id"; //user_db ->(primar key)user_ID connect user_detail->(foreign key)user_ID 

$query=mysqli_query($con,$sql);
while($res=mysqli_fetch_array($query)){
?>
<tr class="text-center">
	<td><?php echo $res['user_name'];  ?></td>
	<td><?php echo $res['user_city'];  ?></td>
	<td><?php echo $res['user_state'];  ?></td>
	<td><?php echo $res['user_address'];  ?></td>
	<td><?php echo $res['user_pincode'];  ?></td> 
</tr>
<?php
}
?>
</table>
</div>

<!-- RIGHT JOIN -->
<h3>RIGHT JOIN table</h3>
<div class="table-responsive">
<table class="table">
	<tr>
	<!-- <th>user_id</th> -->				   
	<th>user_name</th>
	<th>user_city</th>
	<th>user_state</th>
	<!-- <th>user_pincode</th> -->
</tr>
<?php

/*Query->RIGHT JOIN*/
$que="SELECT user_details.user_city, user_details.user_state ,user_db.user_name/*,user_db.user_id */
FROM user_db
RIGHT JOIN user_details on user_details.user_id=user_db.user_id";

$query1=mysqli_query($con,$que);
while($res1=mysqli_fetch_array($query1)){
?>
<tr class="text-center">
	<!-- <td><?php echo $res1['user_id'];  ?></td> -->
	<td><?php echo $res1['user_name'];  ?></td>
	<td><?php echo $res1['user_city'];  ?></td>
	<td><?php echo $res1['user_state'];  ?></td>
	<!-- <td><?php echo $res['user_pincode'];  ?></td> -->
</tr>
<?php
}
?>
</table>
</div>

<!-- LEFT JOIN -->
<h3>LEFT JOIN table</h3>
<div class="table-responsive">
<table class="table">
	<tr>
	<!-- <th>user_id</th> -->				   
	<th>user_name</th>
	<th>user_city</th>
	<th>user_state</th>
	<!-- <th>user_pincode</th> -->
</tr>
<?php

/*Query->LEFT JOIN*/
$que2="SELECT user_details.user_city, user_details.user_state ,user_db.user_name
FROM user_db 
LEFT JOIN user_details on user_details.user_id=user_db.user_id";

$query2=mysqli_query($con,$que2);
while($res2=mysqli_fetch_array($query2)){
?>
<tr class="text-center">
	<!-- <td><?php echo $res1['user_id'];  ?></td> -->
	<td><?php echo $res2['user_name'];  ?></td>
	<td><?php echo $res2['user_city'];  ?></td>
	<td><?php echo $res2['user_state'];  ?></td>
	<!-- <td><?php echo $res['user_pincode'];  ?></td> -->
</tr>
<?php
}
?>
</table>
</div>


</table>
</div>

</body>
</html>