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
        <label for="nbLignes">nb lignes: </label>
        <input type="number" name="nbLignes" id="nbLignes" style="display: block;">
        <label for="nbCols">nb colonnes: </label>
        <input type="number" name="nbCols" id="nbCols" style="display: block;">
        <input type="submit" value="OK">
    </form>

</div>
<?php
if(!empty($_POST)) {
    createHtmlTable($_POST['nbLignes'], $_POST['nbCols']);
}


?>
</body>
</html>