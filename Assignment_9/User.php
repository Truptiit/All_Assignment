<?php include "side_bar.php";?>
<?php include "connection.php"; ?>
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
}
#btn1{
       background-color: skyblue ;
       font-weight: bold;
}
#btn2{
       background-color: red ;
       font-weight: bold;
}
</style>
	<table id="table">
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
							<a href="Update.php?id=<?php echo $data['User_ID']; ?>"><button type="button" id="btn1">Update</button></a>
							
							<a href="Delete.php?id=<?php echo $data['User_ID']; ?>"><button type="button" id="btn2">Delete</button></a>
						</td>
					</tr>
			<?php	}
			}

		?>
	
	</table>

</body>
</html>
