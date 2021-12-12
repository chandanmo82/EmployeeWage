<?php
echo "Welcome to Employee Wage Problem <br>";
$check = rand(0,2);
$IS_PARTTIME = 1;
$IS_FULLTIME = 2;
$EMP_RATE_PER_HOUR = 20;
$empHrs = 0;
$empWage = 0;

if ($check == $IS_PARTTIME){
    $empHrs = 4;
}
elseif ($check == $IS_FULLTIME) {
    $empHrs = 8;
}
else {
    $empHrs = 0;
}
$empWage = $EMP_RATE_PER_HOUR *  $empHrs;
echo "Employee Wage :". $empWage;  
?>