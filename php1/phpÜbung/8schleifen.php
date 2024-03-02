<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schleifen</title>
</head>
<body>
    <?php 
     
    set_time_limit(1);
        
    $i = 1;
    while ($i <= 20) {
        echo $i++ ."<br>";
    }

   $staedte = array("Frankfurt","Linz","Barcelonna","HongKong","Kuwait","Hamburg","St.Martin");
    asort($staedte);
   foreach ($staedte as $index => $stadt) {
    echo $index . " ";
    echo $stadt . " ";
   }
    
   
    ?>
</body>
</html>