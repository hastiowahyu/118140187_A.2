<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
        </tr>
        <?php
            include "koneksi.php";
            $hasil=mysqli_query($kon, "select * from mahasiswa order by nim asc");
            $no=0;
            while($data=mysqli_fetch_array($hasil)):
                $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['prodi']; ?></td>
            <td><?php echo $data['angkatan']; ?></td>
            <td><button id="Edit" nama="<?= $data['nama']; ?>" prodi="<?= $data['prodi'] ?>" angkatan="<?= $data['angkatan'] ?>" value="<?= $data['nim']; ?>">Update</button></td>
			<td><button id="Delete" value="<?= $data['nim']; ?>">Delete</button></td>
        </tr>
            <?php endwhile;?>
    </table>
</body>
</html>