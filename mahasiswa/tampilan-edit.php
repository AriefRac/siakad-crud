<?php
include("../conf/config.php");

if (!isset($_GET["nim"])) {
    header("location: data-mahasiswa.php");
}

$nim = $_GET["nim"];
$sql = "SELECT * FROM tb_mahasiswa WHERE nim = $nim";
$query = mysqli_query($conn, $sql);
$mahasiswa = mysqli_fetch_array($query);

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
</head>
<body>
    <center><h1>UIN SULTAN MAULANA HASANUDIN BANTEN</h1></center>
    <h2>Edit Data Mahasiswa</h2>

    <form action="../conf/edit-mhs.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $mahasiswa['nim']?>">
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama_mahasiswa" value="<?php echo $mahasiswa['nama_mahasiswa']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value=""><?php echo $mahasiswa['jenis_kelamin']?></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kode Prodi</td>
                <td>:</td>
                <td>
                    <select name="kode_prodi">
                        <option value=""><?php echo $mahasiswa['kode_prodi']?></option>
                        <option value="FIS">FIS</option>
                        <option value="KIM">KIM</option>
                        <option value="BIO">BIO</option>
                        <option value="MAT">MAT</option>
                        <option value="INF">INF</option>
                    </select>
                </td>    
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $mahasiswa['alamat']?>"></tr>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><input type="text" name="email" value="<?php echo $mahasiswa['email']?>"></tr>
            </tr>
            <tr>
                <td>No. Telp/HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp" value="<?php echo $mahasiswa['no_hp']?>"></tr>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option value=""><?php echo $mahasiswa['status']?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Cuti">Cuti</option>
                        <option value="Drop Out">Drop Out</option>
                        <option value="Lulus">Lulus</option>
                    </select>
                </tr>
            </tr>
        </table>
        <tr>
            <input type="submit" value="update" name="update">
        </tr>
    </form>
</body>
</html>
