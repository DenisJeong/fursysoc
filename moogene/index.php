<!DOCTYPE html>
<html lang="ko-KR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>퍼시스 오피스컨설턴트</title>
	<link rel="stylesheet" href="./css/fonts.css" type="text/css" media="all" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery.watermark.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
<?php
include_once 'include/database.php';

$code = $_GET['product'];

$product = $database[$code];

// 제조사 코드 얻기
$p1 = mb_strpos($code, "_");
$p2 = mb_strrpos($code, "_");

$product_code = mb_strtoupper(mb_substr($code, $p1+1, $p2-($p1+5)));

// 제품 품목 얻기
$item = mb_substr($code, 0, $p1);

if ($item == 'ch') {
	$item = '의자';
} elseif ($item == 'dsk') {
	$item = '책상';
} elseif ($item == 'ped') {
	$item = '서랍';
} elseif ($item == 'bench') {
	$item = '실험대';
} elseif ($item == 'sink') {
	$item = '싱크대';
} elseif ($item == 'cab') {
	$item = '캐비닛';
} elseif ($item == 'tbl') {
	$item = '테이블';
} elseif ($item == 'sfa') {
	$item = '소파';
} elseif ($item == 'etc') {
	$item = '기타가구비품';
} elseif ($item == 'tv') {
	$item = '텔레비전';
} elseif ($item == 'ref') {
	$item = '냉장고';
} elseif ($item == 'pur') {
	$item = '정수기';
} elseif ($item == 'prt') {
	$item = '복합기';
} elseif ($item == 'beam') {
	$item = '빔프로젝터';
} elseif ($item == 'shr') {
	$item = '문서세단기';
} elseif ($item == 'nb') {
	$item = '노트북';
} elseif ($item == 'etc') {
	$item = '기타';
} else {
	$item = '품목 미지정';
}

// 도입년월 얻기
$p3 = mb_substr($code, $p2-4, 2);
$p4 = mb_substr($code, $p2-2, 2);
$adoption_date = "20" . $p3 . '년 ' . $p4 . '월';

// 제품위치 얻기
$location = '경기바이오센터 ' . mb_strtoupper(mb_substr($code, $p2+1));

// 렌탈 구매 구분
if ($product['rental-or-purchase'] == '렌탈') {
	$rental = $product['rental-or-purchase'];
	} else {
		$rental = 0;
	} 
// 렌탈 중 가구와 전자제품 구분
if ($product['where-to-buy'] == '한국렌탈') {
	$electronics = $product['where-to-buy'];
	} else {
		$electronics = 0;
	}
//var_dump ($electronics);

/*echo '<pre>';
print_r($database);
echo '</pre>';

echo '<pre>';
print_r($product);
echo '</pre>';*/
?>
<div class="product-wrap  cf">
	<div class="product-wrap_left">
		<img class="product-background_for-narrow" src="./images/product-background.png"  />
		<img class="product-image" src="./images/<?php echo $product['image']?>" />
		<img class="product-co-logo" src="./images/product-co-logo.jpg" />
	</div>
	<div class="product-wrap-right">
		<table class="product-table">
			<!--<tr>
				<th>제품 관리번호</th>
				<td><?//php echo $code?></td>
			</tr>-->
			<tr>
				<th>제품코드</th>
				<td><a href="login.php?product=<?=$code?>"><?php echo $product_code?></td>
			</tr>
			<tr>
				<th>품목</th>
				<td><?php echo $item?></td>
			</tr>
			<tr>
				<th>색상코드</th>
				<td><?php echo $product['color']?></td>
			</tr>
			<tr>
				<th>제품크기(WxDxH)</th>
				<td><?php echo $product['size']?></td>
			</tr>
			<tr>
				<th>제품위치</th>
				<td><?php echo $location?></td>
			</tr>
		</table>
		<table class="product-table">
			<tr>
				<th>렌탈/구매 구분</th>
				<td><?php echo $product['rental-or-purchase']?></td>
			</tr>
			<tr>
				<th>도입년월</th>
				<td><?php echo $adoption_date?></td>
			</tr>
			<tr>
				<th>제조사</th>
				<td><?php echo $product['manufacturer']?></td>
			</tr>
			<tr>
				<th>구매처</th>
				<td><?php echo $product['where-to-buy']?></td>
			</tr>
			<tr>
				<th>A/S 담당자</th>
				<td><?php echo $product['after-service']?></td>
			</tr>
		</table>
		<a class="btn  btn-close">닫기</a>
	</div>
</div>
</body>
</html>