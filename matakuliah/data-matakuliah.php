<?php include("../conf/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD UIN BANTEN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>UIN SULTAN MAULANA HASANUDDIN BANTEN</h1></center>
    <br>
    <h2>DATA MAHASISWA</h2>
    <nav>
        <a href="input-matakuliah.php"> [+] Tambah Baru</a>
    </nav>
<br>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Jumlah SKS</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $sql = "SELECT * FROM tb_matakuliah";
                $query = mysqli_query( $conn, $sql );
                while ($data_mk = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$data_mk['kode_matakuliah']."</td>";
                    echo "<td>".$data_mk['nama_matakuliah']."</td>";
                    echo "<td>".$data_mk['jumlah_sks']."</td>";
                    
                    echo "<td>";
                    echo "<a href='tampilan-edit.php?nim=".$data_mk['kode_matakuliah']."'><input type='button' class='btn-update' value='edit'></a>";
                    echo "<a href='delete.php?nim=".$data_mk['kode_matakuliah']."'><input type='button' class='btn-delete' value='delete'></a>";
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
