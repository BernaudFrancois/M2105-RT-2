<!DOCTYPE html>
<?php
include "function.php";
getHeader(True,"test");

?>
<div>
    <form action="allSessionVars.php" method="post">
        <label for="name">votre prénom :</label>
        <input type="text" name="prenom" id="name" style="display: block;">
        <input class="btn btn-default" type="submit" value="OK">
    </form>
</div>
<?php

    ?>


<?php
getFooter();
?>