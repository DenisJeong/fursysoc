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
	'ped_br0011511_14f' => array(
		// 제품코드는 품목구분_제조사에서 부여한 코드_구매년월_제품위치 층수
		'image' => 'b-001.jpg',
		'color' => '블랙',
		'size' => '680 x 560 ~ 635 x 1165 ~ 1240',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'ped_gpn03021402_14f' => array(
		'image' => 'f-001.jpg',
		'color' => 'WW',
		'size' => '400x580x560',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'ch_leap211001510_14f' => array(
		'image' => 'st-001.jpg',
		'color' => 'Gray',
		'size' => '',
		'manufacturer' => '스틸케이스',
		'where-to-buy' => '수입가구 온라인 쇼핑몰',
		'after-service' => ''
	),
	'ch_thk131011211_14f' => array(
		'image' => 'st-002.jpg',
		'color' => 'Beige',
		'size' => '',
		'manufacturer' => '스틸케이스',
		'where-to-buy' => '수입가구 온라인 쇼핑몰',
		'after-service' => ''
	),
	'ch_t101201_14f' => array(
		'image' => 's-001.jpg',
		'color' => '스카이블루',
		'size' => '',
		'manufacturer' => '㈜시디즈',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'ch_ch05010911_14f' => array(
		'image' => 'f-002.jpg',
		'color' => 'F251',
		'size' => '590x535x960~965',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'ch_ch4300ah1001_14f' => array(
		'image' => 'f-003.jpg',
		'color' => '556B',
		'size' => '680x560~635x1165~1240',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'ch_br002abc0808_14f' => array(
		'image' => 'b-002.jpg',
		'color' => '검정가죽',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'ch_uc805sz0805_14f' => array(
		'image' => 'b-003.jpg',
		'color' => 'BK',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'ch_etcch1305_14f' => array(
		'image' => 'n-001.jpg',
		'color' => '다양함',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'ch_490410c1512_14f' => array(
		'image' => 'st-003.jpg',
		'color' => 'Blue',
		'size' => '',
		'manufacturer' => '스틸케이스',
		'where-to-buy' => '수입가구 온라인 쇼핑몰',
		'after-service' => ''
	),
	'ch_m502f1112_14f' => array(
		'image' => 's-002.jpg',
		'color' => '그레이',
		'size' => '',
		'manufacturer' => '㈜시디즈',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'ch_ch0020md1304_14f' => array(
		'image' => 'f-004.jpg',
		'color' => 'CR834C',
		'size' => '',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'ch_ch22001305_14f' => array(
		'image' => 'f-005.jpg',
		'color' => '127',
		'size' => '',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'dsk_abc1102_14f' => array(
		'image' => 'b-004.jpg',
		'color' => 'Mild gray',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'ped_fap03030611_14f' => array(
		'image' => 'f-006.jpg',
		'color' => 'WWTS',
		'size' => '400x600x630',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'dsk_dskset1101_14f' => array(
		'image' => 'b-005.jpg',
		'color' => 'Cherry',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'dsk_dskset0810_14f' => array(
		'image' => 'n-002.jpg',
		'color' => 'Cherry',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'dsk_w14000611_14f' => array(
		'image' => 'b-006.jpg',
		'color' => 'Mild Gray',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'dsk_gdn014m0808_14f' => array(
		'image' => 'f-007.jpg',
		'color' => 'WW',
		'size' => '1400x750x720',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'cab_h11230505_14f' => array(
		'image' => 'b-007.jpg',
		'color' => 'Mild Gray',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'cab_cac083d1311_14f' => array(
		'image' => 'f-008.jpg',
		'color' => 'WW',
		'size' => '800x414x1161',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'cab_asd0312_14f' => array(
		'image' => 'n-003.jpg',
		'color' => 'Gray',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'cab_cac086d1601_14f' => array(
		'image' => 'f-009.jpg',
		'color' => 'WW',
		'size' => '800x414x2253',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'cab_asd0809_14f' => array(
		'image' => 'b-008.jpg',
		'color' => 'WW',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'cab_br2221701_14f' => array(
		'image' => 'b-009.jpg',
		'color' => 'IV',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'cab_excab0051212_14f' => array(
		'image' => 'b-010.jpg',
		'color' => '월넛',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'cab_excabg0121501_14f' => array(
		'image' => 'b-011.jpg',
		'color' => '월넛',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'cab_brdrobe0010606_14f' => array(
		'image' => 'b-012.jpg',
		'color' => '월넛',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'tbl_okamura0011307_14f' => array(
		'image' => 'o-001.jpg',
		'color' => '화이트',
		'size' => '',
		'manufacturer' => '오카무라',
		'where-to-buy' => '수입가구 온라인 쇼핑몰',
		'after-service' => ''
	),
	'tbl_br01231411_14f' => array(
		'image' => 'b-013.jpg',
		'color' => '화이트',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'tbl_etc1230707_14f' => array(
		'image' => 'n-004.jpg',
		'color' => '화이트',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'tbl_rnd1235540101_14f' => array(
		'image' => 'n-004.jpg',
		'color' => '화이트',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'tbl_jkl1231212_14f' => array(
		'image' => 'f-010.jpg',
		'color' => 'WW',
		'size' => '800x720',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'tbl_asdf45611410_14f' => array(
		'image' => 'b-014.jpg',
		'color' => '화이트',
		'size' => '',
		'manufacturer' => '보루네오',
		'where-to-buy' => '보루네오 ABC대리점',
		'after-service' => '1577-8066'
	),
	'tbl_12d2fe1212_14f' => array(
		'image' => 'n-006.jpg',
		'color' => '화이트',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'tbl_car0201510_14f' => array(
		'image' => 'f-011.jpg',
		'color' => 'WW',
		'size' => '2000x1100x720',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'tbl_ordercar0321210_14f' => array(
		'image' => 'f-012.jpg',
		'color' => 'WW',
		'size' => '3200x1200x720',
		'manufacturer' => '㈜퍼시스',
		'where-to-buy' => '퍼시스오피스컨설팅그룹',
		'after-service' => '정진덕 010-9268-6874'
	),
	'tv_un55ku6300f1605_14f' => array(
		'image' => 'ETC-001.jpg',
		'color' => '블랙',
		'size' => '55인치',
		'manufacturer' => '삼성전자',
		'where-to-buy' => '삼성전자 중구대리점',
		'after-service' => '1588-3366'
	),
	'ref_rf85k9002s8 t90001512_14f' => array(
		'image' => 'ETC-002.jpg',
		'color' => 'Metal silver',
		'size' => '908x1825x932',
		'manufacturer' => '삼성전자',
		'where-to-buy' => '삼성전자 중구대리점',
		'after-service' => '1588-3366'
	),
	'beam_eh-tw6700w1411_14f' => array(
		'image' => 'ETC-003.jpg',
		'color' => 'Black',
		'size' => '',
		'manufacturer' => 'EPSON',
		'where-to-buy' => '',
		'after-service' => ''
	),
	'pur_cpl-390l1701_14f' => array(
		'image' => 'ETC-004.jpg',
		'color' => 'white',
		'size' => '315x520x545',
		'manufacturer' => '코웨이',
		'where-to-buy' => '',
		'after-service' => '관리자 010-9999-9999'
	),
	'prt_SL-X4220RX1512_14f' => array(
		'image' => 'ETC-005.jpg',
		'color' => '상부 블랙 하부 화이트',
		'size' => '566x640x879',
		'manufacturer' => '삼성전자',
		'where-to-buy' => '삼성전자 중구대리점',
		'after-service' => '1588-3366'
	),
	'shr_pk-810cd0911_14f' => array(
		'image' => 'ETC-006.jpg',
		'color' => '화이트',
		'size' => '330x240x395',
		'manufacturer' => '현대오피스',
		'where-to-buy' => '현대오피스 온라인 몰',
		'after-service' => '1566-3445(내선 4번)'
	),
	'' => array(
		'image' => '.jpg',
		'color' => '',
		'size' => '',
		'manufacturer' => '',
		'where-to-buy' => '',
		'after-service' => ''
	
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
} elseif ($item == 'prt') {
	$item = '복합기';
} elseif ($item == 'beam') {
	$item = '빔프로젝터';
} elseif ($item == 'shr') {
	$item = '문서세단기';
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