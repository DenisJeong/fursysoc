<?php include 'include/header.php' ?>
    <div class="content clear-fix">
        <div class="content-head">
            <h1>사무환경자가진단</h1>
        </div>
        <div class="content-body">
            <form action="diagnosis-action.php" method="post">

            <div class="step-1">
                <div class="notice-outer-wrap clear-fix">
                    <div class="안내문">
                        <!-- 안내문 시작 -->
                        <p>퍼시스 오피스컨설턴트는 귀 사의 사무환경을 스스로 진단해볼 수 있는 서비스를 제공하고 있습니다. </p>
                        <p>공간계획, Work tool(장비, 가구 등)의 기능성, 그리고 업무환경 변화준비 등 3가지 측면을 고려하여 귀 사의 사무환경에 대한 성숙도를 진단해 볼 수 있습니다.</p>                       
                        <!-- 안내문 끝 -->
                    </div>
                    <div class="notice-wrap">
                        <div class="notice-for-info">
                            <h3>개인정보 수집 동의 </h3>
                            <h4>◎ 개인정보의 수집범위 및 수집방법</h4>
                            <ul>
                                <li>- 퍼시스 오피스컨설턴트 홈페이지에서는 적법하고 공정한 수단에 의하여 서비스 제공에 직접적으로 관련되어 필요한, 성명, 연락처 등 최소한의 정보만을 수집하고 있습니다.</li>
                                <li>
                                    <ul>
                                        <li>가.수집항목 : 이름 , 회사전화번호 , 이메일 , 접속 IP 정보</li>
                                        <li>나.개인정보 수집방법 : 홈페이지(자가진단서비스, 1:1문의, 카탈로그 신청, 컨설팅 상담 )</li>
                                    </ul>
                                </li>
                                <li>- 퍼시스 홈페이지에서는 인종 및 민족, 사상 및 신조, 출신지 및 본적지, 정치적 성향 및 범죄 기록, 건강 상태 및 성생활 등 고객의 기본적 인권을 현저하게 침해할 우려가 있는 개인정보를 수집하지 않습니다.</li>
                            </ul>
                            <h4>◎ 개인정보의 수집 목적 및 이용목적</h4>
                            <p>퍼시스 오피스컨설팅그룹 홈페이지는 아래와 같은 목적을 위하여 개인정보를 수집하고 있습니다.</p>
                            <ul>
                                <li>가. 성명: 서비스 이용에 따른 본인 식별 절차에 이용</li>
                                <li>나. 전화번호, E-mail주소 : 고지 사항 전달, 본인 의사 확인, 불만 처리 등 원활한 의사 소통 경로의 확보, 자가진단결과의 전달, 새로운 서비스/신상품이나 이벤트 정보 안내</li>
                            </ul>
                            <h4>◎ 개인정보의 보유 기간 및 이용 기간</h4>
                            <p>퍼시스 오피스컨설턴트 홈페이지는 개인정보 수집 및 이용목적이 달성된 후에는 예외 없이 해당 정보를 지체 없이 파기합니다.</p>
                        </div>
                        <div class="agree-for-info">
                            <input type="radio" name="agree-for-info" id="개인정보-동의" value="y" /><label for="개인정보-동의">위의 개인정보 수집 및 이용에 동의합니다.</label><br/>
                            <input type="radio" name="agree-for-info" id="개인정보-부동의" value="n" /><label for="개인정보-부동의">위의 개인정보 수집 및 이용에 동의하지 않습니다.</label>
                        </div>
                    </div>
                    <table class="basic-info">
                        <tr>
                            <th scope="row">
                                <label for="회사명">회사명</label>
                            </th>
                            <td><input type="text" name="회사명" id="회사명"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="회사주소">회사주소</label>
                            </th>
                            <td><input type="text" name="회사주소" id="회사주소"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="성명">성명</label>
                            </th>
                            <td><input type="text" name="성명" id="성명"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="부서및직책">부서/직책</label>
                            </th>
                            <td><input type="text" name="부서및직책" id="부서및직책"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="전화번호">전화번호</label>
                            </th>
                            <td><input type="text" name="전화번호" id="전화번호"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="이메일">이메일</label>
                            </th>
                            <td><input type="text" name="이메일" id="이메일"></td>
                        </tr>
                    </table>
                </div>
                <div class="button-sets"><input type="button" class="button to-step-2" value="사무환경 자가 진단 시작하기" /></div>
            </div>

            <div class="step-2">
                <table class="table-for-test">
                    <colgroup>
                        <col width="65%">
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <col width="7%">
                        <?php } ?>
                    </colgroup>
                    <tr class="border-escape-row">
                        <td rowspan="2"><h2>1/4 페이지</h2></td>
                        <td colspan="2" style="text-align: center;">전혀 그렇지 않음</td>
                        <td style="text-align: center;">보통</td>
                        <td colspan="2" style="text-align: center;">매우 그러함</td>
                    </tr>
                    <tr class="border-escape-row">
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>"><?php echo $i;?>점</td>
                        <?php } ?>
                    </tr>
                    <tr class="first-row">
                        <td><b>1</b> 우리 사무실은 팀 내 협업을 활발히 할 수 있도록 구성되어있다. <input type="radio" name="공간계획-1" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="공간계획-1-<?php echo $i;?>">
                                <input type="radio" name="공간계획-1" class="point-radio" id="공간계획-1-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>2</b> 이동통로는 폭, 경로 면에서 통행에 불편함이 없도록 계획되었다. <input type="radio" name="공간계획-2" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="공간계획-2-<?php echo $i;?>">
                                <input type="radio" name="공간계획-2" class="point-radio" id="공간계획-2-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>3</b> 회의, 휴게 등 공용공간은 개수나 위치 면에서 적절하다. <input type="radio" name="공간계획-3" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="공간계획-3-<?php echo $i;?>">
                                <input type="radio" name="공간계획-3" class="point-radio" id="공간계획-3-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>4</b> 일하는 공간과 회의, 휴게 등 공용공간이 잘 분리되어 있다. <input type="radio" name="공간계획-4" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="공간계획-4-<?php echo $i;?>">
                                <input type="radio" name="공간계획-4" class="point-radio" id="공간계획-4-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr class="last-row">
                        <td><b>5</b> 프린터, 복합기와 같은 OA기기는 통합 공간에 집중 배치하고 있다. <input type="radio" name="공간계획-5" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="공간계획-5-<?php echo $i;?>">
                                <input type="radio" name="공간계획-5" class="point-radio" id="공간계획-5-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                </table>
                <div class="button-sets"><input type="button" class="button to-step-1" value="이전" /><input type="button" class="button to-step-3" value="다음" /></div>
            </div>

            <div class="step-3">
                <table class="table-for-test">
                    <colgroup>
                        <col width="65%">
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <col width="7%">
                        <?php } ?>
                    </colgroup>
                    <tr class="border-escape-row">
                        <td rowspan="2"><h2>2/4 페이지</h2></td>
                        <td colspan="2" style="text-align: center;">전혀 그렇지 않음</td>
                        <td style="text-align: center;">보통</td>
                        <td colspan="2" style="text-align: center;">매우 그러함</td>
                    </tr>
                    <tr class="border-escape-row">
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>"><?php echo $i;?>점</td>
                        <?php } ?>
                    </tr>
                    <tr class="first-row">
                        <td><b>1</b> 컴퓨터, 모니터 등 사용하는 기기의 배선은 깔끔하게 처리되고 있다. <input type="radio" name="기능지원-1" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="기능지원-1-<?php echo $i;?>">
                                <input type="radio" name="기능지원-1" class="point-radio" id="기능지원-1-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>2</b> 서류, 도서류는 별도의 수납기구에 체계적으로 정리되고 있다. <input type="radio" name="기능지원-2" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="기능지원-2-<?php echo $i;?>">
                                <input type="radio" name="기능지원-2" class="point-radio" id="기능지원-2-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>3</b> 공용공간의 설비(IT기기, 가구 등)는 업무를 지원하는 데 부족함이 없다. <input type="radio" name="기능지원-3" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="기능지원-3-<?php echo $i;?>">
                                <input type="radio" name="기능지원-3" class="point-radio" id="기능지원-3-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>4</b> 개인이 사용하는 가구는 업무특성에 부합하는 편리한 가구이다. <input type="radio" name="기능지원-4" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="기능지원-4-<?php echo $i;?>">
                                <input type="radio" name="기능지원-4" class="point-radio" id="기능지원-4-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr class="last-row">
                        <td><b>5</b> 조도, 온습도 등 온열환경은 업무를 하기에 쾌적하다. <input type="radio" name="기능지원-5" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="기능지원-5-<?php echo $i;?>">
                                <input type="radio" name="기능지원-5" class="point-radio" id="기능지원-5-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                </table>
                <div class="button-sets"><input type="button" class="button to-step-2" value="이전" /><input type="button" class="button to-step-4" value="다음" /></div>
            </div>

            <div class="step-4">
                <table class="table-for-test">
                    <colgroup>
                        <col width="65%">
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <col width="7%">
                        <?php } ?>
                    </colgroup>
                    <tr class="border-escape-row">
                        <td rowspan="2"><h2>3/4 페이지</h2></td>
                        <td colspan="2" style="text-align: center;">전혀 그렇지 않음</td>
                        <td style="text-align: center;">보통</td>
                        <td colspan="2" style="text-align: center;">매우 그러함</td>
                    </tr>
                    <tr class="border-escape-row">
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>"><?php echo $i;?>점</td>
                        <?php } ?>
                    </tr>
                    <tr class="first-row">
                        <td><b>1</b> 회사(경영진)는 업무환경을 변화과정의 주요 이슈로 판단하고 있다. <input type="radio" name="변화준비-1" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="변화준비-1-<?php echo $i;?>">
                                <input type="radio" name="변화준비-1" class="point-radio" id="변화준비-1-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>2</b> 회사(경영진)는 직원의 자발적 참여를 통한 변화를 중시하고 이를 위해 다양한 제도적 지원을 하고 있다. <input type="radio" name="변화준비-2" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="변화준비-2-<?php echo $i;?>">
                                <input type="radio" name="변화준비-2" class="point-radio" id="변화준비-2-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>3</b> 회사(경영진)는 새로운 기업문화 정립과 변화에 강한 관심을 갖고 있다. <input type="radio" name="변화준비-3" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="변화준비-3-<?php echo $i;?>">
                                <input type="radio" name="변화준비-3" class="point-radio" id="변화준비-3-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td><b>4</b> 1년에 최소 1회 이상 조직변화가 있으며, 공간 배치를 포함해 변화에 신속하게 대처할 수 있다. <input type="radio" name="변화준비-4" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="변화준비-4-<?php echo $i;?>">
                                <input type="radio" name="변화준비-4" class="point-radio" id="변화준비-4-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                    <tr class="last-row">
                        <td><b>5</b> 동종 업계와 비교했을 때, 선도적 위치에 있다. <input type="radio" name="변화준비-5" class="point-radio" style="display: none;" value="0" checked="checked" /></td>
                        <?php for ($i=1; $i < 6; $i++) { ?>
                        <td class="point-column point-<?php echo $i;?>">
                            <label for="변화준비-5-<?php echo $i;?>">
                                <input type="radio" name="변화준비-5" class="point-radio" id="변화준비-5-<?php echo $i;?>" value="<?php echo $i;?>" />
                            </label>
                        </td>
                        <?php } ?>
                    </tr>
                </table>
                <div class="button-sets"><input type="button" class="button to-step-3" value="이전" /><input type="button" class="button to-step-5" value="다음" /></div>
            </div>

            <div class="step-5">
                <table class="table-for-test">
                    <colgroup>
                        <col width="58%">
                        <col width="42%">
                    </colgroup>
                    <tr class="border-escape-row">
                        <td colspan="2"><h2>4/4 페이지</h2></td>
                    </tr>
                    <tr class="first-row">
                        <td><b>1</b> 우리 회사의 직원수는?</td>
                        <td>
                            <label for="직원수-1"><input type="radio" name="직원수" id="직원수-1" value="10명 이하" /> 10명 이하</label>
                            <label for="직원수-2"><input type="radio" name="직원수" id="직원수-2" value="11~30명" /> 11~30명</label>
                            <label for="직원수-3"><input type="radio" name="직원수" id="직원수-3" value="31~50명" /> 31~50명</label><br/>
                            <label for="직원수-4"><input type="radio" name="직원수" id="직원수-4" value="51~100명" /> 51~100명</label>
                            <label for="직원수-5"><input type="radio" name="직원수" id="직원수-5" value="101명 이상" /> 101명 이상</label>
                        </td>
                    </tr>
                    <tr>
                        <td><b>2</b> 우리 회사가 사용하는 층의 개수는?</td>
                        <td>
                            <label for="층수-1"><input type="radio" name="층수" id="층수-1" value="1개층" /> 1개층</label>
                            <label for="층수-2"><input type="radio" name="층수" id="층수-2" value="2개층" /> 2개층</label>
                            <label for="층수-3"><input type="radio" name="층수" id="층수-3" value="3개층" /> 3개층</label><br/>
                            <label for="층수-4"><input type="radio" name="층수" id="층수-4" value="4개층" /> 4개층</label>
                            <label for="층수-5"><input type="radio" name="층수" id="층수-5" value="5개층 이상" /> 5개층 이상</label>
                        </td>
                    </tr>
                    <tr>
                        <td><b>3</b> 우리 회사는 가까운 미래에 사무실 이전 또는 리모델링 계획을 가지고 있다.</td>
                        <td>
                            <label for="리모델링-1"><input type="radio" name="리모델링" id="리모델링-1" value="있다" /> 있다</label>
                            <label for="리모델링-2"><input type="radio" name="리모델링" id="리모델링-2" value="없다" /> 없다</label>
                            <label for="리모델링-3"><input type="radio" name="리모델링" id="리모델링-3" value="모른다" /> 모른다</label>
                        </td>
                    </tr>
                    <tr class="last-row">
                        <td><b>4</b> 우리 회사는 스마트 오피스에 관심이 있다.</td>
                        <td>
                            <label for="스마트오피스-1"><input type="radio" name="스마트오피스" id="스마트오피스-1" value="있다" /> 있다</label>
                            <label for="스마트오피스-2"><input type="radio" name="스마트오피스" id="스마트오피스-2" value="없다" /> 없다</label>
                            <label for="스마트오피스-3"><input type="radio" name="스마트오피스" id="스마트오피스-3" value="모른다" /> 모른다</label>
                        </td>
                    </tr>
                </table>
                <div class="button-sets"><input type="button" class="button to-step-4" value="이전" /><input type="button" class="button to-step-6" value="사무환경 자가 진단 결과보기" /></div>
            </div>

            <div class="step-6">
                <h2>자가 진단 결과</h2>
                <div class="clear-fix">
                    <div class="tables-wrap">
                        <canvas id="myChart" width="400" height="400"></canvas>
                        <textarea id="data-url" name="진단-결과-그림"></textarea>
                        <div class="result-wrap">
                            <table class="table-for-test table-1">
                                <colgroup>
                                    <col width="15%">
                                    <col width="85%">
                                </colgroup>
                                <tr class="border-escape-row">
                                    <td colspan="2"><h3>사무환경 성숙도</h3></td>
                                </tr>
                                <tr class="first-row">
                                    <td class="test-result--point"></td>
                                    <td class="test-result--explanation"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="result-wrap purple">
                            <table class="table-for-test table-2">
                                <colgroup>
                                    <col width="15%">
                                    <col width="85%">
                                </colgroup>
                                <tr class="border-escape-row">
                                    <td colspan="2"><h3>사무환경 변화 준비도</h3></td>
                                </tr>
                                <tr class="first-row">
                                    <td class="test-result--point"></td>
                                    <td class="test-result--explanation"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="examples">
                        <h3>참고: 유형 비교</h3>
                        <img src="images/radar-type-1.png" />
                        <h4>Type 1</h4>
                        <p>변화를 위한 준비도가 매우 높은 상태로 진단 결과에서 도출된 문제점을 개선하고 이끌어 가기에 지금이 바로 적기</p>
                        <img src="images/radar-type-2.png" />
                        <h4>Type 2</h4>
                        <p>가구나 기능성 자체보다는 공간의 포괄적 계획 상의 문제점이 발견된 상태로 공간 재조정으로 동반 개선 기대</p>
                        <img src="images/radar-type-3.png" />
                        <h4>Type 3</h4>
                        <p>기능적 문제점이 노출된 상태로 가구 교체 등 기능적 부분의 개선을 통해 일정 효과를 거둘 수 있음</p>
                    </div>
                </div>
                <div class="button-sets"><input type="button" class="button to-step-5" value="이전" /><input type="submit" class="button" value="사무환경자가진단 결과 이메일로 전송하기" /></div>
            </div>

            </form>
        </div>
    </div>
<?php include 'include/catalog.php' ?>
<?php include 'include/footer.php' ?>