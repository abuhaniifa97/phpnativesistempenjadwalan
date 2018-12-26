<?php 
   include '../../config/koneksi.php';
   $id = $_GET['id'];
   $qe = mysqli_query($koneksi,"SELECT * FROM student");
   $data = mysqli_fetch_array($qe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Murid</title>
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
     <h1 class="form-heading">Edit Data</h1>
     <div class="form">
     <div class="login-form">
        <div class="main-div">
            <form action="#" id="tambahdata" method="post">
                    <label for="nama" class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['Name'] ?>">

                    <label for="gender" class="label-control">Jenis Kelamin</label>
                     <select name="jenis_kelamin" class="form-control" id="">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select> 
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" name="tanggal" class="form-control">
                    <label for="nohp">No Hp</label>
                    <input type="text" name="nohp" class="form-control" placeholder="Masukan No Telp..">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" placeholder="Masukan Alamat.."></textarea>
                    
                    <!-- <input type="text" class="form-control" name="jeniskelamin"> -->
                    <br>
                    <br>
                <button type="submit" name="edit" class="btn btn-success">Simpan</button>
                <button type="submit" class="btn btn-danger">Kembali</button>
            </form>
        </div>
     </div>
     </div>
 </div>
<?php 
 if (isset($_POST['edit'])){
     $nama = $_POST['nama'];
     $nohp = $_POST['nohp'];
     $alamat =$_POST['alamat'];
     $tanggal = $_POST['tanggal'];
     $jenis_kelamin = $_POST['jenis_kelamin'];
     $tambah = mysqli_query($koneksi,"INSERT INTO student(Name,Address,Gender,DateofBirth,NoHp)VALUES('$nama','$alamat','$jenis_kelamin','$tanggal','$nohp')");
     if ($tambah){
         ?>
         <script>
          alert('Data Berhasil Di Tambah');
          document.location.href="../managestudent.php";
         </script>
         <?php
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