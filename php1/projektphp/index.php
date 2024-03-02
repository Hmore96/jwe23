<?php 

if (empty($_GET["seite"])){
    $site = "home";
} else {
    $site = $_GET["seite"];
}

 if  ($site =="home")
   { $include_datei ="home.php";
    $seitentitel = "Friseur erzeugt kurze Haare";
}

else if ($site =="kontakt") {
    $include_datei = "kontakt.php";
    $seitentitel = "Test erzeugt kurze Haare";

    
} 
else if ($site =="leistungen") {
    $include_datei = "leistungen.php";
    $seitentitel = "Obst erzeugt kurze Haare";

    
} 

else if ($site =="oeffnungszeiten") {
    $include_datei = "oeffnungszeiten.php";
    $seitentitel = "Zug erzeugt kurze Haare";

    
    
} 






include "kopf.php";

include "inhalte/" . $include_datei;

include "fuss.php";


