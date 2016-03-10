<?php
function addition ($a,$b)
{
    $c=$a+$b;
    echo $c;
    echo "<br />";
}
/*
function soustraction ($a,$b)
{
    $c=$a-$b;
        echo $c;
    echo "<br />";
}
function multiplication ($a,$b)
{
    $c = $a*$b;
        echo $c;
    echo "<br />";
}
function division ($a,$b)
{
    $c = $a/$b;
    echo $c;
    echo "<br />";
}


function operation ($a, $b, $op)
{
switch ($op) {
    case "addition":
        addition ($a, $b);
        break;
          
    case "soustraction":
        soustraction ($a, $b);
        break;   
        
}
}
 */
function createHtmlTable ($nbLignes, $nbCols)
{
echo "<table border='3'>";
		for($i=0;$i<$nbLignes;$i++) {
			echo "<tr>";
			for($j=0;$j<$nbCols;$j++) {
				echo "<td>{$i} - {$j}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
    }
echo createHtmlTable()
?>