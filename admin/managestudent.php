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
	<title>Document</title>
  <link rel="stylesheet" href="../assets/css/sidebar.css"> 
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/w3school.css">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/sidebar.js"></script>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

   <!-- Side Bar -->
   <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <ul class="list-unstyled components">
                <li class="active">
                  <a href="#">
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
                <li><a href="404notfound.php">
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
    <h1><center>Manage Murid</center></h1>
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

 <!-- Akhir Sidebar -->

 <!-- Content -->
 <!-- <div class="container-fluid"> -->
    <!-- <div class="row">
      <div class="col-lg-12">
       <h1>Manage Murids</h1>
      </div>
    </div>
 </div> -->

    <!-- Page Content -->
      <!-- Modal -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data Siswa</h4>
            </div>
            <form action="#" method="post" id="insert_form">
              <div class="modal-body">
                <div class="form-group">
                  <label for="nama" class="control-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                  <label for="nama" class="control-label">No Hp</label>
                  <input type="text" name="nohp" class="form-control" id="nohp" required>
                </div>
                <div class="form-group">
                  <label for="nama" class="control-label">Jenis Kelamin</label>
                  <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama" class="control-label">Tanggal Lahir</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                </div>
                <div class="form-group">
                  <label for="nama" class="control-label">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
        <!-- Akhir Modal -->
        <!-- content -->
    <div id="page-content-wrapper">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- <h1>Fancy Toggle Sidebar Navigation</h1>
                        <p>Bacon ipsum dolor sit amet tri-tip shoulder tenderloin shankle. Bresaola tail pancetta ball tip doner meatloaf corned beef. Kevin pastrami tri-tip prosciutto ham hock pork belly bacon pork loin salami pork chop shank corned beef tenderloin meatball cow. Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin sausage chicken tri-tip. Pastrami tri-tip kielbasa sausage porchetta pig sirloin boudin rump meatball andouille chuck tenderloin biltong shank </p>
                        <p>Pig meatloaf bresaola, spare ribs venison short loin rump pork loin drumstick jowl meatball brisket. Landjaeger chicken fatback pork loin doner sirloin cow short ribs hamburger shoulder salami pastrami. Pork swine beef ribs t-bone flank filet mignon, ground round tongue. Tri-tip cow turducken shank beef shoulder bresaola tongue flank leberkas ball tip.</p>
                        <p>Filet mignon brisket pancetta fatback short ribs short loin prosciutto jowl turducken biltong kevin pork chop pork beef ribs bresaola. Tongue beef ribs pastrami boudin. Chicken bresaola kielbasa strip steak biltong. Corned beef pork loin cow pig short ribs boudin bacon pork belly chicken andouille. Filet mignon flank turkey tongue. Turkey ball tip kielbasa pastrami flank tri-tip t-bone kevin landjaeger capicola tail fatback pork loin beef jerky.</p>
                        <p>Chicken ham hock shankle, strip steak ground round meatball pork belly jowl pancetta sausage spare ribs. Pork loin cow salami pork belly. Tri-tip pork loin sausage jerky prosciutto t-bone bresaola frankfurter sirloin pork chop ribeye corned beef chuck. Short loin hamburger tenderloin, landjaeger venison porchetta strip steak turducken pancetta beef cow leberkas sausage beef ribs. Shoulder ham jerky kielbasa. Pig doner short loin pork chop. Short ribs frankfurter rump meatloaf.</p>
                        <p>Filet mignon biltong chuck pork belly, corned beef ground round ribeye short loin rump swine. Hamburger drumstick turkey, shank rump biltong pork loin jowl sausage chicken. Rump pork belly fatback ball tip swine doner pig. Salami jerky cow, boudin pork chop sausage tongue andouille turkey.</p>                          -->

                         <div clas="row">
                          <div class="col-lg-12">
                          <a href="tambah/tambahdatamurid.php">
                            <button class="btn btn-success" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"> Tambah Data</button>
                            </a>
                            <br>
                            <br>
                            <div class="table-responsive">
                            <div id="tambah_data">
                            <table class="table table-bordered table-hover table-striped">
                              <tr>
                               <th>No.</th>
                               <th>Name</th>
                               <th>Address</th>
                               <th>Gender</th>
                               <th>DateofBirth</th>
                               <th>NoHP</th>
                               <th>Aksi</th>
                              </tr>
                              
                            <?php 
                            include '../config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * from student");
                            while($d = mysqli_fetch_array($data)){
                                ?>

                                <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $d['Name']?></td>
                                <td><?php echo $d['Address']?></td>
                                <td><?php echo $d['Gender']?></td>
                                <td><?php echo $d['DateofBirth']?></td>
                                <td><?php echo $d['NoHp']?></td>
                                <td align="center">
                                <a href="edit/editmurid.php?id=<?php echo $d['StudentID'];?>">
                                <button class="btn btn-info btn-xs"><i class="fa fa-edit">Edit</i></button></a> | 
                                <a onClick="return confirm('Yakin Untuk Menghapus Data Ini?')" href="hapus/hapusmurid.php?id=<?php echo $d['StudentID'];?>">
                                <button class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>Hapus</button></a>
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
      
        <!-- /#page-content-wrapper -->
 <!--Akhirn Content  -->

 <?php 
 if (isset($_POST['simpan'])){
     $nama = $_POST['nama'];
     $tanggallahir = $_POST['tanggal'];
     $nohp = $_POST['nohp'];
     $alamat = $_POST['alamat'];
     $jeniskelamin = $_POST['jeniskelamin'];
     $tambah = mysqli_query($koneksi,"INSERT INTO student(Name,Address,Gender,DateofBirth,NoHp)VALUES('$nama','$alamat','$jeniskelamin','$tangal','$nohp')");
     if ($tambah){
        //  header ("location:../manageteacher.php");
        echo "Berhasil :v";
     }else {
         echo "Gagal";
     }
 }
?>

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
</body>
</html>