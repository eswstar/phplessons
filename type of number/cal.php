<?php
//  4/2    0 
$num = $_POST[num];
$res  = $num%2;

if($res == 0){
    echo ("<h1>عدد زوجي</h1>");
}else{
    echo ("<h1>عدد فردي</h1>");
}

?>