<?php

include "../function.php";
getHeader(True,"ex4validation");

?>
<?php
$_SESSION["social"] = $_POST["network"];

if (array_key_exists("network",$_POST)){
    foreach ($_SESSION["social"] as $value){
        echo "<p>valeur de la session : {$value} </p>";
    }


}

getFooter();
?>