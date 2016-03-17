<?php

function getHeader($start, $title)
{
    if ($start === True) {
        session_start();
    }
    echo "
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>{$title}</title>
  <style rel='stylesheet' type='text/css' href='style/boostrap.min.css'/>
</head>
<body>"
}
function getFooter(){
    echo "</body>
</html>";
}
