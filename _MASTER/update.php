<?php 
include 'include/login-check.php';
include 'include/header.php';
include '../include/db_conn.php';
include_once "../include/db_helper.php";
include_once "../include/helper.php";

db_open();
$sql = "SELECT * FROM work_ex";
$input = array();
$result = db_query($sql, $input);

?>

<body class="admin catalog">

<div class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1 class="admin_title">Fursys Office Consultant 관리자</h1>	

	<h2>리퍼런스 목록</h2>
	<p class="update_link"><a href="editor.php">리퍼런스 추가하기</a></p>
	<p class="update_link"><a href="main_exposure.php">메인노출 설정하기</a></p>
	<table>
		<tr>
			<th>메인노출</th>
			<th>id</th>
			<th>logo</th>
			<th>기업명</th>
		</tr>
		<?php
		foreach ($result as $work_ex) {
		//var_dump($post);
		$main = $work_ex['main'];
		$id = $work_ex['id'];
		$logo = $work_ex['logo'];
		$name = $work_ex['name'];
		//var_dump($logo);
		?>
		<tr>
			<td class="id_num"><h3><?=$main?></h3></td>
			<td class="id_num"><?=$id?></td>
			<td class="work-thumbs2" ><img src="../images/<?=$logo?>" alt="이미지 없음"></td>
			<td class="company_name"><a href="editor.php?id=<?=$id?>"><?=$name?></a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>

<?php db_close(); ?>