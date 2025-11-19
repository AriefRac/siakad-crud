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
    <h2>INPUT MATA KULIAH</h2>
    <a href="data-matakuliah.php">Kembali</a>
    
    <form action="../conf/mk/input-mk.php" method="POST">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>   
                <td>:</td>
                <td><input type="text" name="kode_matakuliah"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_matakuliah"></td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td><input type="number" name="jumlah_sks"></td>
            </tr>
        </table>
        <tr>
            <input type="submit" value="daftar" name="daftar">
        </tr>
    </form>
</body>
</html>
