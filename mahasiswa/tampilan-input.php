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
    <h2>Pendaftaran Mahasiswa Baru</h2>

    <a href="data-mahasiswa.php">Kembali</a>
    
    <form action="../conf/mhs/input-mhs.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama_mahasiswa"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="">Pilih</option>
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
                        <option value="">Pilih</option>
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
                <td><input type="text" name="alamat"></tr>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><input type="text" name="email"></tr>
            </tr>
            <tr>
                <td>No. Telp/HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp"></tr>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option value="">Pilih</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Cuti">Cuti</option>
                        <option value="Drop Out">Drop Out</option>
                        <option value="Lulus">Lulus</option>
                    </select>
                </tr>
            </tr>
        </table>
        <tr>
            <input type="submit" value="Daftar" name="daftar">
        </tr>
    </form>
</body>
</html>
