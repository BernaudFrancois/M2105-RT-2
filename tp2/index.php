<!DOCTYPE html>
<?php
include "function.php";
getHeader(True,"test");
?>
<div>
    <form action="allSessionVars.php" method="post">
        <label for="name">Votre prénom :</label>
        <input type="text" name="prenom" id="name" style="display: block;">
        <label for="age">Votre age :</label>
        <input type="text" name="num" id="age" style="display: block;">
        <input class="btn btn-default" type="submit" value="OK">
    </form>
</div>
<?php

    ?>


<?php
getFooter();
?>