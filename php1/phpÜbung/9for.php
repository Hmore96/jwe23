<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>

<?php 
    echo "<table border='1'>";

    for($zeile = 1; $zeile <= 10; $zeile++){
    echo "<tr>";
    if ($zeile == 6) continue;
     for($spalte=1 ; $spalte<=10 ; $spalte++){
        echo "<td>";

        if  (($spalte*$zeile)% 7 !=0) echo $spalte*$zeile;
        echo "</td>";



    }
    echo "</tr>";
}
    echo "</table>";


?>
    <H1>Überschrift
    </H1>
    <table border="1">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>

        <tr>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            </tr>

    </table>
</body>
</html>