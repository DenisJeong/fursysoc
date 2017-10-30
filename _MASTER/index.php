<?php include 'include/login-check.php' ?>
<?php include 'include/header.php' ?>
<?php include '../include/db_conn.php' ?>

<body class="admin index">

<div class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1 class="admin_title">Fursys Office Consultant 관리자</h1>

    <div>
        <h2>방문상담 / 카달로그 신청 내역</h2>
        <?php
        $query = "SELECT * FROM `catalog`";

        $result = $mysqli->query($query);

        //print_r($result);
        //true : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 1 [type] => 0 )
        //false : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 0 [type] => 0 )

        if ($result->num_rows > 0) {
            $message = $result->num_rows."건의 신청 내역이 있습니다.";
        } else {
            $message = "신청 내역이 없습니다.";
        }?>
        <p><?php echo $message;?></p>
    </div>

    <div>
        <h2>Diagnosis 내역</h2>
        <?php
        $query = "SELECT * FROM `diagnosis`";

        $result = $mysqli->query($query);

        //print_r($result);
        //true : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 1 [type] => 0 )
        //false : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 0 [type] => 0 )

        if ($result->num_rows > 0) {
            $message = $result->num_rows."건의 신청 내역이 있습니다.";
        } else {
            $message = "신청 내역이 없습니다.";
        }?>
        <p><?php echo $message;?></p>
    </div>

    <div>
        <h2>링크</h2>
        <ul>
            <li><a href="http://weblog.cafe24.com/">카페24 웹로그</a></li>
            <li><a href="http://google.com/analytics">Google Analytics</a></li>
        </ul>

    </div>
<div>
</body>
</html>
