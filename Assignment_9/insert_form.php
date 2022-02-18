<?php
include "connection.php";
 include "side_bar.php";
 ?>
<div class="well">     
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

        <form id="form" name="form" method="POST" action="db_insert.php" autocomplete="off">
          <hr><h3>Add new user</h3><hr>
          <br>
          
          <div>
            <label>User Name</label>
            <input type="text" name="user_name" id="user_name" placeholder="User_Name">
          </div><br>
          
          <div>
            <label>User Email</label>
            <input type="text" name="user_email" id="user_email" placeholder="User_Email">
          </div><br>
          
          <div>
            <label>User Password</label>
            <input type="text" name="user_password" id="user_password" placeholder="User_Password">
          </div><br>  
          <!-- Details form other table -->
                      
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
            <input type="text" name="user_pincode" id="user_pincode" placeholder="User Pincode ">
          </div><br>

          <div>
            <button type="submit" name="submit">Insert</button>
          </div>

        </form>
      </div>
    <script>
    $(document).ready(function() {
      $("#form").validate({
    rules: {
      user_email: {
        email: function(element){
           return isNaN($("#user_email").val());
          }
      },
      user_name:{
          minlength:3,
        },  

        user_password:{
          minlength:8,
        },  
        user_pincode:{
          minlength:6,
          maxlength:6,
        },  
            
      },

    messages: {
      User_Email: {
        email: "Please enter a valid email address"
      },
      user_name: "Please enter atleast 3 character."
      
      user_password: "Please enter a 8 character Password."
      
      user_pincode: "Please enter a 6 Digit Pincode."
    }



  });
});
  
</script>
<script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
    </script>