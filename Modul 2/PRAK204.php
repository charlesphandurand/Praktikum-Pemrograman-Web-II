<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>" min="0" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
    <?php
        
        if(isset($_POST["konversi"])){
            echo "<h1>";
            if (!empty($_POST["nilai"]) or empty($_POST["nilai"])) {
                echo "Hasil: ";
            }
            if ($_POST["nilai"] == 0) {
                echo "Nol";
            } elseif ($_POST["nilai"] >= 1 and $_POST["nilai"] <= 9) {
                echo "Satuan";
            } elseif ($_POST["nilai"] >= 11 and $_POST["nilai"] <= 19) {
                echo "Belasan";
            } elseif ($_POST["nilai"] >= 10 and $_POST["nilai"] <= 99) {
                echo "Puluhan";
            } elseif ($_POST["nilai"] >= 100 and $_POST["nilai"] <= 999) {
                echo "Ratusan";
            } elseif ($_POST["nilai"] >= 1000) {
                echo "Anda Menginput Melebihi Limit Bilangan";
            }
            echo "</h1>";
        }
    ?>
</body>
</html>