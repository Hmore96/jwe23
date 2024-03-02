<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 

        $stunde = date("G");

        if ($stunde <= 5) {
            echo "schlaf gut";
        } else if  ($stunde > 5 && $stunde<= 10) {
            echo "Guten Morgen";
        } else if  ($stunde >= 11 && $stunde<= 18) {
            echo "Mahlzeit";
        } else if  ($stunde > 18 && $stunde<= 23) {
            echo "Gute Nacht";
        } else {
            echo "Hallo Welt";
        } 
   
   ?>  

</body>
</html>