<?php include 'include/header.php' ?>
    <div class="content clear-fix">
        <div class="content-head">
            <h1>Service</h1>
            <ul>
                <li><a href="con-office.php">사무환경 컨설팅</a></li>
                <li><a href="con-analys.php">분석방법</a></li>
                <li><a href="con-case-study.php">실적/사례</a></li>
            </ul>
        </div>
        <div class="content-body" style="text-align: right;">
            <img src="images/<?php echo $_GET['data']?>.png " />
        </div>
    </div>
<?php include 'include/catalog.php' ?>
<?php include 'include/footer.php' ?>