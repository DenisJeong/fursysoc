<?php
include '../include/db_conn.php';

$id = $mysqli->real_escape_string($_POST['id']);
$password = sha1($mysqli->real_escape_string($_POST['password']));

$query = "SELECT * FROM `user` WHERE `id` = '$id' AND `password` = '$password'";

$result = $mysqli->query($query);

//print_r($result);
//true : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 1 [type] => 0 )
//false : mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 0 [type] => 0 )

if ($result->num_rows > 0) {
    //true
    session_start();
    $_SESSION['id'] = $id;
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
} else {
    //false
    echo '<meta charset="UTF-8">';
    echo '<script>
        alert("로그인에 실패했습니다. 아이디와 패스워드를 확인하세요.");
        history.back();
    </script>';
}

