<?php
session_start();

if (!isset($_SESSION["login"])){
  header("location:../index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dashboard Admin</title>
  <link rel="stylesheet" href="../assets/css/sliding.css"> 
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/boostrap.css">
  <link rel="stylesheet" href="../assets/css/sb-admin.min.cs">
  <link rel="stylesheet" href="../assets/css/sb-admin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/w3school.css">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
  <!-- navbar -->
   <!-- <nav class="navbar navbar-inverse navbar-fixed-top">
  <a href="#" class="navbar-brand mr-1">Halaman Admin</a>
  <div class="container-fluid">
  
  </div>

  </nav> -->

  <!-- Akhir Navbar -->
  <!-- side bar -->
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <ul class="list-unstyled components">
                <li class="active">
                  <a href="managestudent.php">
                   <i class="fas fa-user-graduate"></i>
                   <span>Manage Student</span>
                  </a></li>
                <li><a href="manageteacher.php">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Manage Teacher</span>
                </a></li>
                <li><a href="../404notfound.php">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Manage Class</span>
                </a></li>
                <li><a href="../404notfound.php">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <span>Manage Schedule</span>
                </a></li>
                <li><a href="../logout.php">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <span>Logout</span>
                </a></li>
            </ul>
</div>

<div id="main">

<div class="w3-teal" color:black;>
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Halaman Admin</h1>
  </div>
</div>



<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="header">
      <h1>Selamat Datang Admin</h1>
      </div>
    </div>
  
  </div>
</div>

</div>

  <!-- content -->
  
  <!-- Akhir Content -->
  <!-- akhir side bar -->
  
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  
    <script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</body>
</html>