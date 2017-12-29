$(document).ready(function() {

    //인덱스 슬라이더
    $('.index .bxslider').bxSlider({
        auto: true,
        pause: 5000,
        autoHover: true,
    });

    //인덱스 Works 스타일 조정
    $('.index .works li:last').addClass('last');

    //Works 슬라이더
    $('.works-bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        mode: 'fade',
        controls: false
    });

    //인덱스에서 넘어온 Works에 해당하는 값을 받아, Works 페이지에서 클릭해줌.
    var works_from_index = $('.works input[name=data-slide-index]').val();
    $('.works a[data-slide-index='+works_from_index+']').click();

    //인덱스 스크롤 액션
/*            $(window).scroll(function(){
                var num = $('html, body').scrollTop();
                //console.log(num);
                if(num >= 50) {
                    $('.index .works ul').stop().slideDown();
                    $('.index .oc h2').stop().slideDown();
                } if(num < 50) {
                    $('.index .works ul').stop().slideUp();
                    $('.index .oc h2').stop().slideUp();
                    $('.index .oc h2 div').stop().slideUp();
                }
            });
            
            $('.index .works h2').click(function(){
                $('.index .works ul').stop().slideDown();
            });

            $('.index .oc h2').click(function(){
                $('.index .oc div').stop().slideDown();
            });
*/
    //인덱스 탭메뉴
    $('.btn-tab li').click(function(e) {
      $(this).addClass('on').siblings().removeClass('on');  
    });
    
    //첫번째 탭내용만 보이기  
    //$('.txt_wrap .txt:gt(0)').hide();
    
    $('.btn-tab li').click(function(e) {
        e.preventDefault();
        
        var num = $(this).index();//클릭요소가 형제요소 중 몇번째 인지
        //console.log(num);
        
        $('.tab-wrap .tab').eq(num).toggle().siblings().hide();
    });

    //준비 중인 기능
    $('.preparing').click(function(){
        alert('준비 중입니다.');
        return false;
    });

    //카탈로그 신청 토글
    $('.catalog-button').click(function(){
        $('.catalog-form-wrap').slideToggle('slow', function(){
            
        });
        return false;
    });

    //Diagnosis step-1 폼 밸리데이션
    $('.button.to-step-1').click(function(){
        $('.step-1').show();        
        $('.step-2').hide();
    });

    $('.button.to-step-2').click(function(){
        if ($('[name=agree-for-info]:checked').val() != 'y') {
            alert('개인정보 수집 동의 및 이용에 동의하지 않았습니다.');
        } else if (!$('#회사명').val()) {
            alert('회사명을 입력하지 않았습니다.');
        } else if (!$('#회사주소').val()) {
            alert('회사주소를 입력하지 않았습니다.');
        } else if (!$('#성명').val()) {
            alert('성명을 입력하지 않았습니다.');
        } else if (!$('#부서및직책').val()) {
            alert('부서/직책을 입력하지 않았습니다.');
        } else if (!$('#전화번호').val()) {
            alert('전화번호를 입력하지 않았습니다.');
        } else if (!$('#이메일').val()) {
            alert('이메일을 입력하지 않았습니다.');
        } else {
            $('.step-1').hide();
            $('.step-3').hide();
            $('.step-2').show();

        };
    });

    $('.button.to-step-3').click(function(){
        var 공간계획_1 = parseInt($('[name="공간계획-1"]:checked').val());
        var 공간계획_2 = parseInt($('[name="공간계획-2"]:checked').val());
        var 공간계획_3 = parseInt($('[name="공간계획-3"]:checked').val());
        var 공간계획_4 = parseInt($('[name="공간계획-4"]:checked').val());
        var 공간계획_5 = parseInt($('[name="공간계획-5"]:checked').val());


        if (공간계획_1 > 0 && 공간계획_2 > 0 && 공간계획_3 > 0 && 공간계획_4 > 0 && 공간계획_5 > 0) {
            $('.step-2').hide();
            $('.step-4').hide();
            $('.step-3').show();
        } else {
            alert('응답하지 않은 문항이 있습니다.');
        };
    });

    $('.button.to-step-4').click(function(){
        var 기능지원_1 = parseInt($('[name="기능지원-1"]:checked').val());
        var 기능지원_2 = parseInt($('[name="기능지원-2"]:checked').val());
        var 기능지원_3 = parseInt($('[name="기능지원-3"]:checked').val());
        var 기능지원_4 = parseInt($('[name="기능지원-4"]:checked').val());
        var 기능지원_5 = parseInt($('[name="기능지원-5"]:checked').val());

        if (기능지원_1 > 0 && 기능지원_2 > 0 && 기능지원_3 > 0 && 기능지원_4 > 0 && 기능지원_5 > 0) {
            $('.step-3').hide();
            $('.step-5').hide();
            $('.step-4').show();
        } else {
            alert('응답하지 않은 문항이 있습니다.');
        };
    });

    $('.button.to-step-5').click(function(){
        var 변화준비_1 = parseInt($('[name="변화준비-1"]:checked').val());
        var 변화준비_2 = parseInt($('[name="변화준비-2"]:checked').val());
        var 변화준비_3 = parseInt($('[name="변화준비-3"]:checked').val());
        var 변화준비_4 = parseInt($('[name="변화준비-4"]:checked').val());
        var 변화준비_5 = parseInt($('[name="변화준비-5"]:checked').val());

        if (변화준비_1 > 0 && 변화준비_2 > 0 && 변화준비_3 > 0 && 변화준비_4 > 0 && 변화준비_5 > 0) {
            $('.step-4').hide();
            $('.step-6').hide();
            $('.step-5').show();
        } else {
            alert('응답하지 않은 문항이 있습니다.');
        };
    });

    $('.button.to-step-6').click(function(){
        var 직원수 = $('[name="직원수"]:checked').val();
        var 층수 = $('[name="층수"]:checked').val();
        var 리모델링 = $('[name="리모델링"]:checked').val();
        var 스마트오피스 = $('[name="스마트오피스"]:checked').val();

        if (직원수 != undefined && 층수 != undefined && 리모델링 != undefined && 스마트오피스 != undefined ) {
            $('.step-5').hide();
            $('.step-6').show();

            var canvas = document.getElementById('myChart');
            var dataUrl = canvas.toDataURL();

            $('.diagnosis [name="진단-결과-그림"]').text(dataUrl);


        } else {
            alert('응답하지 않은 문항이 있습니다.');
        };
    });

    $('.point-radio').click(function(){

        var 공간계획_1 = parseInt($('[name="공간계획-1"]:checked').val());
        var 공간계획_2 = parseInt($('[name="공간계획-2"]:checked').val());
        var 공간계획_3 = parseInt($('[name="공간계획-3"]:checked').val());
        var 공간계획_4 = parseInt($('[name="공간계획-4"]:checked').val());
        var 공간계획_5 = parseInt($('[name="공간계획-5"]:checked').val());

        var 공간계획 = 공간계획_1 + 공간계획_2 + 공간계획_3 + 공간계획_4 + 공간계획_5;
        
        var 기능지원_1 = parseInt($('[name="기능지원-1"]:checked').val());
        var 기능지원_2 = parseInt($('[name="기능지원-2"]:checked').val());
        var 기능지원_3 = parseInt($('[name="기능지원-3"]:checked').val());
        var 기능지원_4 = parseInt($('[name="기능지원-4"]:checked').val());
        var 기능지원_5 = parseInt($('[name="기능지원-5"]:checked').val());

        var 기능지원 = 기능지원_1 + 기능지원_2 + 기능지원_3 + 기능지원_4 + 기능지원_5;

        var 변화준비_1 = parseInt($('[name="변화준비-1"]:checked').val());
        var 변화준비_2 = parseInt($('[name="변화준비-2"]:checked').val());
        var 변화준비_3 = parseInt($('[name="변화준비-3"]:checked').val());
        var 변화준비_4 = parseInt($('[name="변화준비-4"]:checked').val());
        var 변화준비_5 = parseInt($('[name="변화준비-5"]:checked').val());

        var 변화준비 = 변화준비_1 + 변화준비_2 + 변화준비_3 + 변화준비_4 + 변화준비_5;        

        var 사무환경_성숙도 = 공간계획 + 기능지원;

        $('#myChart').attr("width","400").attr("height","400");

        $('.table-1 .test-result--point').text(사무환경_성숙도+'점');
        //$('.table-2 .test-result--point').text(변화준비+'점');
        var 사무환경_성숙도_msg;

        if (사무환경_성숙도 >= 37) {
            사무환경_성숙도_msg = '전체적으로 균형을 이루는 매우 성숙한 사무환경입니다.';
        } else if (사무환경_성숙도 >= 33 && 사무환경_성숙도 <= 36) {
            사무환경_성숙도_msg = '비교적 우수한 환경이며, 어느 한 축의 부족함이 없는지 추가적인 분석이 필요합니다.';
        } else if (사무환경_성숙도 >= 24 && 사무환경_성숙도 <= 32) {
            사무환경_성숙도_msg = '보통 수준인 현재 환경에 대한 진단과 개선을 통해 변화의 효과를 기대할 수 있습니다.';
        } else if (사무환경_성숙도 <= 23) {
            사무환경_성숙도_msg = '비효율적인 업무환경으로 시급한 개선과 변화가 요구됩니다.';
        };

        $('.table-1 .test-result--explanation').text(사무환경_성숙도_msg);

        $('.table-1 .test-result--point').text(사무환경_성숙도+'점');

        var 변화준비_msg;

        if (변화준비 >= 20) {
            변화준비_msg = '귀사는 사무환경 변화에 대한 준비 정도가 매우 높습니다. 사무환경 변화의 성공적 추진과 안착이 예상됩니다.';
        } else if (변화준비 >= 11 && 변화준비 <= 19) {
            변화준비_msg = '귀사의 경영진은 좋은 사무환경이 조직 및 업무만족도에 끼치는 영향에 대해 긍정적으로 평가하고 있습니다.';
        } else if (변화준비 <= 10) {
            변화준비_msg = "귀사는 사무환경 변화에 대해 다소 보수적인 기업 문화를 가지고 있습니다. 좋은 사무환경은 업무 만족도에 영향을 미치고 이를 통해 업무 생산성을 향상시킬 수 있습니다. 사무환경컨설팅을 통해 귀 사의 사무환경을 개선해 보십시오."

        };

        $('.table-2 .test-result--explanation').text(변화준비_msg);
        $('.table-2 .test-result--point').text(변화준비+'점');

        //alert(사무환경_성숙도_msg);

        

        //Diagnosis Result (Radar Chart)
        var data = {
            labels: ["A 공간계획", "B 기능지원", "C 변화준비"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(146,183,50,0.7)",
                    strokeColor: "rgba(146,183,50,1)",
                    pointColor: "rgba(146,183,50,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(146,183,50,1)",
                    data: [공간계획, 기능지원, 변화준비]
                },
                {
                    label: "Default dataset",
                    fillColor: "rgba(255,255,255,0)",
                    strokeColor: "rgba(255,255,255,0)",
                    pointColor: "rgba(255,255,255,0)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(255,255,255,0)",
                    data: [25, 25, 25]
                }
            ]
        };

        var options = {
        showTooltips: false,
        scaleShowLine : true,
        angleShowLineOut : true,
        scaleShowLabels : false,
        scaleBeginAtZero : true,
        angleLineColor : "rgba(0,0,0,.1)",
        angleLineWidth : 1,
        pointLabelFontFamily : "'나눔고딕'",
        pointLabelFontStyle : "bold",
        pointLabelFontSize : 12,
        pointLabelFontColor : "#666",
        pointDot : false,
        pointDotRadius : 3,
        pointDotStrokeWidth : 1,
        pointHitDetectionRadius : 20,
        datasetStroke : true,
        datasetStrokeWidth : 2,
        datasetFill : true,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
        }

        var ctx = $("#myChart").get(0).getContext("2d");
        
        var myRadarChart = new Chart(ctx).Radar(data, options);
        
    });

    $('.diagnosis[action="diagnosis-action.php"]').submit(function(){
        var 직원수 = $('[name="직원수"]:checked').val();
        var 층수 = $('[name="층수"]:checked').val();
        var 리모델링 = $('[name="리모델링"]:checked').val();
        var 스마트오피스 = $('[name="스마트오피스"]:checked').val();

        if (직원수 == undefined || 층수 == undefined || 리모델링 == undefined || 스마트오피스 == undefined ) {
            alert('응답하지 않은 문항이 있습니다.');
            return false;
        };
    });

    //네이버 약도
    //지도를 삽입할 HTML 엘리먼트 또는 HTML 엘리먼트의 id를 지정합니다.
    var mapDiv = document.getElementById('nmap'); // 'map' 으로 선언해도 동일

    var map = new naver.maps.Map("nmap", {
        center: new naver.maps.LatLng(37.502463, 127.126375),
        zoom: 13
    }),
    infoWindow = null;

    var marker = new naver.maps.Marker({
    position: new naver.maps.LatLng(37.502463, 127.126375),
    map: map
    });

    function initGeocoder() {
        var latlng = map.getCenter();
        var utmk = naver.maps.TransCoord.fromLatLngToUTMK(latlng); // 위/경도 -> UTMK
        var tm128 = naver.maps.TransCoord.fromUTMKToTM128(utmk);   // UTMK -> TM128
        var naverCoord = naver.maps.TransCoord.fromTM128ToNaver(tm128); // TM128 -> NAVER

        infoWindow = new naver.maps.InfoWindow({
            content: ''
        });

    }

    naver.maps.onJSContentLoaded = initGeocoder;

});

