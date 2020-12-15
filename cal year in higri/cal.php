<?php
//   AH = (CE − 622) × 33 ÷ 32
$year = $_POST[year];
$higri =  ($year - 622) * 33 / 32;

echo ("the year in higri =  ".$higri);


?>