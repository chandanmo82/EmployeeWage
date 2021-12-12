<?php
echo "Welcome to Employee Wage Problem <br>";
$IS_PARTTIME = 1;
$IS_FULLTIME = 2;
$EMP_RATE_PER_HOUR = 20;
$NUM_OF_WORKING_DAYS = 20;
$empHrs = 0;
$empWage = 0;
$totalEmpwage = 0;
for ($day = 0;$day < $NUM_OF_WORKING_DAYS;$day++){
    $check = rand(0,2);
    switch ($check){
        case $IS_PARTTIME :
            $empHrs = 4;
            break;
        case $IS_FULLTIME :
            $empHrs = 8;
            break;
        default :
            $empHrs = 0;         
    }
    $empWage = $EMP_RATE_PER_HOUR *  $empHrs;
    $totalEmpwage += $empWage;
    echo "Employee Wage :". $empWage;
    echo "<br>";
}
echo "Total Employee Wage :".$totalEmpwage;
?>