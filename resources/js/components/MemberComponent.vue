<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
                <div data-layout="_r">
                    <div data-layout="al16">
                        <div class="AP_accordion" role="tablist">
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">정현재</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                                <div id="member_member1Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원1의 사진, 이름, 한줄소개 -->
                                    <img src="/image/mung.jpg" id="member_member1Image"><br />
                                    이름 : <p id="member_member1Name"></p>
                                    소개 : <p id="member_member1Intro"></p>
                                    <input type="button" value="수정" id="member_member1Modify">
                                    <input type="button" value="삭제" id="member_member1Delete">
                                </div>
                            </div>
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp2" tabindex="0">김민중</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/cat.jpg" class="mem2"> <!-- 탭 클릭했을 때 보이는 조원2의 배경사진 -->
                                <div id="member_member2Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원2의 사진, 이름, 한줄소개 -->
                                    <img src="/image/mung.jpg" id="member_member2Image"><br />
                                    이름 : <p id="member_member2Name"></p>
                                    소개 : <p id="member_member2Intro"></p>
                                    <input type="button" value="수정" id="member_member2Modify">
                                    <input type="button" value="삭제" id="member_member2Delete">
                                </div>
                            </div>
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp3" tabindex="0">조민식</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/tiger.jpg" class="mem3"> <!-- 탭 클릭했을 때 보이는 조원3의 배경사진 -->
                                <div id="member_member3Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원3의 사진, 이름, 한줄소개 -->
                                    <img src="/image/mung.jpg" id="member_member3Image"><br />
                                    이름 : <p id="member_member3Name"></p>
                                    소개 : <p id="member_member3Intro"></p>
                                    <input type="button" value="수정" id="member_member3Modify">
                                    <input type="button" value="삭제" id="member_member3Delete">
                                </div>
                            </div>
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp4" tabindex="0">정성민</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/hed.jpg" class="mem4"> <!-- 탭 클릭했을 때 보이는 조원4의 배경사진 -->
                                <div id="member_member4Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원4의 사진, 이름, 한줄소개 -->
                                    <img src="/image/mung.jpg" id="member_member4Image"><br />
                                    이름 : <p id="member_member4Name"></p>
                                    소개 : <p id="member_member4Intro"></p>
                                    <input type="button" value="수정" id="member_member4Modify">
                                    <input type="button" value="삭제" id="member_member4Delete">
                                </div>
                            </div>
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp5" tabindex="0">김기운</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/lion.jpg" class="mem5"> <!-- 탭 클릭했을 때 보이는 조원5의 배경사진 -->
                                <div id="member_member5Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원5의 사진, 이름, 한줄소개 -->
                                    <img src="/image/mung.jpg" id="member_member5Image"><br />
                                    이름 : <p id="member_member5Name"></p>
                                    소개 : <p id="member_member5Intro"></p>
                                    <input type="button" value="수정" id="member_member5Modify">
                                    <input type="button" value="삭제" id="member_member5Delete">
                                </div>
                            </div>
                            <p class="AP_accordion_tab" role="tab" data-theme="_bgp6" tabindex="0">유소영</p>
                            <div class="AP_accordion_panel" role="tabpanel"> <!-- 화면 상에 보여지는 탭 -->
                                <img src="/image/dog.jpg" class="mem6"> <!-- 탭 클릭했을 때 보이는 조원6의 배경사진 -->
                                <div id="member_member6Hidden"> <!-- 탭을 클릭 했을 때 보이는 조원6의 사진, 이름, 한줄소개 -->
                                    <img src="/image/mung.jpg" id="member_member6Image"><br />
                                    이름 : <p id="member_member6Name"></p>
                                    소개 : <p id="member_member6Intro"></p>
                                    <input type="button" value="수정" id="member_member6Modify">
                                    <input type="button" value="삭제" id="member_member6Delete">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
            console.log('Component mounted.')
        }
}
</script>