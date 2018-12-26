<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Teacher</title>

    <!--Link Ke Css  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/w3school.css">
  <link rel="stylesheet" href="../assets/css/sliding.css"> 
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Akhir Link Css -->

  <!-- Js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
  <!-- Akhir JS -->
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
                <li><a href="#">
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
    <h1>Manage Teacher</h1>
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
    <!-- Akhir Side Bar -->

    <!-- Content -->
    <!-- Modal -->
    <div class="modal fade tambah_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Guru</h4>
                </div>
                <form action="#" method="post" id="tambah_guru">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin">
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                <button class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal -->
    <div id="page-content-wrapper">
        <span class="hamb-top"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="row">
                        <div class="col-lg-12">
                        <a href="tambah/tambahdataguru.php">
                            <button class="btn btn-success" type="button" data-toggel="modal" data-target=".bs-example-modal-lg">Tambah Data</button>
                            </a>
                            <br>
                            <div class="table-responsive">
                                <div id="tambah_data">
                                    <table class="table table-bordered table-hover table-striped">
                                      <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Aksi</th>
                                      </tr> 
                                      <?php 
                                      include '../config/koneksi.php';
                                      $no=1;
                                      $data = mysqli_query($koneksi, "SELECT * FROM teacher");
                                      while($d = mysqli_fetch_array($data)){

                                      
                                      ?>

                                      <tr>
                                      <td><?php echo $no++?></td>
                                      <td><?php echo $d['Name']?></td>
                                      <td><?php echo $d['Gender']?></td>
                                      <td align="center">
                                      <a href="edit/editguru.php?id=<?php echo $d['TeacherID'];?>">
                                        <button class="btn btn-info btn-xs"><i class="fa fa-edit">Edit</i></button></a> |
                                        <a onClick="return confirm('Yakin untuk menghapus?')" href="hapus/hapusguru.php?id=<?php echo $d['TeacherID'];?>">
                                        <button class="btn btn-danger btn-xs"><i class="fas fa-trash">Hapus</i></button></a>
                                      </td>
                                      </tr>
                                      <?php
                                      }
                                      ?> 
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

    <!-- Js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
 function w3_open() {
//   document.getElementById("main").style.marginLeft = "25%";
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