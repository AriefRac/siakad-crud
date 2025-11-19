<?php
include("../conf/config.php");

if(isset($_GET["kode_mk"])){
    $kode_mk = $_GET["kode_mk"];
    $sql = "DELETE FROM tb_matakuliah WHERE kode_matakuliah = '$kode_mk'";
    $query = mysqli_query( $conn, $sql );

    if($query){
        header("location: data-matakuliah.php");
    } else {
        die("Gagal Mengedit!");
    }

}die("Akses Dilarang...");
?>