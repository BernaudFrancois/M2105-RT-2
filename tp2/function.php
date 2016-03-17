<?php

function getHeader($start, $title)
{
    if ($start === True) {
        session_start();
    }
    echo "
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>{$title}</title>
  <link rel='stylesheet' type='text/css' href='./style/bootstrap.min.css'/>
</head>
<body>";
}
function getFooter(){
    echo "</body>
</html>";
}
