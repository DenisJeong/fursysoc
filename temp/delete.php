<?php header('Content-Type: text/html; charset=UTF-8');
include_once "inc/db_helper.php";
include_once "inc/helper.php";

$id = (int) $_GET['id'];

db_open();
$sql = "DELETE FROM posts WHERE id = '$id'";
$input = array();
$result = db_query($sql, $input);
$post = $result[0];
redirect(false, '삭제가 완료됐습니다.');
db_close();
?>
