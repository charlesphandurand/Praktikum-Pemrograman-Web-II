<html>
<head>
    <title>PRAK302</title>
</head>
<body>
<form action="" method="post">
        Tinggi : <input type="number" name="tinggi" min="1" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>">
        <br>
        Alamat Gambar : <input type="url" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>">
        <br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
    <?php
        if(isset($_POST["cetak"])){
            $tinggi = $_POST['tinggi'];
            $alamat = $_POST['alamat'];
            
            $i = 1;
            while($i<=$tinggi){
                $a = 1;
                while($a <= $i){
                    echo " &nbsp&nbsp&nbsp&nbsp";
                    $a++;
                }
                $c = $tinggi;
                while($c >= $i){
                    echo '<img src="'.$alamat.'" width="20px" height = "20px">'; 
                    $c--;
                }
                echo "<br>";
                $i++;
            }
        }
    ?>
</body>
</html>