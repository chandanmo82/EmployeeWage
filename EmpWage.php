<?php
echo "Welcome to Employee Wage Problem <br>";
$IS_PARTTIME = 1;
$IS_FULLTIME = 2;
$EMP_RATE_PER_HOUR = 20;
$NUM_OF_WORKING_DAYS = 20;
$MAX_HRS_IN_MONTH = 100;
$empHrs = 0;
$empWage = 0;
$totalEmpHrs = 0;
$totalWorkingDays = 0;
$totalEmpwage = 0;
while ($totalEmpHrs <= $MAX_HRS_IN_MONTH && $totalWorkingDays <$NUM_OF_WORKING_DAYS ){
    $totalWorkingDays++;
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
    $totalEmpHrs += $empHrs;
    echo "Day : ". $totalWorkingDays ;
    echo "  Employee Hours : ". $empHrs;
    echo "<br>";
}
$totalEmpwage = $totalEmpHrs * $EMP_RATE_PER_HOUR;
echo "Total Employee Wage :".$totalEmpwage;
?>