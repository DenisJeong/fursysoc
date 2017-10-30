<?php include 'include/login-check.php' ?>
<?php include 'include/header.php' ?>
<?php include '../include/db_conn.php' ?>

<body class="admin catalog">

<div class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1 class="admin_title">Fursys Office Consultant 관리자</h1>

    <div>
        <h2>Diagnosis 내역</h2>
        <?php
        $query = "SELECT * FROM `diagnosis` ORDER BY `no` DESC";

        $result = $mysqli->query($query);

        //print_r($result);
        //true : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 1 [type] => 0 )
        //false : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 0 [type] => 0 )

        if ($result->num_rows > 0) {
            $message = $result->num_rows."건의 Diagnosis 내역이 있습니다.";
        } else {
            $message = "Diagnosis 내역이 없습니다.";
        }?>
        <p><?php echo $message;?></p>
        <table>
            <colgroup>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <tr>
                <th>등록일</th>
                <th>회사명</th>
                <th>회사주소</th>
                <th>성명</th>
                <th>부서/직책</th>
                <th>전화번호</th>
                <th>이메일</th>
                <th></th>
            </tr>
            <?php
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['reg_date'] ?></td>
                <td><?php echo $row['company'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <a href="diagnosis-detail.php?no=<?php echo $row['no']?>">자세히 보기</a>
                    <a class="delete" href="diagnosis-delete.php?no=<?php echo $row['no']?>">삭제</a>
                </td>
            </tr>
           <?php } ?>
        </table>
    </div>
<div>
</body>
</html>