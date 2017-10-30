<div class="catalog clear-fix">
    <a class="catalog-button" href="">방문 상담 / 제품 카탈로그 신청</a>
    <div class="catalog-form-wrap">
        <p style="margin-left: 9em; font-size: 11px;">*표시 항목은 필수 입력 사항입니다.</p>
        <form action="catalog-action.php" method="post">
            <table>
                <tr>
                    <th scope="row">
                        <sup>*</sup><label for="이름">이름</label>
                    </th>
                    <td><input type="text" name="이름" id="이름"></td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="회사명">회사명</label>
                    </th>
                    <td><input type="text" name="회사명" id="회사명"></td>
                </tr>
                <tr>
                    <th scope="row">
                        <sup>*</sup><label for="전화">전화</label>
                    </th>
                    <td><input type="text" name="전화" id="전화"></td>
                </tr>
                <tr>
                    <th scope="row">
                        <sup>*</sup><label for="이메일">이메일</label>
                    </th>
                    <td><input type="text" name="이메일" id="이메일"></td>
                </tr>
                <tr>
                    <th scope="row">
                        <sup>*</sup><label for="주소">주소</label>
                    </th>
                    <td><input type="text" name="주소" id="주소"></td>
                </tr>
                <tr>
                    <th scope="row">
                        <label>신청목적</label>
                    </th>
                    <td>
                        <div>
                            <input type="checkbox" name="신청목적[]" id="컨설팅" value="컨설팅">
                            <label for="컨설팅">방문상담</label>
                        </div>
                        <div>
                            <input type="checkbox" name="신청목적[]" id="오피스" value="오피스 카탈로그"><label for="오피스">오피스 카탈로그</label>
                            <input type="checkbox" name="신청목적[]" id="케어" value="케어 카탈로그"><label for="케어">케어 카탈로그</label>
                            <input type="checkbox" name="신청목적[]" id="랩" value="랩(연구실) 카탈로그"><label for="랩">랩(연구실) 카탈로그</label>
                        </div>
                        <textarea name="신청목적-서술"></textarea>

                    </td>
                </tr>
                <tr>
                    <th scope="row">&nbsp;</th>
                    <td>
                        <input class="button" type="submit" value="신청하기" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>