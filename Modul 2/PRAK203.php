<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"><br>
        Dari : <br>
        <input type="radio" name="dari" value="celcius" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="dari" value="fahrenheit" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="dari" value="reamur" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "reamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="dari" value="kelvin" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "kelvin") echo "checked";?>>Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="celcius" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="ke" value="fahrenheit" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="ke" value="reamur" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "reamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="ke" value="kelvin" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "kelvin") echo "checked";?>>Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
        if (isset($_POST["konversi"])) {
            if (!empty($_POST["dari"]) and !empty($_POST["ke"])) {
            $nilai = $_POST["nilai"];

            $celciusTofahrenheit = (9/5 * $nilai) + 32;
            $celciusToreamur = 4/5 * $nilai;
            $celciusTokelvin = $nilai + 273;

            $fahrenheitTocelcius = 5/9 * ($nilai - 32);
            $fahrenheitToreamur = 4/9 * ($nilai - 32);
            $fahrenheitTokelvin = 5/9 * ($nilai - 32) + 273;

            $reamurTocelcius = 5/4 * $nilai;
            $reamurTofahrenheit = (9/4 * $nilai) + 32;
            $reamurTokelvin = 5/4 * $nilai + 273;

            $kelvinTocelcius = $nilai - 273;
            $kelvinTofahrenheit = 9/5 * ($nilai - 273) + 32;
            $kelvinToreamur = 4/5 * ($nilai - 273);

                echo "<h1>Hasil Konversi: ";
                if ($_POST["dari"] == "celcius" and $_POST["ke"] == "celcius") {
                    echo $_POST["nilai"]." &degC";
                } elseif ($_POST["dari"] == "celcius" and $_POST["ke"] == "fahrenheit") {
                    echo number_format($celciusTofahrenheit, 1)." &degF";
                } elseif ($_POST["dari"] == "celcius" and $_POST["ke"] == "reamur") {
                    echo number_format($celciusToreamur, 1)." &degR";
                } elseif ($_POST["dari"] == "celcius" and $_POST["ke"] == "kelvin") {
                    echo number_format($celciusTokelvin, 1)." &degK";

                } elseif ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "fahrenheit") {
                    echo number_format($nilai, 1)." &degF";
                } elseif ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "celcius") {
                    echo number_format($fahrenheitTocelcius, 1)." &degC";
                } elseif ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "reamur") {
                    echo number_format($fahrenheitToreamur, 1)." &degR";
                } elseif ($_POST["dari"] == "fahrenheit" and $_POST["ke"] == "kelvin") {
                    echo number_format($fahrenheitTokelvin, 1)." &degK";

                } elseif ($_POST["dari"] == "reamur" and $_POST["ke"] == "reamur") {
                    echo number_format($nilai, 1)." &degR";
                } elseif ($_POST["dari"] == "reamur" and $_POST["ke"] == "celcius") {
                    echo number_format($reamurTocelcius, 1)." &degC";
                } elseif ($_POST["dari"] == "reamur" and $_POST["ke"] == "fahrenheit") {
                    echo number_format($reamurTofahrenheit, 1)." &degF";
                } elseif ($_POST["dari"] == "reamur" and $_POST["ke"] == "kelvin") {
                    echo number_format($reamurTokelvin, 1)." &degK";

                } elseif ($_POST["dari"] == "kelvin" and $_POST["ke"] == "kelvin") {
                    echo number_format($nilai, 1)." &degK";
                } elseif ($_POST["dari"] == "kelvin" and $_POST["ke"] == "celcius") {
                    echo number_format($kelvinTocelcius, 1)." &degC";
                } elseif ($_POST["dari"] == "kelvin" and $_POST["ke"] == "fahrenheit") {
                    echo number_format($kelvinTofahrenheit, 1)." &degF";
                } elseif ($_POST["dari"] == "kelvin" and $_POST["ke"] == "reamur") {
                    echo number_format($kelvinToreamur, 1)." &degR";
                }
                echo "</h1>";
            }
        }
    ?>
</body>
</html>