<?php 
 include "../../config/koneksi.php";
 $id = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM student WHERE StudentID='$id'");
 header("location:../managestudent.php");
?>