<?php
require('init.php');
require('helpers.php');
require('function.php');

$is_auth = rand(0, 1);
$user_name = 'Артур';
$category = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
$products = [
	[
		'name' => '2014 Rossignol District Snowboard',
		'category' => 'Доски и лыжи',
		'price' => 10999,
		'url_img' => 'img/lot-1.jpg',
		'date_finish' => '2019-10-12'
	],
	[
		'name' => 'DC Ply Mens 2016/2017 Snowboard',
		'category' => 'Доски и лыжи',
		'price' => 159999,
		'url_img' => 'img/lot-2.jpg',
		'date_finish' => '2019-10-05'
	],
	[
		'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
		'category' => 'Крепления',
		'price' => 8000,
		'url_img' => 'img/lot-3.jpg',
		'date_finish' => '2019-10-25'
	],
	[
		'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
		'category' => 'Ботинки',
		'price' => 10999,
		'url_img' => 'img/lot-4.jpg',
		'date_finish' => '2019-10-15'
	],
	[
		'name' => 'Куртка для сноуборда DC Mutiny Charocal',
		'category' => 'Одежда',
		'price' => 7500,
		'url_img' => 'img/lot-5.jpg',
		'date_finish' => '2019-10-30'
	],
	[
		'name' => 'Маска Oakley Canopy',
		'category' => 'Разное',
		'price' => 5400,
		'url_img' => 'img/lot-6.jpg',
		'date_finish' => '2019-10-3'
	]
];

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
		'user_name' => $user_name,
		'is_auth' => $is_auth
	]
);

print($layout_content);
