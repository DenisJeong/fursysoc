<!doctype html>
<html>
<head>
		<meta charset="UTF-8">
        <title>Fursys OC</title>
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
include_once "../include/db_helper.php";
include_once "../include/helper.php";

db_open();
//var_dump((int)$_GET['id']);
if (!empty($_GET['id'])){
	$id = (int) $_GET['id'];
	//var_dump($id);
	$sql = "SELECT * FROM work_ex WHERE id = $id";
	$input = array();
	$result = db_query($sql, $input);
	$post = $result[0];
} else {
	$id = null;
}


$name = $_POST['name'];
$division = $_POST['division'];
$subject = $_POST['subject'];
$term = $_POST['term'];
$category = $_POST['category'];
$link = $_POST['link'];

/* 이미지 파일 업로드*/
$original_file_name = $_FILES['logo']['name']; // 파일의 원본 이름
$type = $_FILES['logo']['type'];		 // 파일의 형식
$size = $_FILES['logo']['size'];		 // 파일의 용량
$tmp_name = $_FILES['logo']['tmp_name']; // 서버에 업로드 된 임시파일 이름

if (!$original_file_name || $size < 1) {
	echo ("<h2>로고 이미지 파일을 업로드 해주세요.</h2>");
} else {
	echo("<h2>업로드 된 파일 정보</h2>");
	printf('original_file_name: %s<br>', $original_file_name);
	printf('type: %s<br>', $type);
	printf('size: %s<br>', $size);
	printf('tmp_name: %s<br>', $tmp_name);

}

/*파일이 저장될 폴더 준비하기*/
//DocumentRoot 안에서의 저장폴더 경로를 구성한다.
$upload_dir_uri = "/images/";
//DocumentRoot의 실제 경로를 얻어와서 전체 경로를 구성한다.
$upload_dir_path = $_SERVER['DOCUMENT_ROOT'] . $upload_dir_uri;
//폴더가 없으면 중지.
if (!is_dir($upload_dir_path)) {
	echo ("<h2>폴더가 없습니다. 관리자에게 문의해주세요.</h2>");
} 

/*파일의 저장될 경로명 준비하기*/
//파일의 확장자는 원본 이름에서 추출한다.
$p = strrpos($original_file_name, '.');
$l = strlen($original_file_name);
$file_ext = strtolower(substr($original_file_name, $p, $l - $p));

$file_name = '';	// 파일이 복사될 이름
$upload_uri = '';	// 파일이 복사될 웹 상의 경로
$upload_path = '';  // 파일이 복사될 전체 경로

// 일단 무한루프
//파일이 복사될 이름
$file_name = 'works-logo-' . date('Y-m-d') . $file_ext;
for ($i = 1; $i > 0 ; $i++) { 
	
	//파일이 복사될 웹 상의 경로
	$upload_uri = $upload_dir_uri . '/' . $file_name;
	//파일이 복사될 전체 경로
	$upload_path = $upload_dir_path . '/' . $file_name;

	//같은 이름의 파일이 없다면 반복 종료
	if (!is_file($upload_path)) {
	 	break;
	 } else {
	 	$file_name = 'works-logo-' . date('Y-m-d') . "-{$i}" . $file_ext;
	 }
}

/*파일 복사하기*/
$is_copy = move_uploaded_file($tmp_name, $upload_path);
if ($is_copy) {
	chmod($upload_path, 0777);
	echo('<h2>업로드 성공</h2>');
} else {
	echo('<h2>업로드 실패</h2>');
}




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
?>
<div class="comment">
	<h1>
		<?php
		if ($id) {
			echo ('리퍼런스가 수정되었습니다.');
		} else {
			echo ('리퍼런스가 작성되었습니다.');
		}
		?>
	</h1>
</div>

<?php
$sql_body = "SET name = '%s', division = '%s', subject = '%s', term = '%s', category = '%s', logo = '%s', link = '%s'  ";

if ($id) {
	// 업데이트
	$sql = "UPDATE work_ex
			{$sql_body}
			WHERE id = $id" ;
} else {
	$sql = "INSERT INTO work_ex {$sql_body}";
}

$input = array($name, $division, $subject, $term, $category, $file_name, $link);
$result = db_query($sql, $input);
if (!$id) {
	$id = mysqli_insert_id($_DB);	
}

echo "id: " . $id;

db_close();
?>

<h2><?=$name?></h2>
<h2><?=$division?></h2>  
<h2><?=$subject?></h2>
<h2><?=$term?></h2>
<h2><?=$category?></h2>
<h2><?=$original_file_name?></h2>
<h2><?=$link?></h2>

<div class="clearfix">
	<div class="pull-right">
		<a href="editor.php" class="btn btn-primary">더 입력하기</a>
		<a href="editor.php?id=<?=$id?>" class="btn btn-primary">다시 입력하기</a>
		<a href="update.php" class="btn btn-primary">리스트 보기</a>
	</div>
</div>
</body>
</html>