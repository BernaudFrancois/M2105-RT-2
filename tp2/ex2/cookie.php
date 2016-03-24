<?php

include "../function.php";
getHeader(false,"ex2validation");
$temps = 5*60;
?>
<?php
if (array_key_exists("remember",$_POST)){
    setcookie("user",$_POST["prenom"],time()+$temps);
}

getFooter();
?>