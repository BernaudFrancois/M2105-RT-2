<?php

include "../function.php";
getHeader(true,"ex2validation");
$temps = 5*60;

if (array_key_exists("remember",$_POST)){
    setcookie("user",$_POST["prenom"],time()+$temps);
}
?>
<p>enregistré !</p>
<a href="recoAuto.php">voir le résultat</a>
<?php
getFooter();
?>