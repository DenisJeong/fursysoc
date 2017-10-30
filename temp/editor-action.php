<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
include_once "inc/db_helper.php";
include_once "inc/helper.php";
?>
<?php
if ($_GET['id'] > 0) {
	$id = $_GET['id'];
}
$writer_name = $_POST['writer_name'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];
?>
<?php
if ($password != $password_confirm) {
	redirect(false, '패스워드가 서로 맞지 않습니다.');
	exit;
}
if (!$title) {
	redirect(false, '글제목이 없습니다.');
	exit;
}
if (!$content) {
	redirect(false,'글내용이 없습니다.');
	exit;
}
?>
<?php
echo($id);
if ($id > 0) {
	echo ('<h1>' . '게시물이 수정되었습니다.' . '</h1>');
} else {
	echo ('<h1>' . '게시물이 작성되었습니다.' . '</h1>');
}
?>
<!doctype html>
<html>
<h1><?=$writer_name?></h1>
<h1><?=$password?></h1>  
<h1><?=$password_confirm?></h1>
<h1><?=$email?></h1>
<h1><?=$title?></h1>
<h1><?=$content?></h1>
<div class="clearfix">
	<div class="pull-right">
		<a href="list.php">목록보기</a>
		<a href="editor.php">다시쓰기</a>
	</div>
</div>
</html>
<?php
db_open();
if ($id > 0) {
	// update
	$sql = "UPDATE posts 
			SET writer_name = '$writer_name', password = '$password', email = '$email', title = '$title', content = '$content' 
			WHERE id = $id" ;
	//var_dump($sql);
} else {
	$sql = "INSERT INTO posts (
			writer_name, password, email, title, content
			) VALUES (
			'%s', password('%s'), '%s', '%s', '%s')";	
}
$input = array($writer_name, $password, $email, $title, $content);
$result = db_query($sql, $input);

db_close()
?>