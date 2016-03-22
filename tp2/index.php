<!DOCTYPE html>
<?php
include "function.php";
getHeader(True,"test");
?>
<div>
    <form action="ex1Validation.php" method="post">
        <label for="name">votre prénom :</label>
        <input type="text" name="prenom" id="name" style="display: block;">
        <a href="ex1Validation.php"  <input class="btn btn-default" type="submit" value="OK"></a>
    </form>
</div>
<?php
if (!empty($_POST["prenom"])){
$user = $_POST["prenom"];
echo "$user";
}
?>

<a class="btn btn-default">test</a>
<?php
getFooter();
?>