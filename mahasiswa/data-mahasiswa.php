<?php include("../conf/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD UIN BANTEN</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="data-mahasiswa.php">Mahasiswa</a></li>
            <li><a href="../matakuliah/data-matakuliah.php">Matakuliah</a></li>
        </ul>
    </nav>
    <h1>UIN SULTAN MAULANA HASANUDDIN BANTEN</h1>
    <br>
    <h2>DATA MAHASISWA</h2>
    <a href="../index.php">Kembali</a>
    <a href="tampilan-input.php"> [+] Tambah Baru</a>
<br>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Kode Prodi</th>
                <th>Alamat</th>
                <th>E-Mail</th>
                <th>No.Telp/HP</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $sql = "SELECT * FROM tb_mahasiswa";
                $query = mysqli_query( $conn, $sql );
                while ($data_mhs = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$data_mhs['nim']."</td>";
                    echo "<td>".$data_mhs['nama_mahasiswa']."</td>";
                    echo "<td>".$data_mhs['jenis_kelamin']."</td>";
                    echo "<td>".$data_mhs['kode_prodi']."</td>";
                    echo "<td>".$data_mhs['alamat']."</td>";
                    echo "<td>".$data_mhs['email']."</td>";
                    echo "<td>".$data_mhs['no_hp']."</td>";
                    echo "<td>".$data_mhs['status']."</td>";
                    
                    echo "<td>";
                    echo "<a href='tampilan-edit.php?nim=".$data_mhs['nim']."'><input type='button' class='btn-update' value='edit'></a>";
                    echo "<a href='delete.php?nim=".$data_mhs['nim']."'><input type='button' class='btn-delete' value='delete'></a>";
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
