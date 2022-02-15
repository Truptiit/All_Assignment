<?php
include "connection.php";
include "side_bar.php";?>
<div class="well" style="text-align: center;">
  <form id="form" name="form" method="POST" action="">
    <?php
    /* echo $_SESSION['User_Email'];*/
    $query = "SELECT * FROM user_db WHERE User_Email = '".$_SESSION['User_Email']."' ";
    
    /*$query = "SELECT * FROM user_db";*/
    $result = $con->query($query);
    if($result->num_rows > 0){
    while ($data = $result->fetch_assoc()) {
    ?>
    
    <h3>User Details</h3>
    <div>
      <label for="User_Name">User_Name</label>
      <input type="text" id="User_Name" name="User_Name" value="<?php echo $data['User_Name']; ?>">
    </div>
    <br>
    <div>
      <label for="User_Email">User_Email</label>
      <input type="email" id="User_Email" name="User_Email" value="<?php echo $_SESSION['User_Email']; ?>">
    </div>
    <br>
    <div>
      <label for="date">Created ON</label>
      <input type="date" id="date" name="date" value="<?php echo $data['Created_Date']; ?>">
    </div>
    <br>
    <div>
      <button type="submit" name="submit">Submit</button>
    </div>
    <?php   }
    }
    ?>
  </div>
</form>
<div class="well">
  <div class="row">
    <div class="col-md-6">
      <div class="well" style="text-align: center;">
        <form id="form1" name="form1" method="POST" action="insert.php">
          <hr><h3>To Add new user</h3>
          <br>
          <div>
            <label>User Name</label>
            <input type="text" name="User_Name" placeholder="User_Name">
          </div><br>
          
          <div>
            <label>User Email</label>
            <input type="text" name="User_Email" placeholder="User_Email">
          </div><br><br>
          
          <div>
            <label>User Password</label>
            <input type="text" name="User_Password" placeholder="User_Password">
          </div><br>
          <div>
            <button type="submit" name="insert">Insert Records</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      
      <div class="well" style="text-align: center;">
        <form id="form1" name="form1" method="POST" action="insert_user_detail.php">
          <h3>To Add address of User</h3>
          
          <div>
            <label>User ID</label>
            <input type="text" name="User_ID" placeholder="User_Name">
          </div><br>
          
          <div>
            <label>User City</label>
            <input type="text" name="User_City" placeholder="User City">
          </div><br>
          
          <div>
            <label>User State </label>
            <input type="text" name="User_State" placeholder="User State">
          </div><br>
          <div>
            <label>User Address </label>
            <input type="text" name="User_Address" placeholder="User Address ">
          </div><br>
          <div>
            <label>User Pincode </label>
            <input type="text" name="User_Pincode" placeholder="User Pincode ">
          </div><br>
          <div>
            <button type="submit" name="submit">Insert User Detail</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
  
</div>