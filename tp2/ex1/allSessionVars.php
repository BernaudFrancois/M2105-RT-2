<?php
include "function.php";
getHeader(True,"validation");

echo "<h1> résultats </h1>";

if (!empty($_POST["prenom"])) {
    $_SESSION["username"] = $_POST["prenom"];
    $_SESSION["userage"] = $_POST["num"];
//    echo $_SESSION["user"];
}

foreach ($_SESSION as $value){
    echo "<p>valeur de la session : {$value} </p>";
}



getFooter();
?>