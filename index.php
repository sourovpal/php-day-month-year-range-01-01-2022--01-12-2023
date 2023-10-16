<?php

function getDatesFromRange($start, $end, $format = 'Y-m-d') {
    $array = array();
    $interval = new DateInterval('P1M'); // D M Y

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach($period as $date) { 
        $array[] = $date->format($format); 
    }
    return $array;
}

print_r(getDatesFromRange('05-12-2022', '01-11-2023', 'd-m-Y'));

?>
