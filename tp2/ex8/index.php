<!DOCTYPE html>
<?php
include "../function.php";
getHeader(true,"test");


?>
<form action="index.php" method="post">
    <label for="num">numéro de la question ?</label>
    <input type="text" name="num" id="num" >
    <input type="submit" value="ok">
</form>

<?php

    $index = $_POST["num"];
    $index-= 1;
    display1Question($index,getQuestion());

getFooter();
?>