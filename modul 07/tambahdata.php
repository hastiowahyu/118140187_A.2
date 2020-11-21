<!DOCTYPE html>
<html>
    <title>simpan data mahasiswa</title>
</html>
<body>
    
    <?php
        include "hal_depan.php";
        echo "<br>";
        echo "<b> Data Baru Yang Diinputkan Kedatabase </b>";
        echo "<br>";
        $NRP = $_POST["NRP"];
        $name = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $ID_jur = $_POST["ID_jur"];
        $koneksi  = mysqli_connect("localhost","root","")
        //or die ("koneksi gagal");
        mysqli_select_db($koneksi,"universitas");
        echo "<br>";
        echo "NRP: $NRP <br>";
        echo "Nama: $name <br>";
        echo "Alamat: $alamat <br>";
        echo "Jurusan: $ID_jur <br>";
        echo "<br>";
        $sql="insert into mahasiswa (NRP, nama, alamat, ID_jur) values 
        ('$NRP','$name','$alamat','$ID_jur')";
        $hasil=mysqli_query($koneksi, $sql);
        $tabel=mysqli_query($koneksi, "select * FROM mahasiswa ORDER BY mahasiswa.NRP DESC" )
    ?>
    <b>Daftar Data Yang Terdapat Didalam Database</b>
    <table border="1">
        <thead>
            <th>NRP</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jurusaan</th>
        </thead>
        <tbody>
            <?php if(mysqli_num_rows($tabel)) {?>
                <?php while($row = mysqli_fetch_array($tabel)) {?>
                <tr>
                    <td><?php echo $row ['NRP'] ?></td>
                    <td><?php echo $row ['nama'] ?></td>
                    <td><?php echo $row ['alamat'] ?></td>
                    <td><?php echo $row ['ID_jur'] ?></td>
                </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
    <?php
        echo "<br>";
        if($hasil){
            echo "<b>Data Berhasil Ditambahkan Kedalam Database</b>";
            exit;
        }else{
            echo "Data Gagal Ditambahkan Kedalam Database</b>";
            exit;
        }
    ?>
</body>