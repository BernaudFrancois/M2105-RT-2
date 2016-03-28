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
function getQuestion(){
    $questions=array();

    $questions[]=["Quel est votre navigateur favori ?",
            ["multiple"=>false,
                    "reponses"=>["Chrome"=>1,"Firefox"=>2,"IE"=>3,"Opera"=>4,"Autre"=>10]
            ]
    ];

    $questions[]=["Quels réseaux sociaux utilisez vous fréquemment ?",
            ["multiple"=>true,
                    "reponses"=>["Facebook"=>1,"Twitter"=>2,"Badoo"=>3,"Google+"=>4,"Autre"=>10]
            ]
    ];
    return $questions;
}
function displayQuestion($question){
    $index = 1;
    foreach ($question as $question){
        echo "<fieldset><legend>Question n°$index</legend>";
        echo $question[0];
        $quest = $question[1];
        $coche="";
        if ($quest["multiple"] == True){
            $coche = "checked";
        }
        echo "<input type='checkbox' $coche> Question à réponses multiples";
        echo "<ul>";
        foreach ($quest["reponses"] as $arg=>$value){
            echo "<li>$arg</li>";
        }
        echo "</ul></fieldset>";
        $index++;
    }
}