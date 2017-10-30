<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
if (isset($_GET['id']) && $_GET['id'] > 0) {
	$id = $_GET['id'];
}else{
	$id = 0;
}
echo($id);
?>
<!doctype html>
<html>
<body>
<div class='container'>
	<form method="post" action="<?php if ($id > 0) { ?>
	editor-action.php?id=<?=$id?>
	<?php } else { ?>
	editor-action.php<?php ;}?>">
<!-- <input type="text" name="id" value="<?= $post['id'] ?>"> -->
		<div class="form-group">
			<label for="writer_name">이름</label>
			<input type="text" name="writer_name" id="writer_name" class="form-control" 
					value="
					<?php if ($id > 0) { 
						$post['writer_name'];
					} else {"";} 
					?>">
		</div>
		<div class="form-group">
			<label for="password">비밀번호</label>
			<input type="password" name="password" id="password" class="form-control" />
		</div>
		<div class="form-group">
			<label for="password_confirm">비밀번호확인</label>
			<input type="password" name="password_confirm" id="password_confirm" class="form-control" />
		</div>
		<div class="form-group">
			<label for="email">이메일</label>
			<input type="text" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="title">글제목</label>
			<input type="text" name="title" id="title" class="form-control" />
		</div>
		<div class="form-group">
			<label for="content">글내용</label>
			<textarea type="text" name="content" id="content" class="form-control"></textarea>
		<button type="submit" class="btn btn-primary">작성완료</button>

	</form>
</div>

</body>
</html> 

<?php
	// 이름란

	// 비밀번호란

	// 비밀번호확인 란

	// 이메일 란

	// 글제목 란

	// 첨부파일 란

	// 글내용 란

	// 버튼들