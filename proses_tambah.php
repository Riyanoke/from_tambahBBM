<?php
include("koneksi.php");
if(isset($_POST['tambah_data'])){
          $Nik=$_POST['nik'];
          $kendaraan=$_POST['jeniskendaraan'];
   
          $sql = "INSERT INTO  tb_bbm (nik,jenis_kendaraan) VALUES ('$Nik','$kendaraan')";
          $query=mysqli_query($db, $sql);


if($query){
    header('status=sukses');
}else{
    header('status=gagal'); 
}
}
?>
