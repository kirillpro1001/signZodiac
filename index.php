<?php

function zodiacSign ($date) {

$arrDate = explode(".", $date);
$newDate = date('Y-m-d',strtotime("$arrDate[2]-$arrDate[1]-$arrDate[0]"));
$year = $arrDate[2];

$zodiacIntervals = [
    'Водолей' => ['21.01', '19.02'],
    'Рыбы' => ['20.02', '20.03'],
    'Овен' => ['21.03', '20.04'],
    'Телец' => ['21.04', '21.05'],
    'Близнецы' => ['22.05', '21.06'],
    'Рак' => ['22.06', '22.07'],
    'Лев' => ['23.07', '21.08'],
    'Дева' => ['22.08', '23.09'],
    'Весы' => ['24.09', '23.10'],
    'Скорпион' => ['24.10', '22.11'],
    'Стрелец' => ['23.11', '22.12'],
    'Козерог' => ['23.12', '20.01'],
];

foreach ($zodiacIntervals as $key => $value) {
	$startDate = "$value[0].$year";
	$endDate = "$value[1].$year";

	$arrStartDate = explode(".", $startDate);
	$newStartDate = date('Y-m-d',strtotime("$arrStartDate[2]-$arrStartDate[1]-$arrStartDate[0]"));

	$arrEndDate = explode(".", $endDate);
	$newEndDate = date('Y-m-d',strtotime("$arrEndDate[2]-$arrEndDate[1]-$arrEndDate[0]"));

	if ($newDate >= $newStartDate && $newDate <= $newEndDate) {
		return $key;
	}

}

}

echo zodiacSign("21.07.1993");

?>