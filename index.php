<?php
require('helpers.php');

$is_auth = rand(0, 1);
$user_name = 'Артур';
$category = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
$products = [
	[
		'name' => '2014 Rossignol District Snowboard',
		'category' => 'Доски и лыжи',
		'price' => 10999,
		'url_img' => 'img/lot-1.jpg'
	],
	[
		'name' => 'DC Ply Mens 2016/2017 Snowboard',
		'category' => 'Доски и лыжи',
		'price' => 159999,
		'url_img' => 'img/lot-2.jpg'
	],
	[
		'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
		'category' => 'Крепления',
		'price' => 8000,
		'url_img' => 'img/lot-3.jpg'
	],
	[
		'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
		'category' => 'Ботинки',
		'price' => 10999,
		'url_img' => 'img/lot-4.jpg'
	],
	[
		'name' => 'Куртка для сноуборда DC Mutiny Charocal',
		'category' => 'Одежда',
		'price' => 7500,
		'url_img' => 'img/lot-5.jpg'
	],
	[
		'name' => 'Маска Oakley Canopy',
		'category' => 'Разное',
		'price' => 5400,
		'url_img' => 'img/lot-6.jpg'
	]
];

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

$page_content = include_template(
	'main.php',
	[
		'category' => $category,
		'products' => $products
	]
);
$layout_content = include_template(
	'layout.php',
	[
		'main' => $page_content, 'category' => $category,
		'title_page' => 'Главная',
		'user_name' => $user_name
	]
);

print($layout_content);
