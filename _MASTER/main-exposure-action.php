<!doctype html>
<html>
<head>
		<meta charset="UTF-8">
        <title>Fursys OC</title>
        <link rel="stylesheet" href="../css/style.css">
</head>

<?php
include_once "../include/db_helper.php";
include_once "../include/helper.php";

db_open();

$id = $_GET['id'];
$sql = "SELECT * FROM work_ex WHERE id = '$id'";
$input = array();
$result = db_query($sql, $input);
$work_ex = $result[0];

var_dump($work_ex['main']);



if ($work_ex['main'] == 'main') {
	$sql = "UPDATE work_ex SET main = null WHERE id = '$id'";
} else {
	$sql = "UPDATE work_ex SET main = 'main' WHERE id = '$id'";
}
$input = array();
$result = db_query($sql, $input);

//var_dump($result);

if ($work_ex['main'] == 'main') {
		redirect(false,'메인에서 삭제가 완료됐습니다.');
		exit;
} else {
		redirect(false,'메인에 추가됐습니다.');
		exit;
}
db_close();





