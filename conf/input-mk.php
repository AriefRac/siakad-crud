<?php
include("config.php");
if(isset($_POST["daftar"])){

    $kode_matakuliah = $_POST["kode_matakuliah"];
    $nama_matakuliah = $_POST["nama_matakuliah"];
    $jumlah_sks = $_POST["jumlah_sks"];

    $sql = "INSERT INTO tb_matakuliah (kode_matakuliah, nama_matakuliah, jumlah_sks) VALUE ('$kode_matakuliah', '$nama_matakuliah', '$jumlah_sks')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: ../matakuliah/data-matakuliah.php?status=sukses');
    }else{
        header('location: index.php?status=gagal');
    }
}else{
    die('Askes dilarang...');
}
?>
