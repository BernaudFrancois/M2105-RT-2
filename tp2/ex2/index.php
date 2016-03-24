<!DOCTYPE html>
<?php
include "../function.php";
getHeader(false,"test");
$temps = 5*60;
?>
<div>
    <form action="cookie.php" method="post">
        <label for="name">Votre prénom :</label>
        <input type="text" name="prenom" id="name" style="display: block;">
<!--        <label for="age">Votre age :</label>-->
<!--        <input type="text" name="num" id="age" style="display: block;">-->
        <label class="control-label"><input type="checkbox" name="remember"> Se souvenir de moi</label>
        <input class="btn btn-default" type="submit" value="OK">
    </form>
</div>
<?php

    ?>


<?php
getFooter();
?>