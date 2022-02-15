<?php
include "connection.php";
?>
		
		<?php include "side_bar.php";?>
		<style>
			p{
				font-size: 35px; 
	    		padding-left: 3rem; 
				padding-top: 2rem;
			}
			h4{
				padding-left: 3rem; 
				padding-top: 2rem;
				font-size: 25px;
			}
		</style>
		<!-- <div class="container-fluid"> -->
		<div class="col-sm-12">
			<div class="well">
				<div class="row">					
						<h4 style="margin-top: 10px;">User Count</h4>
						<p><i class='bx bx-group icon' ></i>
						<?php 
							$query = "SELECT * FROM user_db";
							$result = $con->query($query);
							echo $result->num_rows;
						?></p>

						<?php 
						/*$query=mysqli_query($con,"select * from user_db where User_Email='".$_SESSION['User_ID']."'");
						echo $_SESSION['User_ID'];
						print_r($_SESSION);
						echo $_SESSION["User_Email"];*/
						?>

				</div>					
			</div>
		</div>
		<!-- </div> -->
	</div>
		</body>
	</html>