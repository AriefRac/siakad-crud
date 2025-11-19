<?php
include("../conf/config.php");

if (!isset($_GET["kode_mk"])) {
    header("location: data-matakuliah.php");
}

$kd_mk = $_GET["kode_mk"];
$sql = "SELECT * FROM tb_matakuliah WHERE kode_matakuliah = '$kd_mk'";
$query = mysqli_query($conn, $sql);
$mk = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan!");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD UIN SMH BANTEN</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h1>UIN SULTAN MAULANA HASANUDIN BANTEN</h1>
    <h2>UPDATE MATA KULIAH</h2>
    <a href="data-matakuliah.php">Kembali</a>
    
    <form action="../conf/mk/edit-mk.php" method="POST">
        <input type="hidden" name="kode_matakuliah" value="<?php echo $mk['kode_matakuliah']?>">
        <table>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_matakuliah" value="<?php echo $mk['nama_matakuliah']?>"></td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td><input type="number" name="jumlah_sks" value="<?php echo $mk['jumlah_sks']?>"></td>
            </tr>
        </table>
        <tr>
            <input type="submit" value="update" name="update">
        </tr>
    </form>
</body>
</html>
