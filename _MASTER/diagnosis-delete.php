<?php
include 'include/login-check.php';
include '../include/db_conn.php';

$query = "DELETE FROM `diagnosis` WHERE `no` = {$_GET['no']}";

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