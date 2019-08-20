<?php

function formatAmount($number)
{
	$number = ceil($number);
	if ($number >= 1000) {
		$number =	number_format($number, 0, '', ' ');
	}
	return $number . ' ₽';
}

function esc($str) {
	$content = strip_tags($str);
	return $content;
}

function time_counter($date) {
  $result = [];
  $date = strtotime($date);
  if(gettype($date) === 'integer') {
    $diff = $date - time();
    $hour = floor($diff / 3600);
    $minute = ($diff / 60) % 60;
    array_push($result, $hour, $minute);

    return $result;
  }
die('Ошибка: Неправельный формат даты');
}
