<?php


include_once("./class.rib.php");


$validator = new RIBValidator($_POST["codebanque"], $_POST["codeguichet"], $_POST["compte"], $_POST["clef"]);

var_dump($validator);

if ($validator->isValid())  {
    echo "<p style='background-color : pink'>ce RIB est valide</p>";
} else {
   // echo "<p style='background-color : pink'>ce rib est invalide</p>";
   header("Location:index.php?erreur=1");
}        
echo "</pre>";