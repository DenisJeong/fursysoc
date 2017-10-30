<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>관리자：Fursys Office Consultant</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../plugin/jquery/jquery-2.1.1.min.js"></script>
        <link rel="stylesheet" href="../plugin/jquery.bxslider/jquery.bxslider.css">
        <script src="../plugin/jquery.bxslider/jquery.bxslider.js"></script>
        <script src="../plugin/canvas2image/canvas2image.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            //관리자 테이블 꾸미기
            $('.admin table tr:even').addClass('even');

            $('.delete').click(function(){
                return confirm('정말 삭제하시겠습니까? 복구할 수 없습니다.');
            });
        });
        </script>
    </head>
