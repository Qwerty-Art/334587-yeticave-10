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