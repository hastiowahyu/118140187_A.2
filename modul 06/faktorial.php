<!DOCTYPE>
<html>
<head><title>faktorial_118140187</title></head>
</html>
<body>
    <form action="#" method="POST">
        n!: <input type="text" name="input">
        <button type="submit">n!</button>
    </form>
    <?php
    $jumlah=1;
    echo "faktorial dari ". $_POST['input']."!". " adalah: ";
    for($i=$_POST['input']; $i>0; $i--){
        if($i==1){
            echo $i;
        }else{
            echo $i."x";
        }
        $jumlah = $jumlah * $i;
    }
    echo "<br>"."hasil dari perhitungan faktorial dari suatu bilangan tersebut adalah: ". $jumlah;
    ?>
</body>