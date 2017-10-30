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
        'name' => 'CRITEO',
        'division' => '외국계기업',
        'subject' => '사옥이전에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '2.5개월',
        'category' => '사무공간 이전',
        'image-path' => 'images/works-logo-criteo.png',
        'link' => ''
	 ),	
	array(
        'name' => '햇빛여성병원',
        'division' => '병원',
        'subject' => '병원신축에 따른 친환경 병원가구 제안',
        'term' => '6개월',
        'category' => '병원신축',
        'image-path' => 'images/works-logo-hatvit.jpg',
        'link' => ''
    ),
       array(
        'name' => 'ASML 코리아',
        'division' => '외국계기업',
        'subject' => '사무환경 개선 사업에 따른 컨설팅 및 가구 제안',
        'term' => '3개월~',
        'category' => '사무환경 개선',
        'image-path' => 'images/works-logo-asml.png',
        'link' => ''
     ),
    array(
        'name' => '오티스엘리베이터',
        'division' => '외국계기업',
        'subject' => '지방 사업소 가구 표준화 사업',
        'term' => '6개월~',
        'category' => '지방 사업소 사무환경 표준화',
        'image-path' => 'images/works-logo-otis.png',
        'link' => ''
     ),
	 array(
        'name' => '아산마리타임(주)',
        'division' => '중소기업',
        'subject' => '부서이전 및 사옥확장 따른 사무환경 컨설팅 및 가구제안',
        'term' => '2개월',
        'category' => '사옥확장',
        'image-path' => 'images/works-logo-asanmaritime.jpg',
        'link' => ''
	 ),
	 array(
        'name' => 'SOCAR',
        'division' => '중소기업',
        'subject' => '사옥 확장에 따른 가구 납품',
        'term' => '1개월',
        'category' => '사무공간 이전',
        'image-path' => 'images/works-logo-socar.png',
        'link' => ''
	),
	 array(
        'name' => 'Edelman 코리아',
        'division' => '외국계기업',
        'subject' => '사무실 이전에 따른 가구 납품',
        'term' => '2개월',
        'category' => '사무공간 이전',
        'image-path' => 'images/works-logo-edelman.png',
        'link' => ''
     ),
	 	 array(
        'name' => '윤영석내과의원',
        'division' => '병원',
        'subject' => '인공신장실 리모델링에 따른 의료용 침대 및 TV거치대 제안',
        'term' => '2개월',
        'category' => '병원',
        'image-path' => 'images/works-logo-yoon.png',
        'link' => 'http://blog.naver.com/s_o_c/220336566857'
	 ),	
	array(
        'name' => '온누리병원',
        'division' => '병원',
        'subject' => '인공신장실 리모델링에 따른 의료용 침대 및 TV거치대 제안',
        'term' => '2개월',
        'category' => '병원환경 개선',
        'image-path' => 'images/works-logo-onnury.png',
        'link' => ''
	 ),
	 array(
        'name' => '뉴넷정보기술',
        'division' => '중소기업',
        'subject' => '부서이전 따른 사무환경 컨설팅 및 가구제안',
        'term' => '1개월',
        'category' => '사옥확장',
        'image-path' => 'images/works-logo-newnet.png',
        'link' => ''
	 ),
	 array(
        'name' => 'DOOLIM Robotics',
        'division' => '중소기업',
        'subject' => '부서이전 및 사옥확장 따른 사무환경 컨설팅 및 가구제안',
        'term' => '6개월',
        'category' => '사옥확장',
        'image-path' => 'images/works-logo-doo.png',
        'link' => ''
	 ),
	 array(
        'name' => '연세맑은내과의원',
        'division' => '병원',
        'subject' => '병원개원에 따른 인공신장실 의료용 베드 제안 및 진료/대기공간 가구 제안',
        'term' => '2.5개월',
        'category' => '병원환경 개선',
        'image-path' => 'images/works-logo-yonseimalgeun.png',
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
        'name' => '김박내과의원',
        'division' => '병원',
        'subject' => '이전개원을 위해 인공신장실에 맞는 기능성 의료용 베드 제안',
        'term' => '2개월',
        'category' => '인원확장',
        'image-path' => 'images/works-logo-kp.PNG',
        'link' => ''
    ),
    array(
        'name' => '르쿠르제',
        'division' => '외국계기업',
        'subject' => '인원확장에 따른 사무공간 레이아웃 및 가구제안',
        'term' => '1개월',
        'category' => '인원확장',
        'image-path' => 'images/works-logo-creuset.png',
        'link' => ''
    ),
    array(
        'name' => '퍼플랩',
        'division' => 'IT기업',
        'subject' => '인원확장에 따른 사무공간 레이아웃 및 가구제안',
        'term' => '1개월',
        'category' => '사무환경개선',
        'image-path' => 'images/works-logo-perplelab.png',
        'link' => ''
    ),
    array(
        'name' => '가온미디어',
        'division' => 'IT기업',
        'subject' => '사무실 환경개선을 위해 기존 사무가구 재활용 검토 및 가구 재배치 제안 ',
        'term' => '2개월',
        'category' => '사무환경 개선',
        'image-path' => 'images/works-logo-kaon.png',
        'link' => ''
	),
    array(
        'name' => '삼성생명 (P지점)',
        'division' => '대기업',
        'subject' => '임차빌딩으로 이전하기 위한 임차면적 적정성 검토 및 레이아웃 제안',
        'term' => '1개월',
        'category' => '부서이전, 통합',
        'image-path' => 'images/works-logo-samsung.png',
        'link' => ''
    ),
    array(
        'name' => '좋은정신건강의학과의원',
        'division' => '병원',
        'subject' => '이전개원에 따른 가구제안',
        'term' => '1개월',
        'category' => '인원확장',
        'image-path' => 'images/works-logo-joeun.png',
        'link' => ''
    ),
    array(
        'name' => '에스지유코리아',
        'division' => '외국계기업',
        'subject' => '인원확장에 따른 사무공간 레이아웃 및 가구제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-szu.png',
        'link' => ''
    ),
    array(
        'name' => '한국외대부설용인외국어고등학교',
        'division' => '학교',
        'subject' => '노후가구 교체 및 AS',
        'term' => '1개월',
        'category' => '사후관리',
        'image-path' => 'images/works-logo-hafs.png',
        'link' => ''
	 ),
	array(
        'name' => '(주)모터원',
        'division' => '자동차판매업',
        'subject' => '사옥 신축에 따른 사무환경컨설팅 및 가구 제안',
        'term' => '4개월',
        'category' => '사옥신축',
        'image-path' => 'images/works-logo-motorone.png',
        'link' => ''
     ),
    array(
        'name' => 'CGV(청주,부평,수원,천안점)',
        'division' => '서비스',
        'subject' => '영화관 개관시 관내 사무환경 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-cgv.png',
        'link' => ''
     ),
    array(
        'name' => 'ELCA Korea',
        'division' => '외국계기업',
        'subject' => '계열사 매장별 교육장 컨셉 제안 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-elca.png',
        'link' => ''
     ),
    array(
        'name' => 'SEW 유로드라이브',
        'division' => '외국계기업',
        'subject' => '각 지점별 사무환경 개선 작업',
        'term' => '3개월',
        'category' => '',
        'image-path' => 'images/works-logo-sew.png',
        'link' => ''
     ),
    array(
        'name' => '군인공제회',
        'division' => '복지기관',
        'subject' => '노후 가구 교체 및 회의실 환경 개선',
        'term' => '2개월',
        'category' => '',
        'image-path' => 'images/works-logo-mmaa.png',
        'link' => ''
     ),
    array(
        'name' => '학교법인 덕성학원',
        'division' => '교육기관',
        'subject' => '사무실 이전에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-duksung.png',
        'link' => ''
     ),
    array(
        'name' => '레오폴드',
        'division' => '제조기업',
        'subject' => '사무실 이전에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '3개월',
        'category' => '',
        'image-path' => 'images/works-logo-leopolo.png',
        'link' => ''
     ),
    array(
        'name' => '(주)리팩',
        'division' => '제조기업',
        'subject' => '사옥 신축에 따른 사무환경컨설팅 및 가구 제안',
        'term' => '4개월',
        'category' => '',
        'image-path' => 'images/works-logo-leepack.png',
        'link' => ''
     ),
    array(
        'name' => '(주)마루느루',
        'division' => '도소매기업',
        'subject' => '사무실 이전에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '2개월',
        'category' => '',
        'image-path' => 'images/works-logo-maru.png',
        'link' => ''
     ),
   array(
        'name' => '영락교회',
        'division' => '종교시설',
        'subject' => '커뮤니티 공간 컨설팅 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-youngnak.png',
        'link' => ''
     ),
    array(
        'name' => '영락교회 어린이집',
        'division' => '교육기관',
        'subject' => '어린이집 내 업무공간 계획 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-youngnak.png',
        'link' => ''
     ),
    array(
        'name' => '유니코어써치',
        'division' => '일반기업',
        'subject' => '사무환경 개선 사업에 따른 컨설팅 및 가구 제안',
        'term' => '3개월',
        'category' => '',
        'image-path' => 'images/works-logo-unico.png',
        'link' => ''
     ),
    array(
        'name' => '인디펜던트리쿼코리아',
        'division' => '일반기업',
        'subject' => '노후가구 교체 ',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-iliquor.png',
        'link' => ''
     ),
    array(
        'name' => '(주)자바씨티 코리아',
        'division' => '프랜차이즈기업',
        'subject' => '사무실 이전에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '2개월',
        'category' => '',
        'image-path' => 'images/works-logo-java.png',
        'link' => ''
     ),
    array(
        'name' => '코맥스',
        'division' => '일반기업',
        'subject' => '회의층 계획에 따른 컨설팅 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-commax.png',
        'link' => ''
     ),
    array(
        'name' => '(주)프라코',
        'division' => '일반기업',
        'subject' => '사옥 신축에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '2개월',
        'category' => '',
        'image-path' => 'images/works-logo-plakor.png',
        'link' => ''
     ),
    array(
        'name' => '하니웰코리아',
        'division' => '외국계기업',
        'subject' => '사무실 확장에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '5개월',
        'category' => '',
        'image-path' => 'images/works-logo-honeywell.png',
        'link' => ''
     ),
    array(
        'name' => '한국과학기술연구원(KIST)',
        'division' => '교육 및 연구기관',
        'subject' => 'LAB실 환경 개선 사업',
        'term' => '2개월',
        'category' => '',
        'image-path' => 'images/works-logo-kist.png',
        'link' => ''
     ),
    array(
        'name' => '한국신에츠실리콘',
        'division' => '외국계기업',
        'subject' => '사옥 및 연구동 신축에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '6개월',
        'category' => '',
        'image-path' => 'images/works-logo-shinetsu.png',
        'link' => ''
     ),
    array(
        'name' => '한국에스리',
        'division' => '일반기업',
        'subject' => '사무실 확장 이전에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '3개월',
        'category' => '',
        'image-path' => 'images/works-logo-esri.png',
        'link' => ''
     ),
    array(
        'name' => '한미랩',
        'division' => '교육법인',
        'subject' => '본사 및 지점 학원들에 대한 환경 개선 및 가구 제안',
        'term' => '6개월',
        'category' => '',
        'image-path' => 'images/works-logo-hanmilab.png',
        'link' => ''
     ),
    array(
        'name' => '한피알',
        'division' => '일반기업',
        'subject' => '사무환경 컨설팅 및 노후 가구 교체',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-hanpr.png',
        'link' => ''
     ),
    array(
        'name' => '호리바코리아',
        'division' => '외국계기업',
        'subject' => '사옥 신축에 따른 사무환경 컨설팅 및 가구 제안',
        'term' => '4개월',
        'category' => '',
        'image-path' => 'images/works-logo-horiba.png',
        'link' => ''
     ),
    array(
        'name' => '홈플러스',
        'division' => '유통기업',
        'subject' => '회장실 환경 개선',
        'term' => '2개월',
        'category' => '',
        'image-path' => 'images/works-logo-homeplus.png',
        'link' => ''
     ),
    array(
        'name' => '황학 어린이집',
        'division' => '교육시설',
        'subject' => '어린이집 내 업무공간 계획 및 가구 제안',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-hwanghak.png',
        'link' => ''
     ),
     array(
        'name' => '한국공작기계산업협회',
        'division' => '협회기관',
        'subject' => '사옥 신축에 따른 사무환경컨설팅 및 가구 제안',
        'term' => '4개월',
        'category' => '',
        'image-path' => 'images/works-logo-komma.png',
        'link' => ''
    ),
	 array(
        'name' => '삼성서울병원',
        'division' => '의료기관',
        'subject' => '노후 가구 교체 및 병원 환경 개선',
        'term' => '3개월',
        'category' => '병원환경 개선',
        'image-path' => 'images/works-logo-samsunghospital.png',
        'link' => ''
	      ),
    array(
        'name' => '호야 스포테인먼트',
        'division' => '일반기업',
        'subject' => '사무환경 컨설팅 및 노후 가구 교체',
        'term' => '1개월',
        'category' => '',
        'image-path' => 'images/works-logo-hoya.png',
        'link' => ''
   	)
);