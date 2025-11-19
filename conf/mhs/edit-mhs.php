<?php
include("../config.php");

if(isset($_POST["update"])){
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kode_prodi = $_POST['kode_prodi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $status = $_POST['status'];

    $sql = "UPDATE tb_mahasiswa SET nama_mahasiswa='$nama_mahasiswa', jenis_kelamin='$jenis_kelamin', kode_prodi='$kode_prodi', alamat='$alamat', email='$email', no_hp='$no_hp', status='$status' WHERE nim =$nim";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: ../mahasiswa/data-mahasiswa.php?status=sukses');
    }else{
        die('Gagal mengedit');
    }
    
}else{
    die('Askes dilarang!!!');
}
?>
