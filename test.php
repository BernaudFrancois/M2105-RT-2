<?php
include "ex1.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>hello world</h1>
<div>
    <form action="test.php" method="post">
        <label for="value">fact</label>
        <input type="number" name="value" id="value" style="display: block;">

        <input type="submit" value="OK">
    </form>

</div>
<?php
$valeur = $_POST["value"];
if(!empty($valeur)) {
    echo $valeur;


//fact($_POST[value]);

}
?>
</body>
</html>