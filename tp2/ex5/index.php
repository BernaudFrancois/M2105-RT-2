<!DOCTYPE html>
<?php
include "../function.php";
getHeader(True,"test");
$_SESSION = array(); //détruit variable de session
session_destroy();
?>
<div class="container">
    <div class="alert alert-info">
        <p>vous avez été correctement déco</p>
        <a class="btn btn-default" href="../ex2/index.php">se connecter a nouveau</a>
    </div>

</div>
<?php
?>


<?php
getFooter();
?>