<?php
include "connection.php";
 include "side_bar.php";
 ?>
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
		<div class="col-sm-6">
			<div class="well" >
				<div class="row">					
						<h4 style="margin-top: 10px;">Table 1 :user_db User Count&nbsp&nbsp</h4>
						<p><i class='bx bx-group icon' ></i>
						<?php 

							$query = "SELECT * FROM user_db";
							$result = $con->query($query);
							echo $result->num_rows;
						?></p>

						

				</div>					
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well" >
				<div class="row">					
						<h4 style="margin-top: 10px;">Table 2 :user_details User Count</h4>
						<p><i class='bx bx-group icon' ></i>
						<?php 

							$query = "SELECT * FROM user_details";
							$result = $con->query($query);
							echo $result->num_rows;
						?></p>

						

				</div>					
			</div>
		</div>
		<!-- </div> -->
	</div>
</div>
</div>
	
		</body>
	</html>