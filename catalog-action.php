<?php
echo '<meta charset="UTF-8">';
/*echo '<meta charset="UTF-8">';
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
include 'include/db_conn.php';

$name = $mysqli->real_escape_string($_POST['이름']);
$company = $mysqli->real_escape_string($_POST['회사명']);
$phone = $mysqli->real_escape_string($_POST['전화']);
$email = $mysqli->real_escape_string($_POST['이메일']);
$address = $mysqli->real_escape_string($_POST['주소']);
$purpose = $mysqli->real_escape_string($_POST['신청목적'][0].'<br/>'.$_POST['신청목적'][1].'<br/>'.$_POST['신청목적'][2].'<br/>'.$_POST['신청목적'][3]);
$description = $mysqli->real_escape_string($_POST['신청목적-서술']);

if ($name and $phone and $email and $address) {

  $query = "INSERT INTO `catalog` (`name`, `company`, `phone`, `email`, `address`, `purpose`, `description`, `reg_date`)
    VALUES ('$name', '$company', '$phone', '$email', '$address', '$purpose', '$description', CURDATE())";

  //$retval = mysql_query( $sql, $conn );
  $result = $mysqli->query($query);

  $text = '
  <meta charset="UTF-8">
  <table border="1" style="width: 800px;">
  <tr>
  <th>이름</th>
  <td>'.$name.'</td>
  </tr>
  <tr>
  <th>회사명</th>
  <td>'.$company.'</td>
  </tr>
  <tr>
  <th>전화</th>
  <td>'.$phone.'</td>
  </tr>
  <tr>
  <th>이메일</th>
  <td>'.$email.'</td>
  </tr>
  <tr>
  <th>주소</th>
  <td>'.$address.'</td>
  </tr>
  <tr>
  <th>신청목적</th>
  <td>'.$purpose.'</td>
  </tr>
  <tr>
  <th>신청목적(서술형)</th>
  <td>'.$description.'</td>
  </tr>
  </table>
  ';

  require("plugin/PHPMailer/class.phpmailer.php");
  $mail = new PHPMailer(true);
  $mail->IsSMTP();
  try {
    $mail->CharSet = "utf-8";
    
    $mail->Host = "smtp.cafe24.com"; // email 보낼때 사용할 서버를 지정
    $mail->SMTPAuth = true;       // SMTP 인증을 사용함
    $mail->Port = 587;            // email 보낼때 사용할 포트를 지정
    $mail->SMTPSecure = "tls";    // SSL을 사용함
    $mail->Username   = " jdjeong@fursysoc.com"; // Gmail 계정
    $mail->Password   = "aaplus2793";      // 패스워드
     
    $mail->SetFrom($email); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
    $mail->AddAddress('fursysoc@fursysoc.com', '퍼시스 오피스 컨설턴트'); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
    $mail->Subject = '[방문상담 / 카달로그 신청] '.$name.' ('.$phone.')';    // 메일 제목
    $mail->MsgHTML($text);  // 메일 내용 (HTML 형식도 되고 그냥 일반 텍스트도 사용 가능함)

    $mail->Send();                // 실제로 메일을 보냄

    echo '<script>
    alert("신청이 완료되었습니다.");
    history.back();
    </script>';

  } catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
  } catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
  }
} else {
  echo '<script>
    alert("필수 항목 중 빠뜨린 것이 있습니다.");
    history.back();
  </script>';
}