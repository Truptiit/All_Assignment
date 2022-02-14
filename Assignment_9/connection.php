<?php
// Create connection
$con = mysqli_connect("localhost", "root", "","assignment_9");

// Check connection
if (mysqli_connect_error()) {
  echo "failed to connect to MySQL: " . mysqli_connect_error();
}
/*else{
echo "Connected successfully";
}*/
