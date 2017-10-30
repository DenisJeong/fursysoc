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
$database = array(
	'ch_ch4300wah1711_14f' => array(
		// 제품코드는 품목구분_제조사에서 부여한 코드_구매년월_제품위치 층수
		'image' => 'product-ex-01.jpg',
		'color' => '457',
		'standard' => '680 x 560 ~ 635 x 1165 ~ 1240',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'CH4300WAH1712' => array(
		'code' => 'CH4300WAH1712',
		'image' => 'product-ex-02.jpg',
		'color' => '557',
		'standard' => '680 x 560 ~ 635 x 1165 ~ 1240',
		'purchase-date' => '2014-11-30',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'CH4300WAH1713' => array(
		'code' => 'CH4300WAH1713',
		'image' => 'product-ex-03.jpg',
		'color' => '757',
		'standard' => '680 x 560 ~ 635 x 1165 ~ 1240',
		'purchase-date' => '2014-11-30',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	)
);

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
} elseif ($item == 'cab') {
	$item = '캐비닛';
} elseif ($item == 'tbl') {
	$item = '테이블';
} elseif ($item == 'sfa') {
	$item = '소파';
} elseif ($item == 'etc') {
	$item = '기타가구비품';
} elseif ($item == 'tv') {
	$item = '텔레비전수상기';
} elseif ($item == 'ref') {
	$item = '냉장고';
} elseif ($item == 'pur') {
	$item = '정수기';
} else {
	$item = '품목 미지정';
}

// 구매년월 얻기
$p3 = mb_substr($code, $p2-4, 2);
$p4 = mb_substr($code, $p2-2, 2);
$purchase_date = "20" . $p3 . '년 ' . $p4 . '월';

// 제품위치 얻기
$location = '시그니처타워 ' . mb_strtoupper(mb_substr($code, $p2+1));



/*echo '<pre>';
print_r($database);
echo '</pre>';

echo '<pre>';
print_r($product);
echo '</pre>';*/
?>
<div class="product-wrap  cf">
	<div class="product-wrap_left">
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
				<th>제조사 제품코드</th>
				<td><a href="http://naver.com/abc.php?code=<?=$code?>"><?php echo $product_code?></td>
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
				<th>규격</th>
				<td><?php echo $product['standard']?></td>
			</tr>
			<tr>
				<th>제품위치</th>
				<td><?php echo $location?></td>
			</tr>
		</table>
		<table class="product-table">
			<tr>
				<th>구매년월</th>
				<td><?php echo $purchase_date?></td>
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