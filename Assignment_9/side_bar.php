<?php  
    session_start();
    include "connection.php";
    /*echo $_SESSION['status'];*/
    /*if ($_SESSION['status'] != true) {
      header("Location: home.php");
      exit();
    }*/
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap sidebar</title>
    <link rel="icon" type="image/x-icon" href="https://theantiquitiescoalition.org/wp-content/uploads/2018/11/website-icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="bar_style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      
      .sidenav {
    background-color: ;
    height: 150%;
    width: 20%;
    color: black;
    font-size: 20px; 

    }
    </style>
  </head>
  <body>
    <!-- nav bar for mobile -->
    <nav class="navbar navbar-inverse visible-xs">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">User Details</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            
        <li><a href="home.php"><i class='bx bx-home-alt icon'></i>
         <span class="text nav-text">Home</span></a></li>
       
       <li><a href="user.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">Users</span></a></li>

         <li><a href="user_details.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">Users Details</span></a></li>

         <li><a href="account.php?id=<?php  ['User_Email']; ?>"><i class='bx bx-user icon'></i>
         <span class="text nav-text">My Account</span></a></li>


        <li><a href="logout.php"><i class='bx bx-log-out-circle icon'></i>
         <span class="text nav-text" name="logout">Logout</span></a></li>


        </div>
      </div>
    </nav>
    <!-- nav bar for laptop -->
    <div class="container-fluid">
     <div class="row content">
     <div class="col-sm-3 sidenav hidden-xs">
       <h2>User Details</h2>
       <ul class="nav nav-pills nav-stacked">
      
       <li><a href="home.php"><i class='bx bx-home-alt icon'></i>
         <span class="text nav-text">Home</span></a></li>
       
       <li><a href="user.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">Users</span></a></li>

          <li><a href="user_details.php"><i class='bx bx-group icon' ></i>
         <span class="text nav-text">Users Details</span></a></li>

       <li><a href="account.php?id=<?php  ['User_Email']; ?>"><i class='bx bx-user icon'></i>
         <span class="text nav-text">My Account</span></a></li>


       <li><a href="logout.php"><i class='bx bx-log-out-circle icon'></i>
         <span class="text nav-text" name="logout">Logout</span></a></li>
       </ul>
                                          
  <br>
 </div>

<br>

<div class="col-sm-9">
 <div class="well">
  <div class="row" >
   <div class="col-sm-9 col-lg-9">
    <h3 style="margin-top: 10px;">Home</h3>
   </div>
  
  <div class="col-sm-3 col-lg-3">
      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="bx bxs-user-circle a" style="margin-top: 10px; margin-left: 25px; color: black;" ></i>
        <ul class="dropdown-menu">
         
          <li><a href="account.php?id=<?php  ['User_Email']; ?>"><i class='bx bx-user icon'></i>&nbsp My Account</a></li>
          <li><a href="logout.php"><i class='bx bx-log-out-circle icon' name="logout"></i> &nbsp Logout</a></li>
        
        </ul>
        </a>
        </div> 

  </div>

 </div>
  </div>
  
