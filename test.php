<?php
include "ex1.php";
?>

<!doctype html>
<html>
<head>    
<meta charset="utf-8">    
</head>
<body>
<?php
addition (5, 6);
createHtmlTable(10,12);
<form method="GET" action="resultats.php">
    <label for="search">Rechercher sur mon site : </label><input type="text" name="search" id="search">
    <input type="submit" value="Rechercher">
</form>
    ?>
</body>
</html>