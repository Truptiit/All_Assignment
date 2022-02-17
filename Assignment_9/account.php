<?php
include "connection.php";
include "side_bar.php";?>
<?php
$id=session_id();
// echo "the session id: ".$id;
?>
<style>
  th{
    background: black;
    color: white;
  }
</style>
<div class="well" style="text-align: center; background: #C8C8C8;">
  <form id="form" name="form" method="POST" action="">
    <!--  -->
    <?php
    $r=$_SESSION['user_email'];
   $query = "SELECT * FROM user_db WHERE User_Email = '$r'";
    $result = $con->query($query);
    if($result->num_rows > 0){
    while ($data = $result->fetch_assoc()) {
    ?>
    
    <div class="well">
      <div>
        <h3><hr>User Details<hr></h3>
        <table class="table" style="width:100%">
          <tr>
            <th style="background: black; color: white;">USER NAME</th>
            <th style="background: black; color: white;">USER EMAIL</th>
            <th style="background: black; color: white;">Data Created on</th>
            <!-- <th style="background: black; color: white;">USER CITY</th>
            <th style="background: black; color: white;">USER STATE</th>
            <th style="background: black; color: white;">USER ADDRESS</th>
            <th style="background: black; color: white;">USER PINCODE</th> -->
          </tr>
          
          <tr>
            
            <td><?php echo $data['User_Name']; ?></td>
            <td><?php echo $data['User_Email']; ?></td>           
            <td><?php echo $data['Created_Date']; ?></td>

          <!-- </tr> -->
        <!-- </table> -->
    <br>
  <?php 
      }
    }
  ?>
  <?php 

 /* $sql="SELECT User_Id from user_details where User_Email='$r'";*/

/*  $sql = "SELECT *.user_details JOIN on user_db WHERE user_id.user_details=User_Email.user_db";
*/
    /*$query=mysqli_query($con,$sql); 
    $res=mysqli_fetch_array($query);
    $id1= $res['user_id'];
*/
   /* $res = $con->query($sql);
    if($res->num_rows > 0){
    while ($data1 = $res->fetch_assoc()) {*/
    ?>

    <!-- <div class="well"> -->
      <!-- <div> -->
        <!-- <h3><hr>User Details<hr></h3> -->
        <!-- <table class="table"> -->
<!--           <tr>
            <th style="background: black; color: white;">USER CITY</th>
            <th style="background: black; color: white;">USER STATE</th>
            <th style="background: black; color: white;">USER ADDRESS</th>
            <th style="background: black; color: white;">USER PINCODE</th>
          </tr> -->
          
          <!-- <tr> -->
            
           <!--  <td><?php echo $data1['user_city']; ?></td>
            <td><?php echo $data1['user_state']; ?></td>           
            <td><?php echo $data1['user_address']; ?></td>
            <td><?php echo $data1['user_pincode']; ?></td> -->
            
          </tr>
        </table>
    <br>
  <?php 
     /* }
    }*/
  ?>

  <!-- </div> -->
</div>
</form>