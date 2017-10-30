<?php 
include 'include/login-check.php';
include 'include/header.php';
include '../include/db_conn.php';
include_once "../include/db_helper.php";
include_once "../include/helper.php";

if (isset($_GET['id']) && $_GET['id'] > 0) {
	$id = $_GET['id'];

	db_open();
	$sql = "SELECT * FROM work_ex WHERE id = '$id'";
	$input = array();
	$result = db_query($sql, $input);
	$work_ex = $result[0];
	//var_dump($work_ex);
	db_close();

}else{
	$id = 0;
}
?>

<body class="admin catalog">

<div id="wrapper" class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1 class="admin_title">Fursys Office Consultant 관리자</h1>

    <div>
        <h2>
        	<?php
				if ($id > 0) {
				 	echo "리퍼런스 수정하기";
				 } else {
				 	echo "리퍼런스 입력하기";
				 }
			?>
        </h2>
    </div>

<div class="editor_body">
	<div class="editor_body_inner">
		<div class='container'>
			<form method="post" action="<?php if ($id > 0) { ?>
										editor-action.php?id=<?=$id?>
										<?php } else { ?>
										editor-action.php<?php ;}?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">회사명</label>
					<input type="text" name="name" id="name" class="form-control" 
							value="<?php if ($id > 0) {
											echo $work_ex['name'];
											} else {"";}
											?>">
				</div>
				<div class="form-group">
					<label for="division">기업구분</label>
					<input type="text" name="division" id="division" class="form-control" placeholder="예)외국계기업, 공기업, 병원 등"
							value="<?php if ($id > 0) {
										echo $work_ex['division'];
										} else {"기업구분(외국계기업, 공기업, 병원 등)";}
										?>">
				</div>
				<div class="form-group">
					<label for="subject">프로젝트내용</label>
					<input type="text" name="subject" id="subject" class="form-control" placeholder="예)사옥 이전에 따른 사무환경 제안 및 가구 렌탈"
							value="<?php if ($id > 0) {
										echo $work_ex['subject'];
										} else {"";}
										?>">
				</div>
				<div class="form-group">
					<label for="term">프로젝트기간</label>
					<input type="text" name="term" id="term" class="form-control" placeholder="예)3개월"
							value="<?php if ($id > 0) {
										echo $work_ex['term'];
										} else {"";}
										?>">
				</div>
				<div class="form-group">
					<label for="category">카테고리</label>
					<input type="text" name="category" id="category" class="form-control" placeholder="예)사무환경 개선"
							value="<?php if ($id > 0) {
										echo $work_ex['category'];
										} else {"";}
										?>">
				</div>
				<div class="form-group">
					<label for="logo">로고이미지 업로드</label>
				<!--	<?php // if ($id > 0) {?>
					<input type="text" name="logo" id="logo" class="form-control" placeholder="예)사무환경 개선"
							value="<?//=$work_ex['logo']?>">	
					<?php // } else {?> -->
					<input type="file" name="logo" id="logo" class="form-control" title="반드시 422x272 pixel로 작업해서 올릴 것!!">
					<?php // } ?>
				</div> 
				<div class="form-group">
					<label for="link">상세페이지 연결</label>
					<input type="text" name="link" id="link" class="form-control" placeholder="현재 사용 안함"
							value="<?php if ($id > 0) {
										echo $work_ex['link'];
										} else {"";}
										?>">
				<div class="form-group">
					<label for="main_exposure">메인페이지 노출 여부</label>
					<input type="checkbox" name="main_exposure" id="main_exposure" class="form-control" value="main" >
				</div> 
				</div>	
				<button type="submit" class="btn btn-primary"><?php if ($id > 0) {echo ('수정완료');
																		} else {
																			echo ('작성완료');
																		}
																?>
				</button>
			</form>
		</div>
	</div>
</div>	
</body>
</html> 
