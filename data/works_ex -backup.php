<?php
/**
#실적소개 사용 설명

반복이므로 대강 훑어보셔도 알 수 있을 것입니다.

기본 꼴은 이렇습니다.

array(
    'name' => '',
    'division' => '',
    'subject' => '',
    'term' => '',
    'category' => '',
    'image-path' => '',
    'link' => ''
),

- name : 기업명
- division : 기업구분
- subject : 컨설팅요약
- term : 수행기간
- category : 메인화면 설명
- image-path : 실제 썸네일 이미지 경로. 이미지가 없으면 'NO IMAGE'라는 이미지를 대신 보여줍니다. (images 폴더 밑에 넣되 works-logo-tim.png 과 같이 규칙성 있는 것으로 넣어주는 것이 좋습니다. 이미지 사이즈는 211px*136px입니다.)
- link : 아직 사용하지 않는 데이터지만, 외부 링크가 필요할까 싶어 준비만 해뒀습니다.

##주의

- 한 array(기업)와 다음 array 사이에는 반드시 ','(쉼표)가 있어야 합니다. 아래 미리 입력한 데이터를 보시면 금방 이해할 수 있을 것입니다. 단, 마지막 array 뒤에는 반드시 ','(쉼표)가 없어야 합니다.
- array들의 순서는 곧 Works 페이지에서의 나열 순서이기도 합니다. 웹사이트 첫 화면에는 맨 앞 네 개의 array들에 있는 데이터가 뿌려집니다. 순서에 주의해 주십시오.
- 혹시라도 아래 규칙이 손상될 것을 염려해 복사본인 works_ex_default.php를 만들어 두었으니 알아두십시오.

*/

$works_ex = array(
    array(
        'name' => 'Doorim Robotics',
        'division' => '중소기업',
        'subject' => '부서이전 및 사옥확장 따른 사무환경 컨설팅 및 가구제안',
        'term' => '6개월',
        'category' => '사옥확장',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '삼성생명 (세무사/파트너지점)',
        'division' => '대기업',
        'subject' => '임차빌딩으로 이전하기 위한 임차면적 적정성 검토 및 레이아웃 제안',
        'term' => '1개월',
        'category' => '부서이전, 통합',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '두란노해외선교회',
        'division' => '종교단체',
        'subject' => '사무실 층간 이동에 따른 공간적정성을 검토하고 레이아웃 및 가구 제안',
        'term' => '1.5개월',
        'category' => '사무공간 이전',
        'image-path' => 'images/works-logo-tim.png',
        'link' => ''
    ),
    array(
        'name' => '서울YMCA',
        'division' => '시민사회단체',
        'subject' => '비정형의 사무공간 개선을 위해 현 사무환경을 진단하고 레이아웃 및 가구 제안',
        'term' => '2.5개월',
        'category' => '사무환경 개선',
        'image-path' => 'images/works-logo-ymca.png',
        'link' => ''
    ),
    array(
        'name' => '한국전기안전공사',
        'division' => '공기업',
        'subject' => '전북혁신도시 신사옥이전에 따른 사무환경 진단 및 레이아웃 제안',
        'term' => '2.5개월',
        'category' => '사옥확장',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '김박내과의원',
        'division' => '병원',
        'subject' => '이전개원을 위해 인공신장실에 맞는 기능성 의료용 베드 제안.',
        'term' => '2개월',
        'category' => '인원확장',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '르쿠르제',
        'division' => '외국계기업',
        'subject' => '인원확장에 따른 사무공간 레이아웃 및 가구제안',
        'term' => '1개월',
        'category' => '인원확장',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '퍼플랩',
        'division' => 'IT기업',
        'subject' => '인원확장에 따른 사무공간 레이아웃 및 가구제안',
        'term' => '1개월',
        'category' => '사무환경개선',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '가온미디어',
        'division' => 'IT기업',
        'subject' => '사무실 환경개선을 위해 기존 사무가구 재활용 검토 및 가구 재배치 제안 ',
        'term' => '2개월',
        'category' => '사무환경 개선',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '좋은정신건강의학과의원',
        'division' => '병원',
        'subject' => '이전개원에 따른 가구제안',
        'term' => '1개월',
        'category' => '인원확장',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => '에스지유코리아',
        'division' => '',
        'subject' => '인원확장에 따른 사무공간 레이아웃 및 가구제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => '',
        'link' => ''
    ),
    array(
        'name' => 'ASML',
        'division' => '외국계기업',
        'subject' => '',
        'term' => '',
        'category' => '',
        'image-path' => '',
        'link' => ''
    )
);