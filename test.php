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
    <form action="ex1.php" method="post">
        <p>nb lignes: <input type="number" name="$nbLignes" /></p>
        <p>nb colonnes : <input type="number" name="$nbCols" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

</div>
<?php
addition (5, 6);
createHtmlTable(10,12);


?>
</body>
</html>