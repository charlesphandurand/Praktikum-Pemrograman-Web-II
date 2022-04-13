<html >
<head>
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="input">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $input = $_POST['input'];
        echo "<h2>Input:</h2><br>$input<br>";
        echo "<h2>Output:</h2><br>";

        for($i = 0 ; $i<strlen($input) ; $i++){
            $kapital = strtoupper($input);
            echo $kapital[$i];
            for($j=1 ; $j<strlen($input) ; $j++){
                $nonkapital = strtolower($input);
                echo $nonkapital[$i];
            }
        }
    }
?>