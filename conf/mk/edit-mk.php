<?php
include("../config.php");

if(isset($_POST["update"])){
    $kd_mk = $_POST['kode_matakuliah'];
    $nm_mk = $_POST['nama_matakuliah'];
    $jmlh_sks = $_POST['jumlah_sks'];
    $sql = "UPDATE tb_matakuliah SET nama_matakuliah='$nm_mk', jumlah_sks='$jmlh_sks' WHERE kode_matakuliah ='$kd_mk'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: ../../matakuliah/data-matakuliah.php?status=sukses');
    }else{
        die('Gagal mengedit');
    }
    
}else{
    die('Askes dilarang!!!');
}
?>
