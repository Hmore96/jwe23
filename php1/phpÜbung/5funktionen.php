<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionen</title>
</head>
<body>
    <?php
        $teststring = "HALLO WELT";
        echo $teststring;
        echo "<br>";
        $finalstring = strtolower($teststring);
        echo $finalstring;
        echo "<br>";
        echo $teststring;
        echo trim($teststring,"T");
        echo "<br>";

        


        //HTMl Tags aus einem String entfernen

        $text = "Das ist <strong>fett</strong> und <em>kursiv</em> geschrieben.";
        echo $text;
        echo "<br>";
        
        echo strip_tags($text, "<strong>");
        echo "<br>";
        echo mb_strlen($text, "utf8");
        //Teil auf einem Text extrahieren

        $text = "Ich bin 43 Jahre alt.";

       $text = substr("Ich bin 43 Jahre alt.",-13,2);
       echo "<br>";
        echo $text;


        $text = "Herzlich Willkommen 
        im WIFI
        Salzburg";
        echo nl2br($text);

        
    ?>

</body>
</html>