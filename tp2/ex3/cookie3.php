<?php

include "../function.php";
getHeader(True,"ex2validation");
$temps = 5*60;
?>
<?php
$_SESSION["nav"] = $_POST["browser"];

if (array_key_exists("browser",$_POST)){
    echo "<p> le navigateur préféré est  {$_SESSION['nav']}</p>";
}

getFooter();
?>