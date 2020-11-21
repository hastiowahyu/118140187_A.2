<!DOCTYPE html>
<html>
    <head>
        <title>halaman depan</title>
    </head>
    <body>
        <h2>DATA MAHASISWA PENS</h2>
        ===================================
        <H2>TAMBAH DATA</H2>
        <form action="tambahdata.php" method="POST">
            <b>NRP: </b><input type="text" name="NRP" size="" maxlength="50"> <br>
            <b>Nama: </b><input type="text" name="nama" size="" maxlength="50"> <br>
            <b>Alamat: </b><input type="text" name="alamat" size="" maxlength="100"><br>
            <b>Jurusan: </b><select name='ID_jur'>
                <option value='Telekomunikasi'>Telekomunikasi</option>
                <option value='Elka'>Elka</option>
                <option value='IT'>IT</option>
                <option value='Elin'>Elin</option>
            </select> <br><br><br><br><br>
            <button type="submit">Tambah</button><br><br>
        </form>
        ====================================
        <h2>SEARCH DATA</h2>
        <form action="search.php" method="POST">
            <b>Nama: </b>
            <input type="text" name="cari">
            <input type="submit" value="cari data"><br><br>
        </form>
        ====================================
        <br>
        <h2>HAPUS DATA</h2>
        <form action="hapus.php" method="POST">
            <b>NRP: </b>
            <input type="text" name="hapus">
            <input type="submit" value="hapus data"><br><br>
        </form>
        ====================================
    </body>
</html>