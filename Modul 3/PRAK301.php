<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta : <input type="number" name="peserta" min="1" value="<?=isset($_POST['peserta']) ? $_POST['peserta'] : ''?>">
        <br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
    <?php
        if(isset($_POST["cetak"])){
            $i = 1;
            $number = $_POST['peserta'];
                while($i <= $number){
                    if($i % 2 != 0){
                        echo "<b><font color='red'>Peserta ke-$i</font></b>";
                    }
                    else{
                        echo "<b><font color='green'>Peserta ke-$i</font></b>";
                    }
                    echo "<br><br>";
                    $i++;
                }
        }
    ?>
</body>
</html>