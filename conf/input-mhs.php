<?php
include("config.php");
if(isset($_POST["daftar"])){

    $nim = $_POST["nim"];
    $nama_mahasiswa = $_POST["nama_mahasiswa"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $kode_prodi = $_POST["kode_prodi"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $status = $_POST["status"];

    $sql = "INSERT INTO tb_mahasiswa (nim, nama_mahasiswa, jenis_kelamin, kode_prodi, alamat, email, no_hp, status) VALUE ('$nim', '$nama_mahasiswa', '$jenis_kelamin', '$kode_prodi', '$alamat', '$email', '$no_hp', '$status')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: ../mahasiswa/data-mahasiswa.php?status=sukses');
    }else{
        header('location: index.php?status=gagal');
    }
}else{
    die('Askes dilarang...');
}
?>
