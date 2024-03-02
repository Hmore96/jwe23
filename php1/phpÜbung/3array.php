<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>  

    <?php
        echo "<h1>Array in PHP </h1>";
        ?>
    <?php 
    //nummerisches Array definieren
    $namen = array("Katharina", "Jonathan", "Sophia", "Peter");

    echo $namen[0] ." und " . $namen[2];
    echo "<br/>";

    $namen[] = "Mario";

    $index = 3;
    echo $namen[$index+1];

    echo "<pre>";
    print_r($namen);
    echo "</pre>";

    //assozaitive Arrays
    $person = array(
        "name" => "Markus",
        "alter" => 25,
        "ort" => "Salzburg",
    );

    
    echo $person["name"] . " (" . $person["alter"] . ") aus " . $person["ort"];
    
    echo "<br/>";
    
    $person["guthaben"] = 100;
    
    echo "<pre>";
    print_r($person);
    echo "</pre>";

    $personen = array(
        array(
        "name" => "Herbert",
        "alter" => 33,
        "ort" => "Linz",
        ),
        array(
            "name" => "Josef",
            "alter" => 27,
            "ort" => "Wien",
        ),
        $person
     );

     echo "<pre>";
     print_r($personen);
     echo "</pre>";

     echo $personen[2]["ort"];
     echo "<br>";

     echo "Ich bin " . $personen[0]["name"] . ", bin " . $personen[1]["alter"] . " und habe ein Guthaben von " . $personen[2]["guthaben"];

    

    ?>

    
</body>
</html>