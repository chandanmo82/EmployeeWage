<?php
echo "Welcome to Employee Wage Problem <br>";
$check = rand(0,1);
$IS_PRESENT = 1;
$EMP_RATE_PER_HOUR = 20;
$empHrs = 0;
$empWage = 0;


if ($check == $IS_PRESENT){
    $empHrs = 8;
}
else{
    $empHrs = 0;
}
$empWage = $EMP_RATE_PER_HOUR *  $empHrs;
echo "Employee Wage :". $empWage;  
?>