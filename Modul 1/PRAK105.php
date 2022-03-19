<!DOCTYPE html>
<html>
<head>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
    </style>
    <title>PRAK105</title>
</head>
<body>
    <table>
        <tr style="background-color: red; height: 70px; font-size: 24px">
            <th>Daftar Smartphone Samsung</th>
        </tr>
        
        <?php $samsung = array("samsung1"=>"Samsung Galaxy S22", "samsung2"=>"Samsung Galaxy S22+", "samsung3"=>"Samsung Galaxy AO3", "samsung4"=>"Samsung Galaxy Xcover 5"); ?>
        <?php foreach($samsung as $item) : ?>
            <tr>
                <td><?php echo ($item) ?></td>
            </tr>
        <?php endforeach?>
    </table>
</body>
</html>