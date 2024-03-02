<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionen 2</title>
</head>
<body>
<?php
    $namen = array("Peter","Franziska", "Franziska" ,"Mario", "Katharina", "Christian", "Benedikt");

    $index = array_rand($namen);
    echo $index;
    echo "<br>";
    echo $namen[$index];
    echo "<br>";
    echo "<br>";

    echo "<pre>";
    print_r($namen);
    echo "</pre>";

   $eindeutig = array_unique($namen);

    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";

    //Prüfen ob ein Wert im Array exisitert


    if (in_array("Peter", $namen)){
        echo "Peter vorhanden";
    } else {
        echo "ist nicht vorhanden";
    }

    //alphabetisch aufsteingend sortieren
    $eindeutig[] ="Herbert";

    //Wert im Nachhinein hinzufügen

    array_push($eindeutig, "Josef", "Hans");
    asort($eindeutig);
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";

    //sortieren und indizes neu zuweisen

    sort($eindeutig);
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";




    
?>
    
</body>
</html>