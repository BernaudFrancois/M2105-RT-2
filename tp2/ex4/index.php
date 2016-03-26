<!DOCTYPE html>
<?php
include "../function.php";
getHeader(True,"test");

?>
<div>
    <form action="cookie.php" method="post">
        <fieldset>
            <legend>reseau social régulier</legend>
            <input name="network[]" value="facebook" type="checkbox"><label>Facebook</label>
            <input name="network[]" value="twitter" type="checkbox"><label>twitter</label>
            <input name="network[]" value="google+" type="checkbox"><label>google+</label>
            <input name="network[]" value="badoo" type="checkbox"><label>badoo</label>
            <input class="btn btn-default" type="submit" value="Valider">
        </fieldset>
    </form>
</div>
<?php
echo blabla
    ?>


<?php
getFooter();
?>