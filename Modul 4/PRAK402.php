<?php
    $nilai = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
    ];

    for ($i=0; $i < count($nilai); $i++) { 
        $nilai[$i]["akhir"] = $nilai[$i]["uts"] * 0.4 + $nilai[$i]["uas"] * 0.6;
        if($nilai[$i]["akhir"] >= 80){
            $nilai[$i]["huruf"] = "A";
        } elseif($nilai[$i]["akhir"] > 70){
            $nilai[$i]["huruf"] = "B";
        } elseif($nilai[$i]["akhir"] > 60){
            $nilai[$i]["huruf"] = "C";
        } elseif($nilai[$i]["akhir"] > 50){
            $nilai[$i]["huruf"] = "D";
        } else{
            $nilai[$i]["huruf"] = "E";
        }
    }
?>

<html>
<head>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }

        table{
            width:500px
        }

        th{
            text-align: left;
            background-color: lightgray;
        }
    </style>
    <title>PRAK402</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
        for ($i=0; $i < count($nilai); $i++) { 
            echo "<tr>";
            echo "<td>".$nilai[$i]["nama"]."</td>";
            echo "<td>".$nilai[$i]["nim"]."</td>";
            echo "<td>".$nilai[$i]["uts"]."</td>";
            echo "<td>".$nilai[$i]["uas"]."</td>";
            echo "<td>".$nilai[$i]["akhir"]."</td>";
            echo "<td>".$nilai[$i]["huruf"]."</td>";
            echo "</tr>";
        }       
        ?>
    </table>
</body>
</html>