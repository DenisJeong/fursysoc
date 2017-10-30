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

<?php include_once 'include/database.php'; 
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
				<th>ID</th>
				<td>
					<input type="text" name="id" class="textbox" />
				</td>
			</tr>
			<tr>
				<th>PASSWORD</th>
				<td>
					<input type="password" name="password" class="textbox" />
				</td>
			</tr>
		</table>
			<tr>
				<form action="korearental.php?product=<?=$code?>" method="post">
					<input type="submit" name="login" value="로그인" />
			</tr>
			
		
	</div>
</div>
</body>
</html>