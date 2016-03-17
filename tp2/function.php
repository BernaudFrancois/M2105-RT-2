<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 17/03/2016
 * Time: 15:27
 */

function getHeader($start, $title)
{
    if ($start == True){
        session_start();
    }
    echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>$title</title>
  <style rel='stylesheet' type='text/css' href='style/boostrap.min.css'
</head>
<body>

</body>
</html>";
}