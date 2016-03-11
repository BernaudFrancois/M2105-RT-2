<?php
include "ex1.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>
    <form action="test.php" method="post">
        <label for="value">fact : </label>
        <input type="number" name="value" id="value" style="display: block;">

        <input type="submit" value="OK">
    </form>

</div>
<?php
var_dump($_POST["value"]);
if(!empty($_POST)) {

    fact($_POST["value"]);
}


?>
</body>
</html>