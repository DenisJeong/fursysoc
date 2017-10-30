<?php
//$domain = "http://fursysofficeconsultant.com/";
$domain = "http://localhost/170912_fursysoc/";
$url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url = str_replace($domain, "", $url);
$page_code = str_replace(".php", "", $url);

if (!$page_code) {
    $page_code = "index";
}
switch ($page_code) {
    case 'office-consultant':
        $page_title = "OFFICE CONSULTANT：";
        break;
    case 'con-office':
        $page_title = "사무환경 컨설팅：";
        break;
    case 'con-analys':
        $page_title = "분석방법：";
        break;
    case 'con-case-study':
        $page_title = "실적사례：";
        break;
    case 'works':
        $page_title = "Works：";
        break;
    case 'diagnosis':
        $page_title = "사무환경자가진단：";
        break;
    case 'contact':
        $page_title = "Contact：";
        break;
    default:
        $page_title = "";
        break;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title;?>Fursys Office Consultant</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="plugin/jquery/jquery-2.1.1.min.js"></script>
        <script src="js/common.js"></script>
        <link rel="stylesheet" href="plugin/jquery.bxslider/jquery.bxslider.css">
        <script src="plugin/jquery.bxslider/jquery.bxslider.js"></script>
        <script src="plugin/Chart.js-master/Chart.min.js"></script>
        <script src="plugin/canvas2image/canvas2image.js"></script>
        <meta name="naver-site-verification" content="053e6e21c2e83d20249ad5eae35181a4da496580"/>
    </head>
<body class="<?php echo $page_code;?>">
<div class="header-wrapper">
    <div class="header clear-fix">
        <a class="logo" href="./">
            <img src="images/logo.png" />
        </a>
        <ul class="nav">
            <li>
                <a href="office-consultant.php">OFFICE CONSULTANT</a>
            </li>
            <li>
                <a href="con-office.php">CONSULTING</a>
            </li>
            <li>
                <a href="works.php">WORKS</a>
            </li>
            <li>
                <a href="diagnosis.php">사무환경자가진단</a>
            </li>
            <li>
                <a href="http://fursysocmall.com" target="_blank">MALL</a>
            </li>
            <li>
                <a href="contact.php">CONTACT</a>
            </li>
        </ul>
    </div>
</div>
<div class="main-wrapper clear-fix">