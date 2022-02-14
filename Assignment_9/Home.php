<?php

include "connection.php";
  
    session_start();

    if ($_SESSION['status'] == false) {
    	header("Location: Home.php");
    }
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

				</div>					
			</div>
		</div>
		<!-- </div> -->
		</body>
	</html>