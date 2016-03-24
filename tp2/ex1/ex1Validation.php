<?php
include "function.php";
getHeader(True,"validation");

if (!empty($_POST["prenom"])) {
    $_SESSION["user"] = $_POST["prenom"];
    echo $_SESSION["user"];
}



getFooter();
?>