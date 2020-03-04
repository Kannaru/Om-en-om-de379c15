<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    table{
        border: solid 4px black;
    }
</style>
    <?php
    echo "<table>";
    for($rij = 1; $rij <= 8; $rij++) {
        echo "<tr>";
        for($cel = 1; $cel <= 8; $cel++) {
            $aantalcellen = $rij+$cel;
            if($aantalcellen%2==0) {
                echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
            }
            else {
                echo"<td height=50px width50px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>