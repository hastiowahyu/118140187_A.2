<!DOCTYPE html>
<html>
    <head>
        <title>koneksi database</title>
    </head>
<body>
    <h1>demo koneksi database</h1>
    <?php
    $host="localhost";
    $user="root";
    $password="";
    $db="universitas";

    $koneksi  = mysqli_connect("$host","$user","$password");
    if ($koneksi){
        echo "koneksi database berhasil <br>";
    }else{
        echo "koneksi gagal <br>";
    }

    $hasil=mysqli_select_db($koneksi,$db);
    if($hasil){
        echo "database $db berhasil dipilih <br>";
    }else{
        echo "database $db gagal dipilih <br>";
    }
    ?>
    
</body>
</html>