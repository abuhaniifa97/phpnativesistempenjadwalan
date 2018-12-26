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
	<title>Halaman Murid</title>
	 <link rel="stylesheet" href="../assets/css/sliding.css">
   <link rel="stylesheet" href="../assets/css/w3school.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>

 <!-- slide bar -->
 <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <ul class="list-unstyled components">
                <li class="active">
                  <a href="../404notfound.php">
                   <i class="fas fa-user-graduate"></i>
                   <span>Edit Profile</span>
                  </a></li>
                <li><a href="#">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Class Schedule</span>
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
    <h1><center>Jadwal Kelas</center></h1>
  </div>
</div>



<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="header">
      </div>
    </div>
  
  </div>
</div>

</div>
 <!-- akhir slide bar -->
 <!-- Content -->
  <div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="row">
                    <div class="col-lg-12">
                        <h2><center>Data Jadwal</center></h2>
                    </div>
                    <div class="col-lg-12">
                    <div class="table-responsive">
                        <div id="tampil">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <th>No.</th>
                                    <th>ID Mata Pelajaran</th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Nama Kelas</th>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Nama Guru</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
 <!-- Akhir Content -->
  <!-- footer -->

  <!-- akhir footer -->

<script src="assets/js/sliding.js"></script>
<script>
function w3_open() {
  // document.getElementById("main").style.marginLeft = "25%";
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