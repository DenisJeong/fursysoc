<?php
echo '<meta charset="UTF-8">';
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

include 'include/db_conn.php';

$회사명 = $mysqli->real_escape_string($_POST['회사명']);
$회사주소 = $mysqli->real_escape_string($_POST['회사주소']);
$성명 = $mysqli->real_escape_string($_POST['성명']);
$부서및직책 = $mysqli->real_escape_string($_POST['부서및직책']);
$전화번호 = $mysqli->real_escape_string($_POST['전화번호']);
$이메일 = $mysqli->real_escape_string($_POST['이메일']);
$공간계획_1 = $mysqli->real_escape_string($_POST['공간계획-1']);
$공간계획_2 = $mysqli->real_escape_string($_POST['공간계획-2']);
$공간계획_3 = $mysqli->real_escape_string($_POST['공간계획-3']);
$공간계획_4 = $mysqli->real_escape_string($_POST['공간계획-4']);
$공간계획_5 = $mysqli->real_escape_string($_POST['공간계획-5']);
$기능지원_1 = $mysqli->real_escape_string($_POST['기능지원-1']);
$기능지원_2 = $mysqli->real_escape_string($_POST['기능지원-2']);
$기능지원_3 = $mysqli->real_escape_string($_POST['기능지원-3']);
$기능지원_4 = $mysqli->real_escape_string($_POST['기능지원-4']);
$기능지원_5 = $mysqli->real_escape_string($_POST['기능지원-5']);
$변화준비_1 = $mysqli->real_escape_string($_POST['변화준비-1']);
$변화준비_2 = $mysqli->real_escape_string($_POST['변화준비-2']);
$변화준비_3 = $mysqli->real_escape_string($_POST['변화준비-3']);
$변화준비_4 = $mysqli->real_escape_string($_POST['변화준비-4']);
$변화준비_5 = $mysqli->real_escape_string($_POST['변화준비-5']);
$직원수 = $mysqli->real_escape_string($_POST['직원수']);
$층수 = $mysqli->real_escape_string($_POST['층수']);
$리모델링 = $mysqli->real_escape_string($_POST['리모델링']);
$스마트오피스 = $mysqli->real_escape_string($_POST['스마트오피스']);
$진단_결과_그림 = $mysqli->real_escape_string($_POST['진단-결과-그림']);

if ($회사명 and $회사주소 and $성명 and $이메일 and $전화번호) {
    $query = "INSERT INTO `diagnosis` (`reg_date`, `company`, `address`, `name`, `title`, `phone`, `email`, `space_1`, `space_2`, `space_3`, `space_4`, `space_5`, `features_1`, `features_2`, `features_3`, `features_4`, `features_5`, `change_1`, `change_2`, `change_3`, `change_4`, `change_5`, `employees`, `floor`, `remodeling`, `smart_office`, `radar_graph_src`)
        VALUES (CURDATE(), '$회사명', '$회사주소', '$성명', '$부서및직책', '$전화번호', '$이메일', '$공간계획_1', '$공간계획_2', '$공간계획_3', '$공간계획_4', '$공간계획_5', '$기능지원_1', '$기능지원_2', '$기능지원_3', '$기능지원_4', '$기능지원_5', '$변화준비_1', '$변화준비_2', '$변화준비_3', '$변화준비_4', '$변화준비_5', '$직원수', '$층수', '$리모델링', '$스마트오피스', '$진단_결과_그림');";

    $result = $mysqli->query($query);


    $공간계획 = $공간계획_1 + $공간계획_2 + $공간계획_3 + $공간계획_4 + $공간계획_5;
    $기능지원 = $기능지원_1 + $기능지원_2 + $기능지원_3 + $기능지원_4 + $기능지원_5;
    $변화준비 = $변화준비_1 + $변화준비_2 + $변화준비_3 + $변화준비_4 + $변화준비_5;

    $사무환경_성숙도 = $공간계획 + $기능지원;

    if ($사무환경_성숙도 >= 37) {
        $사무환경_성숙도_msg = '전체적으로 균형을 이루는 매우 성숙한 사무환경입니다.';
    } elseif ($사무환경_성숙도 >= 33 && $사무환경_성숙도 <= 36) {
        $사무환경_성숙도_msg = '비교적 우수한 환경이며, 어느 한 축의 부족함이 없는지 추가적인 분석이 필요합니다.';
    } elseif ($사무환경_성숙도 >= 24 && $사무환경_성숙도 <= 32) {
        $사무환경_성숙도_msg = '보통 수준인 현재 환경에 대한 진단과 개선을 통해 변화의 효과를 기대할 수 있습니다.';
    } elseif ($사무환경_성숙도 <= 23) {
        $사무환경_성숙도_msg = '비효율적인 업무환경으로 시급한 개선과 변화가 요구됩니다.';
    }

    if ($변화준비 >= 20) {
        $변화준비_msg = '귀사는 사무환경 변화에 대한 준비 정도가 매우 높습니다. 사무환경 변화의 성공적 추진과 안착이 예상됩니다.';
    } elseif ($변화준비 >= 11 && $변화준비 <= 19) {
        $변화준비_msg = '귀사의 경영진은 좋은 사무환경이 조직 및 업무만족도에 끼치는 영향에 대해 긍정적으로 평가하고 있습니다. 사무환경컨설팅을 통해 귀 사의 사무환경을 개선해 보십시오.';
    } elseif ($변화준비 <= 10) {
        $변화준비_msg = '귀사는 사무환경 변화에 대해 다소 보수적인 기업 문화를 가지고 있습니다. 좋은 사무환경은 업무 만족도에 영향을 미치고 이를 통해 업무 생산성을 향상시킬 수 있습니다. 사무환경컨설팅을 통해 귀 사의 사무환경을 개선해 보십시오.';
    }

    $text = "
        <link rel='stylesheet' href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css'>
        <div style='width: 800px; margin: 0 auto; font-family: \"Nanum Gothic\", sans-serif;'>
            <div style='border-bottom: 1px solid #999; padding-bottom: .5em;'>
                <a href='http://fursysofficeconsultant.com/'>
                    <img src='http://fursysofficeconsultant.com/images/logo.png' style='border: none;' />
                </a>
            </div>
            <h2 style='font-size: 16px;'>자가 진단 결과</h2>
            <div style='height: 400px;'>
                <img alt='진단결과그래프' src='".$진단_결과_그림."' style='width: 400px; float: left; display: block;' />
                <div style='width: 390px; float: right;'>
                    <table style='background-color: white; border-collapse: collapse; width: 100%;'>
                        <colgroup>
                            <col width='15%'>
                            <col width='85%'>
                        </colgroup>
                        <tbody>
                            <tr>
                                <td colspan='2' style='border: none; line-height: 1.5em; padding: 1em 0;'><h3 style='margin: 0; font-size: 15px;'>사무환경 성숙도</h3></td>
                            </tr>
                            <tr>
                                <td style='border-top: 2px solid #92b732; border-bottom: 2px solid #92b732; padding: 1em 0; line-height: 1.5em; text-align: center; background-color: #eee; font-size: 13px;'>".$사무환경_성숙도."</td>
                                <td style='border-top: 2px solid #92b732; border-bottom: 2px solid #92b732; padding: .5em; line-height: 1.5em; font-size: 13px;'>".$사무환경_성숙도_msg."</td>
                            </tr>
                        </tbody>
                    </table>
                    <table style='background-color: white; border-collapse: collapse; width: 100%;'>
                        <colgroup>
                            <col width='15%'>
                            <col width='85%'>
                        </colgroup>
                        <tbody>
                            <tr>
                                <td colspan='2' style='border: none; line-height: 1.5em; padding: 1em 0;'><h3 style='margin: 0; font-size: 15px;'>사무환경 변화 준비도</h3></td>
                            </tr>
                            <tr>
                                <td style='border-top: 2px solid #a76ea7; border-bottom: 2px solid #a76ea7; padding: 1em 0; line-height: 1.5em; text-align: center; background-color: #eee; font-size: 13px;'>".$변화준비."</td>
                                <td style='border-top: 2px solid #a76ea7; border-bottom: 2px solid #a76ea7; padding: .5em; line-height: 1.5em; font-size: 13px;'>".$변화준비_msg."</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div style='font-size: 13px; border-top: 1px solid #999; padding-top: .5em; margin-bottom: 3em;'>⒞ 2014. Fursys Office consultant All Rights reserved.│T. 02-2263-7613│F. 02-2263-7614│E. fursysoc@fursysoc.com</div>
        </div>
    ";

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
         
        $mail->SetFrom($이메일, $성명); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
        $mail->AddAddress('fursysoc@fursysoc.com'); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
        $mail->Subject = '[자가 진단 결과] '.$성명.' ('.$전화번호.')';    // 메일 제목
        $mail->MsgHTML($text);  // 메일 내용 (HTML 형식도 되고 그냥 일반 텍스트도 사용 가능함)

        $mail->Send();                // 실제로 메일을 보냄

    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
    //echo $text;
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
         
        $mail->SetFrom('fursysoc@fursysoc.com', '퍼시스 오피스 컨설턴트'); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
        $mail->AddAddress($이메일); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
        $mail->Subject = '[Fursys Office Consultant] '.$성명.' 님께 자가 진단 결과를 보내드립니다.';    // 메일 제목
        $mail->MsgHTML($text);  // 메일 내용 (HTML 형식도 되고 그냥 일반 텍스트도 사용 가능함)

        $mail->Send();                // 실제로 메일을 보냄

        echo '<script>
        alert("자가 진단 결과가 메일로 발송되었습니다.");
        history.back();
        </script>';

    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
    //echo $text;
}

