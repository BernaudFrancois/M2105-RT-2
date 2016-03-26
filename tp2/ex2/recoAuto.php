<?php

include "../function.php";
getHeader(true,"ex2validation");



?>
    <form method="post" action="recoAuto.php">
        <input type="submit" name="delete" value="reset cookie">
     </form>

<?php
if (!empty($_POST["delete"])){
if ($_POST["delete"] == "reset cookie"){
    setcookie("user","",time()-3600);
   
}}
echo $_COOKIE["user"];
getFooter();
?>