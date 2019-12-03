<template>
    <div class="all">
        <div class="body">
            <section class="MOD_ACCORDION1">
            <div data-layout="_r">
                <div data-layout="al16">
                    <div class="AP_accordion" role="tablist">
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">정현재</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <!-- 화면 상에 보여지는 탭 -->
                            <img src="/image/bird.jpg" class="mem1"> <!-- 탭 클릭했을 때 보이는 조원1의 배경사진 -->
                            <div id="member_member1Hidden">
                                <!-- 탭을 클릭 했을 때 보이는 조원1의 사진, 이름, 한줄소개 -->
                                <img src="/image/mung.jpg" id="member_member1Image"><br />
                                이름 : <p id="member_member1Name"></p>
                                소개 : <p id="member_member1Intro"></p>
                                <input type="button" value="수정" id="member_member1Modify">
                                <input type="button" value="삭제" id="member_member1Delete">
                            </div>
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp2" tabindex="0">김민중</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <!-- 화면 상에 보여지는 탭 -->
                            <img src="/image/cat.jpg" class="mem2"> <!-- 탭 클릭했을 때 보이는 조원2의 배경사진 -->
                            <div id="member_member2Hidden">
                                <!-- 탭을 클릭 했을 때 보이는 조원2의 사진, 이름, 한줄소개 -->
                                <img src="/image/mung.jpg" id="member_member2Image"><br />
                                이름 : <p id="member_member2Name"></p>
                                소개 : <p id="member_member2Intro"></p>
                                <input type="button" value="수정" id="member_member2Modify">
                                <input type="button" value="삭제" id="member_member2Delete">
                            </div>
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp3" tabindex="0">조민식</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <!-- 화면 상에 보여지는 탭 -->
                            <img src="/image/tiger.jpg" class="mem3"> <!-- 탭 클릭했을 때 보이는 조원3의 배경사진 -->
                            <div id="member_member3Hidden">
                                <!-- 탭을 클릭 했을 때 보이는 조원3의 사진, 이름, 한줄소개 -->
                                <img src="/image/mung.jpg" id="member_member3Image"><br />
                                이름 : <p id="member_member3Name"></p>
                                소개 : <p id="member_member3Intro"></p>
                                <input type="button" value="수정" id="member_member3Modify">
                                <input type="button" value="삭제" id="member_member3Delete">
                            </div>
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp4" tabindex="0">정성민</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <!-- 화면 상에 보여지는 탭 -->
                            <img src="/image/hed.jpg" class="mem4"> <!-- 탭 클릭했을 때 보이는 조원4의 배경사진 -->
                            <div id="member_member4Hidden">
                                <!-- 탭을 클릭 했을 때 보이는 조원4의 사진, 이름, 한줄소개 -->
                                <img src="/image/mung.jpg" id="member_member4Image"><br />
                                이름 : <p id="member_member4Name"></p>
                                소개 : <p id="member_member4Intro"></p>
                                <input type="button" value="수정" id="member_member4Modify">
                                <input type="button" value="삭제" id="member_member4Delete">
                            </div>
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp5" tabindex="0">김기운</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <!-- 화면 상에 보여지는 탭 -->
                            <img src="/image/lion.jpg" class="mem5"> <!-- 탭 클릭했을 때 보이는 조원5의 배경사진 -->
                            <div id="member_member5Hidden">
                                <!-- 탭을 클릭 했을 때 보이는 조원5의 사진, 이름, 한줄소개 -->
                                <img src="/image/mung.jpg" id="member_member5Image"><br />
                                이름 : <p id="member_member5Name"></p>
                                소개 : <p id="member_member5Intro"></p>
                                <input type="button" value="수정" id="member_member5Modify">
                                <input type="button" value="삭제" id="member_member5Delete">
                            </div>
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp6" tabindex="0">유소영</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <!-- 화면 상에 보여지는 탭 -->
                            <img src="/image/dog.jpg" class="mem6"> <!-- 탭 클릭했을 때 보이는 조원6의 배경사진 -->
                            <div id="member_member6Hidden">
                                <!-- 탭을 클릭 했을 때 보이는 조원6의 사진, 이름, 한줄소개 -->
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

<style scoped>
.body {margin-top: 13%;margin-left: 8%;height: auto}

.mem1,
.mem2,
.mem3,
.mem4,
.mem5,
.mem6 {
    width: 100%;
}

#member_member1Image,
#member_member2Image,
#member_member3Image,
#member_member4Image,
#member_member5Image,
#member_member6Image {width: 20%;float: inherit}

#member_member1Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}

#member_member2Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}

#member_member3Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}

#member_member4Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}

#member_member5Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}

#member_member6Hidden {
    background-color: rgba(0, 0, 0, 0.7);
    text-align: center;
    color: white;
    font-size: 20px;
    position: relative;
    z-index: 100;
    margin-top: -73%;
    padding-top: 20%;
    padding-bottom: 20%;
}

#member_member1Hidden input {margin: 1%}

[data-theme*=_bgp1] {
    /* background: url(/image/bird.jpg); */
    background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 70%), url(/image/bird.jpg);
    background-repeat: no-repeat;
    /* background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); */
    color: white;
}

[data-theme*=_bgp2] {
    /* background: url(/image/cat.jpg); */
    background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 70%), url(/image/cat.jpg);
    background-repeat: no-repeat;
    color: white;
}

[data-theme*=_bgp3] {
    /* background: url(/image/tiger.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/tiger.jpg);
    background-repeat: no-repeat;
    color: white;
}

[data-theme*=_bgp4] {
    /* background: url(/image/hed.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/hed.jpg);
    background-repeat: no-repeat;
    color: white;
}

[data-theme*=_bgp5] {
    /* background: url(/image/lion.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/lion.jpg);
    background-repeat: no-repeat;
    color: white;
}

[data-theme*=_bgp6] {
    /* background: url(/image/dog.jpg); */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(0, 0, 0, 1) 70%), url(/image/dog.jpg);
    background-repeat: no-repeat;
    color: white;
}

[data-layout=_r] {
    max-width: 100%;
    margin-left: 3%;
    /*margin: 0 auto;*/
    /*    padding: 2rem 1rem;*/
}

[data-layout=_r] > div,
[data-layout=_r] > article,
[data-layout=_r] > aside {
    padding: 0 1rem 1rem 1rem;
}

[data-layout=_r] img {
    height: auto;
}

a.btn,
button {
    background-color: #4d36bd;
    color: white;
    text-decoration: none;
    display: inline-block;
    padding: 1em;
    border-radius: 5px;
    border: none;
    font-family: sans-serif;
    font-size: 1em;
    cursor: pointer;
}

a.btn:hover,
button:hover {
    filter: brightness(1.1);
}

/*Accordion Generic*/
 /*탭 배경사진*/
.AP_accordion_panel {
    overflow: hidden;
    transition: height 0.3s;
    position: relative;
    width: 88%;
}

.AP_accordion_panel input {
    cursor: pointer;
    color: white;
    background-color: transparent;
    border: 0px;
    border-bottom: 2px solid white;
    font-size: 15px;
    margin-left: 70px;
    margin-right: 50px;
}

.AP_accordion_tab {
    width: 88%;
    height: 60px;
    cursor: pointer;
    margin: 0;
    line-height: 1;
    padding-top: 25px;
    font-weight: bold;
    position: relative;
    font-size: 2.8em;
    color: rgba(255, 255, 255, 0.5);
    font-style: oblique; /* italic */
    letter-spacing: -3px;
}

.AP_accordion_tab.open {
    filter: brightness(1.05);
}

.AP_accordion_tab.open:after {
    transform: rotateZ(180deg);
}

.AP_accordion_tab:hover {
    filter: brightness(1.1);
}

.AP_accordion_tab:after {
    position: absolute;
    font-size: 1.4em;
    right: 0;
    /* line-height: 1; */
    top: 0;
    height: 100%;
    width: 88%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Accordion1 */
.MOD_ACCORDION1 .AP_accordion {
    margin: 0;
    max-width: 100%;
}

.MOD_ACCORDION1_Intro {
    max-width: 100%;
    margin-bottom: 2rem;
}
</style>