<?php
include 'boot.php';
include_once 'functions.php';

var_dump($_GET['page']);

// if (empty($_GET['page'])) {
// 	$page = 1;
// } else {
// 	$page = $_GET['page'];	
// }

// 삼항식
// $page = true ? 1 : 0; // 1
$page = (empty($_GET['page'])) ? 1 : $_GET['page'];
$page = $_GET['page'] ?: 1;
?>

<h1>This is <?= $page ?> page!</h1>

<p>Welcome!</p>
