<?php
include 'include/login-check.php';
include '../include/db_conn.php';

$query = "DELETE FROM `catalog` WHERE `phone` = "."'"."{$_GET['phone']}"."'"." AND `reg_date` = "."'"."{$_GET['reg_date']}"."'"." LIMIT 1";

/*print_r($query);
break;*/
$result = $mysqli->query($query);

if ($result) {
    echo '<meta charset="UTF-8">';
    echo '<script>
        alert("삭제 성공");
        history.back();
    </script>';
} else {
    echo '<meta charset="UTF-8">';
    echo '<script>
        alert("삭제 실패");
        history.back();
    </script>';
}