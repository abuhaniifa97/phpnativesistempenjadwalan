<?php 
   include '../../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <style>
     .form-heading { font-size:23px; margin-left:25%;margin-top:5%;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control #tambahdata {
  background: blue none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}

.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.form {
    width:500px;
   margin-left:25%;
   padding-top:10px;
}
    </style>
</head>
<body>
 <div class="container">
     <h1 class="form-heading">Tambah Data</h1>
     <div class="form">
     <div class="login-form">
        <div class="main-div">
            <form action="#" id="tambahdata" method="post">
                    <label for="nama" class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Mata Pelajaran...">

                     <label for="gender" class="label-control">Deskripsi</label>
                     <textarea name="deskripsi" placeholder="Masukan Deskripsi Pelajaran" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
                     <label for="tugas" class="control-label">Tugas</label>
                     <input type="number" class="form-control" name="tugas" placeholder="Masukan Nilai Tugas...">
                     <label for="uts" name="uts">Ujian Tengah Semester</label>
                     <input type="number" class="form-control" name="uts" placeholder="Masukan Nilai Uts...">
                     <label for="pas" name="pas">Penilaian Akhir Semester</label>
                     <input type="number" class="form-control" name="pas" placeholder="Masukan Nilai Pas...">
                    <!-- <input type="text" class="form-control" name="jeniskelamin"> -->
                    <br>
                    <br>
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
     </div>
     </div>
 </div>
<?php 
 if (isset($_POST['simpan'])){
     $nama = $_POST['nama'];
     $deskripsi = $_POST['deskripsi'];
     $uts = $_POST['uts'];
     $pas = $_POST['pas'];
     $tugas = $_POST['tugas'];
     $tambah = mysqli_query($koneksi,"INSERT INTO subject(Name,Description,Assignment,MidExam,FinalExam)VALUES('$nama','$deskripsi','$tugas','$uts','$pas')");
     if ($tambah){
        //  header ("location:../manageteacher.php");
        <script >
        alert('Tambah Data Berhasil');
        document.location.href="../manageteacher.php";
       </script>
     }else {
         echo "Gagal";
     }
 }
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=".../assets/js/bootstrap.min.js"></script>   
</body>
</html>