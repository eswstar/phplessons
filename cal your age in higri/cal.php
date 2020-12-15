<?php

$age  = $_POST[age];
$days = $age * 365.25;
$hours = $days * 24 ; 
$mins = $hours * 60;
$secs = $mins * 60;
$higri = $days / 354 ;

echo(" your age in years = $age <br> ");
echo(" your age in days = $days <br>" );
echo(" your age in hours = $hours <br>" );
echo(" your age in mins = $mins <br>" );
echo(" your age in secs = $secs <br>");
echo(" your age in higri = $higri <br> ");



?>