<?php

$degree  = $_POST[degree];
$degreeType = $_POST[degreeType];
$f = 0;
$c = 0;
$k = 0;
/*
Degrees Celsius=([°F]−32)×5/9

Fahrenheit=([°C]∗9/5)+32
kelvins=[°C]+273.15
*/

if($degreeType == 'C'){
    $c = $degree;
    $f = ($degree * 9 / 5) +32;
    $k = $degree + 273;
}elseif($degreeType == 'F'){
    $c = ($degree - 32) * 5/9;
    $f = $degree;
    $k = $c + 273;
}elseif($degreeType == 'K'){
    $c = $degree - 273;
    $f = ($c * 9 / 5) +32;
    $k = $degree;
}

echo("<h2> c :  $c  c</h2> <br>");
echo("<h2> f :  $f  f</h2> <br>");
echo("<h2> k :  $k   k</h2> <br>");

?>