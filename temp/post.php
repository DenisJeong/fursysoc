<?php header('Content-Type: text/html; charset=UTF-8');
include_once "inc/db_helper.php";
include_once "inc/helper.php";

$id = (int) $_GET['id'];


db_open();
$sql = "SELECT * FROM posts WHERE id = '$id'";
$input = array();
$result = db_query($sql, $input);
$post = $result[0];
db_close()
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title><?= $post['title'] ?></title>
</head>
<body>
	<h1><?= $post['title'] ?></h1>

	<ul>
		<li>작성자: <?= $post['writer_name'] ?></li>
		<li>이메일: <?= $post['email'] ?></li>
		<li>작성: <?= $post['created_at'] ?></li>
		<?php if ($post['updated_at'] > 0) { ?>
			<li>수정: <?= $post['updated_at'] ?></li>
		<?php } ?>
	</ul>

	<?= nl2br($post['content']) ?>
	<a href="editor.php?id=<?=$post['id']?>">수정하기</a>
	<a href="delete.php?id=<?=$post['id']?>">삭제하기</a>

</body>
</html>