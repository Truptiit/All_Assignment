  <?php include "side_bar.php";?>
 
  <form id="form" name="form" method="post" action="db_Update_user.php">
            
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
      <label for="date">Created ON</label>
      <input type="date" id="date" name="date" value="<?php echo $date ?>">
      </div>
      <br>

      <div>
      <button type="submit" name="submit">Submit</button>
      </div>
      
    </form>