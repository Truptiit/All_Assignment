<?php

include "connection.php";<?php

include "connection.php";
include "side_bar.php";?>

<style>
/*#btn{
       background-color: #99CCFF ;
       padding-right: 10px;
       padding-left: 10px;
       height: 40px;
       width: 100px;
}*/
</style>
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

<!-- user_db TABLE -->
<h3>User Details</h3>
<div class="table-responsive">
	<table class="table" >
		<tr>
		<!-- <th style="background:#e6f7ff;" >User ID</th> -->
		
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
						
						<td><?php echo $data['User_Name']; ?></td>
						<td><?php echo $data['User_Email']; ?></td>						
						<td><?php echo $data['Created_Date']; ?></td>
						<td>
							<a href="update.php?id=<?php echo $data['User_ID']; ?>"><button type="button" class="btn btn-success">Update</button></a>
							&nbsp&nbsp&nbsp

							<!-- <a href="delete.php?id="><button type="button" class="btn btn-danger">Delete</button></a> -->




<!-- Modal -->
 <div class="modal fade" id="exampleModal_<?php echo $data['User_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this record?
      </div>
      <div class="modal-footer">
        <a href="delete.php?id=<?php echo $data['User_ID']; ?>"><button type="button" class="btn btn-danger">Yes</button></a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
        
      </div>
    </div>
  </div>
</div>	
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal_<?php echo $data['User_ID']; ?>" style="margin-bottom: 5px;">Delete</button> 					
</td>
					</tr>
			<?php	}
			}

		?>
	
	</table>
	<hr>

	<form action="insert_form.php" method="POST" style="text-align: center;">
		<label>INSERT USER</label><br>
		<button type="submit" class="btn btn-info">INSERT</button>
	</form>
	<hr>
</div>


 <script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
    </script>

</body>
</html>
?>