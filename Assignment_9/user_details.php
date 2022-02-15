<?php
include "connection.php";
include "side_bar.php";
?>
<style>

	#table{
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
</style>
<h3>JOIN table</h3>
<table id="table">
	<tr>				   
	<th>user_name</th>
	<th>user_city</th>
	<th>user_state</th>
	<th>user_pincode</th>
</tr>
<?php
$sql="SELECT user_details.* ,user_db.user_name FROM user_details join user_db on user_details.user_id=user_db.user_id";
$query=mysqli_query($con,$sql);
while($res=mysqli_fetch_array($query)){
?>
<tr class="text-center">
	<td><?php echo $res['user_name'];  ?></td>
	<td><?php echo $res['user_city'];  ?></td>
	<td><?php echo $res['user_state'];  ?></td>
	<td><?php echo $res['user_pincode'];  ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>