<?php header('Content-Type: text/html; charset=UTF-8');
include_once "inc/db_helper.php";
include_once "inc/helper.php";

db_open();
$sql = "SELECT * FROM posts";
$input = array();
$result = db_query($sql, $input);


	?>
	<table>
		<tr>
			<th>id</th>
			<th>작성자</th>
			<th>이메일</th>
			<th>글제목</th>
		</tr>
	<?php
	foreach ($result as $post) {
	//var_dump($post);
	$id = $post['id'];
	$writer_name = $post['writer_name'];
	$email = $post['email'];
	$title = $post['title'];
	?>
		<tr>
			<td><?=$id?></td>
			<td><a href="post.php?id=<?=$post['id']?>"><?=$writer_name?></a></td>
			<td><?=$email?></td>
			<td><a href="post.php?id=<?=$post['id']?>"><?=$title?></a></td>
		</tr>
	<?php
	}
	?>
	</table>

<?php

db_close()
?>

<!doctype html>
<html>
<body>



</body>
</html> 

<?php
