<?php 
 include "../../config/koneksi.php";
 $id = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM teacher WHERE TeacherID='$id'");
 header("location:../manageteacher.php");
?>