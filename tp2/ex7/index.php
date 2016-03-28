<!DOCTYPE html>
<?php
include "../function.php";
getHeader(true,"test");
$question = getQuestion();
displayQuestion($question);
?>


<?php
getFooter();
?>