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
//var_dump((int)$_GET['id']);
if (!empty($_GET['id'])){
	$id = (int) $_GET['id'];
	//var_dump($id);
	$sql = "SELECT * FROM work_ex WHERE id = '$id'";
	$input = array();
	$result = db_query($sql, $input);
	$work_ex = $result[0];
} else {
	$id = null;
}

$name 		= $_POST['name'];
$division 	= $_POST['division'];
$subject 	= $_POST['subject'];
$term		= $_POST['term'];
$category 	= $_POST['category'];
$link 		= $_POST['link'];
$main 		= $_POST['main_exposure'];


/* 이미지 파일 업로드*/
$original_file_name = $_FILES['logo']['name']; // 파일의 원본 이름
$type = $_FILES['logo']['type'];		 // 파일의 형식
$size = $_FILES['logo']['size'];		 // 파일의 용량
$tmp_name = $_FILES['logo']['tmp_name']; // 서버에 업로드 된 임시파일 이름
$file_name = '';
if ($work_ex['logo']) {
	$uploaded_file_name = '../images/' . $work_ex['logo'];
	//var_dump($uploaded_file_name);
}
$upload_data = single_upload($original_file_name, $type, $size, $tmp_name, $file_name);
$file_name = $upload_data['file_name'];
//var_dump($file_name);

if (!$upload_data) {
	redirect(false, '업로드에 실패했습니다.');
	exit;
} else {
  /*echo("<h2>업로드 된 파일 정보</h2>");
	echo("<pre>");
	print_r($upload_data);
	echo("</pre>");
  */
}
// 이미지 파일 업로드 끝


if (!$name) {
	redirect(false, '회사명이 없습니다.');
	exit;
}
if (!$division) {
	redirect(false,'회사구분이 없습니다.');
	exit;
}
if (!$subject) {
	redirect(false,'프로젝트내용이 없습니다.');
	exit;
}
if (!$term) {
	redirect(false,'프로젝트기간이 없습니다.');
	exit;
}
if (!$original_file_name) {
	redirect(false,'로고이미지를 업로드해 주세요.');
	exit;
}
?>

<body class="admin catalog">

<div class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1 class="admin_title">Fursys Office Consultant 관리자</h1>	

	<h2>리퍼런스 입력 결과</h2>
	<div class="admin-table">
		<table class="table">
			<tr>
				<th>결과 메시지</th>
				<th>
					<?php
						if ($id) {
							echo ('리퍼런스가 수정되었습니다.');
						} else {
							echo ('리퍼런스가 작성되었습니다.');
						}
					?>
				</th>
			</tr>
			<tr>
				<td>회사명</td>
				<td><?=$name?></td>
			</tr>
			<tr>
				<td>기업구분</td>
				<td><?=$division?></td>
			</tr>
			<tr>
				<td>프로젝트 내용</td>
				<td><?=$subject?></td>
			</tr>
			<tr>
				<td>프로젝트 기간</td>
				<td><?=$term?></td>
			</tr>
			<tr>
				<td>카테고리</td>
				<td><?=$category?></td>
			</tr>
			<tr>
				<td>로고 이미지</td>
				<td><img src="../images/<?=$file_name?>" alt="로고없음"></td>
			</tr>
			<tr>
				<td>상세페이지 연결 주소</td>
				<td>현재 사용하지 않는 기능</td>
			</tr>
			<tr>
				<td>메인페이지 노출여부</td>
				<td><?php if (!$main) {
					echo ("메인 페이지에 노출되지 않습니다.");
				} else {
					echo ("메인 페이지에 노출됩니다.");
				}?>
				</td>
			</tr>
		</table>
	</div>


	<?php
	$sql_body = "SET name = '%s', division = '%s', subject = '%s', term = '%s', category = '%s', logo = '%s', link = '%s', main = '%s' ";

	if ($id) {
		// 업데이트
		$sql = "UPDATE work_ex
				{$sql_body}
				WHERE id = $id" ;
		// 기존 로고 삭제
		unlink($uploaded_file_name);			

	} else {
		// 리퍼런스 추가하기
		$sql = "INSERT INTO work_ex {$sql_body}";
	}

	$input = array($name, $division, $subject, $term, $category, $file_name, $link, $main);
	//var_dump($file_name);
	$result = db_query($sql, $input);
	if (!$id) {
		$id = mysqli_insert_id($_DB);	
	}

	//echo "id: " . $id;

	db_close();
	?>
	
	<div class="clearfix">
		<form method="post" action="editor.php">
			<button type="submit" class="btn btn-primary">새로 입력하기
			</button>
		</form>
	</div>
	<div class="clearfix">
		<form method="post" action="editor.php?id=<?=$id?>">
			<button type="submit" class="btn btn-primary">수정하기
			</button>
		</form>
	</div>
	<div class="clearfix">
		<form method="post" action="update.php">
			<button type="submit" class="btn btn-primary">목록보기
			</button>
		</form>
	</div>
</div>
</body>
</html>