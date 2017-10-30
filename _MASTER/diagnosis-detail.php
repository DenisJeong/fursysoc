<?php include 'include/login-check.php' ?>
<?php include 'include/header.php' ?>
<?php include '../include/db_conn.php' ?>

<body class="admin diagnosis-detail">

<div class="wrapper">
    <?php include 'include/nav.php' ?>

    <h1>Fursys Office Consulting Group 관리자</h1>

    <div>
        <h2>컨설팅 / 카달로그 신청 내역</h2>
        <?php
        $query = "SELECT * FROM  `diagnosis` WHERE  `no` = {$_GET['no']}";

        $result = $mysqli->query($query);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
    
        <img src="<?php echo $row['radar_graph_src'] ?>" />
        <table>
            <tr>
                <th>등록일</th>
                <th>회사명</th>
                <th>회사주소</th>
            </tr>
            <tr>
                <td><?php echo $row['reg_date'] ?></td>
                <td><?php echo $row['company'] ?></td>
                <td><?php echo $row['address'] ?></td>
            </tr>
            <tr>
                <th>성명</th>
                <th>부서/직책</th>
                <th>전화번호</th>
            </tr>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['phone'] ?></td>
            </tr>
            <tr>
                <th>이메일</th>
                <th>직원수</th>
                <th>층수</th>
            </tr>
            <tr>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['employees'] ?></td>
                <td><?php echo $row['floor'] ?></td>
            </tr>
            <tr>
                <th>리모델링</th>
                <th>스마트오피스</th>
                <th></th>
            </tr>
            <tr>
                <td><?php echo $row['remodeling'] ?></td>
                <td><?php echo $row['smart_office'] ?></td>
                <td></td>
            </tr>
            <tr>
                <th>공간계획</th>
                <th>기능지원</th>
                <th>변화준비</th>
            </tr>
            <tr>
                <td><?php echo $row['space_1'] + $row['space_2'] + $row['space_3'] + $row['space_4'] + $row['space_5'] ?></td>
                <td><?php echo $row['features_1'] + $row['features_2'] + $row['features_3'] + $row['features_4'] + $row['features_5'] ?></td>
                <td><?php echo $row['change_1'] + $row['change_2'] + $row['change_3'] + $row['change_4'] + $row['change_5'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
<div>
</body>
</html>