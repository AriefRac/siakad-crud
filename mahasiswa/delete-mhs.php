<?php
include("../conf/config.php");
if(isset($_GET["nim"])){
    $nim = $_GET["nim"];

    $sql = "DELETE FROM tb_mahasiswa WHERE nim = $nim";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("location: ../mahasiswa/data-mahasiswa.php");
    }
    else{
        die("data gagal dihapus");
    }
} else {
    die("akses dilarang...");
}
?>
