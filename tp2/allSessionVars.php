<?php
include "function.php";
getHeader(True,"validation");

echo "<h1> titre </h1>";

if (!empty($_POST["prenom"])) {
    $_SESSION["user"] = $_POST["prenom"];
//    echo $_SESSION["user"];
}

foreach ($_SESSION as $value){
    echo "<p>valeur de la session : {$value} </p>";
}



getFooter();
?>