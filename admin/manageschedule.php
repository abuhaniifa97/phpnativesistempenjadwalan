<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Schedule</title>
    <!-- Link Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/boostrap.css">
  <link rel="stylesheet" href="../assets/css/sb-admin.min.cs">
  <link rel="stylesheet" href="../assets/css/sb-admin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/w3school.css">
  <link rel="stylesheet" href="../assets/css/sliding.css"> 
  <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Akhir Link Css -->
</head>
<body>

 <!-- Side Bar -->
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
                <li><a href="#">
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
    <h1>Manage Schedule</h1>
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
 <!-- Akhir Side Bar -->

 <!-- Content -->
 <section class="content" id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Disini Ada Tabel</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tampildatamurid">
                    <h2>Data Guru</h2>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Aksi</th>
                            </tr>

                            <?php 
                            include '../config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT Name,Gender FROM teacher");
                            while($d = mysqli_fetch_array($data)){
                                ?>

                               <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $d['Name']?></td>
                                <td><?php echo $d['Gender']?></td>
                                <td><div type="button" class="btn btn-danger">Hapus</div> |
                                <div type="button" class="btn btn-success" >Edit</div></td>
                               </tr> 
                               <?php
                            }
                            ?>
                        </thead>
                    </table>
                    <div class="btn_tmbahdatateacher">
                            <div type="button" class="btn btn-success">Tambah Data</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Akhir Content -->

 <!-- Js -->
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
 <!-- Akhir Js -->
    
</body>
</html>