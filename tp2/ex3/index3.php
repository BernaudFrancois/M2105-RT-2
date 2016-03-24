<!DOCTYPE html>
<?php
include "../function.php";
getHeader(True,"test");

?>
<div>
    <form action="cookie3.php" method="post">
        <fieldset>
            <legend>nav préféré</legend>
            <input name="browser" value="Chrome" type="radio"><label>Chrome</label>
            <input name="browser" value="firefox" type="radio"><label>firefox</label>
            <input type="radio" name="browser" value="IE"><label>IE</label>
            <input type="radio" name="browser" value="opera"><label>opera</label>
            <input type="radio" name="browser" value="autre"><label>autre</label>
            <input class="btn btn-default" type="submit" value="OK">
        </fieldset>
    </form>
</div>
<?php


    ?>


<?php
getFooter();
?>