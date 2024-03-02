<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigene Funktionen</title>
</head>
<body>
    <?php 
        //Formel von Fahrenheit auf Celsius umrechnen
        $grad = 20;
        echo "<br>";

        function celsius_in_fahrenheit($celsius){
             $temp = $celsius * 1.8 + 32;
            return $temp;
        };

        $grad = 20;

        echo celsius_in_fahrenheit(15);
        echo "<br>";
        echo celsius_in_fahrenheit(20);
        echo "<br>";

        //Datum neu formatieren

        $datum_mysql = "2020-02-24";

        function new_date($datum_mysql) {
            $time = strtotime($datum_falsch);
            $newD = date("d.m.Y");
            return $newD;
            return date_format($time, "d.m.Y");
            echo new_date($newD);
        }


        function de_datum_weitere($datum_falsch){
            $teile = explode('-', $datum_falsch);
            return $teile[2]. "." . $teile[1]. ".".$teile[0];
        }
        echo de_datum_weitere($datum_mysql);
        echo "<br>";

        echo "<br>";



        $text = "Lorem ipsum dolor";
        echo ($text);
        echo "<br>";



        $text1 = 3456789101;
        $text2 = 1234567890123455678;
        echo cut($text1);
        function cut($text1){
         $new_text = strlen($text1);
         echo $new_text;
         if($new_text < 10){
            return $text1;
         } else {
         $newy = substr($text1, 0, 10);
            return $newy . "...";
         }
        }



        








    ?>
</body>
</html>