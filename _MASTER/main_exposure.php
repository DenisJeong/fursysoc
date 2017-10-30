<?php 
include 'include/login-check.php';
include 'include/header.php';
include '../include/db_conn.php';
include_once "../include/db_helper.php";
include_once "../include/helper.php";

db_open();
$sql = "SELECT * FROM work_ex WHERE main = 'main'";
$input = array();
$result = db_query($sql, $input);

?>

<body class="admin catalog">

<div class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1 class="admin_title">Fursys Office Consultant 관리자</h1>	

	<h2>메인노출 설정하기</h2>
	<p class="update_link"><a href="editor.php">리퍼런스 추가하기</a></p>
	
	<table>
		<tr>
			<th>삭제하기</th>
			<th>id</th>
			<th>logo</th>
			<th>현재 메인 노출 기업명 (4개만 가능)</th>
		</tr>
		<?php
		
		foreach ($result as $work_ex) {
		//var_dump($post);
		//$main = $work_ex['main'];
		$id = $work_ex['id'];
		$logo = $work_ex['logo'];
		$name = $work_ex['name'];
		//var_dump($logo);
		?>
		<tr>
			<td class="id_num">
				<form method="post" action="main-exposure-action.php?id=<?=$id?>">
					<button type="submit class="btn btn-primary"">삭제하기</button>
				</form>
			</td>
			<td class="id_num"><?=$id?></td>
			<td class="work-thumbs2" ><img src="../images/<?=$logo?>" alt="이미지 없음"></td>
			<td class="company_name"><a href="editor.php?id=<?=$id?>"><?=$name?></a></td>
		</tr>
	<?php } ?>
	</table>
	<br>
	<br>
	<table>
		<tr>
			<th>추가하기</th>
			<th>id</th>
			<th>logo</th>
			<th>메인노출 기업 설정하기</th>
		</tr>
		<?php
		
		$sql = "SELECT * FROM work_ex WHERE main is null or main = ''";
		$input = array();
		$result = db_query($sql, $input);


		foreach ($result as $work_ex) {
		//var_dump($post);
		$main = $work_ex['main'];
		$id = $work_ex['id'];
		$logo = $work_ex['logo'];
		$name = $work_ex['name'];
		//var_dump($logo);
		?>
		<tr>
			<td class="id_num">
				<form method="post" action="main-exposure-action.php?id=<?=$id?>">
					<button type="submit" class="btn btn-primary">추가하기</button>
				</form>
			</td>
			<td class="id_num"><?=$id?></td>
			<td class="work-thumbs2" ><img src="../images/<?=$logo?>" alt="이미지 없음"></td>
			<td class="company_name"><a href="editor.php?id=<?=$id?>"><?=$name?></a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>

<?php db_close(); ?>