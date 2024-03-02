<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variablen</title>
</head>
<body>
    <h1>
        Variablen mit PHP
    </h1>
    <?php
        //Ganzzahl Integer definieren

        $ganzeZahl = 5;
        echo "Ich habe "; echo $ganzeZahl; echo " Geld <br>";

        $kommaZahl = 10.5;

        echo $kommaZahl;echo"&amp
        ";

        $text1 = "Hier soll der erste Text stehen <br>";

        echo $text1;

        $name = "Peter";

        $text2 = "Ich heiße $name<br>";

        echo $text2;

        echo "Ich habe ". $name . "s Stift<br>"; 

        //Datentyp Boolean

        $true = true;
        $false = false;

        echo $false;
        echo $true;
        echo ">" . $true . "<";



        $nichts = null;


        



    ?>

</body>
</html>