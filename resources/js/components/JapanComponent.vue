<template>
    <div class="all">
        <div class="body">
            <div class="btn-group" id="menu">
                <!-- week1 ~ week7 버튼 -->
                <button class="mocean-modal-button" data-mocean-type="slide-in-top" id="japan_week1">week 1</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-right" onclick="myFunction()" id="japan_week2">week 2</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-bottom" onclick="myFunction()" id="japan_week3">week 3</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-left" id="japan_week4">week 4</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-top" data-mocean-out-type="slide-out-bottom" id="japan_week5">week 5</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-bottom" data-mocean-out-type="slide-out-top" id="japan_week6">week 6</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-left" data-mocean-out-type="slide-out-right" id="japan_week7">week 7</button>
            </div>
            <div class="japan_hiddenIntro">
                <div id="japan_week1Hidden"> <!-- 버튼1(week1)을 클릭했을 때 나타나는 숨겨진 1주차 사진, 내용-->
                    <h2>1주차</h2>
                    <img src="/image/mung.jpg" id="japan_week1Image"> <!-- 1주차 이미지 (데이터) -->
                    <p id="japan_week1Content">1주차 내용</p> <!-- 1주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week1Modify">
                    <input type="button" value="삭제" id="japan_week1Delete">
                </div>
                <div id="japan_week2Hidden"> <!-- 버튼2(week2)을 클릭했을 때 나타나는 숨겨진 2주차 사진, 내용-->
                    <h2>2주차</h2>
                    <img src="/image/mung.jpg" id="japan_week2Image"> <!-- 2주차 이미지 (데이터) -->
                    <p id="japan_week2Content">2주차 내용</p> <!-- 2주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week2Modify">
                    <input type="button" value="삭제" id="japan_week2Delete">
                </div>
                <div id="japan_week3Hidden"> <!-- 버튼3(week3)을 클릭했을 때 나타나는 숨겨진 3주차 사진, 내용-->
                    <h2>3주차</h2>
                    <img src="/image/mung.jpg" id="japan_week3Image"> <!-- 3주차 이미지 (데이터) -->
                    <p id="japan_week3Content">3주차 내용</p> <!-- 3주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week3Modify">
                    <input type="button" value="삭제" id="japan_week3Delete">
                </div>
                <div id="japan_week4Hidden"> <!-- 버튼4(week4)을 클릭했을 때 나타나는 숨겨진 4주차 사진, 내용-->
                    <h2>4주차</h2>
                    <img src="/image/mung.jpg" id="japan_week4Image"> <!-- 4주차 이미지 (데이터) -->
                    <p id="japan_week4Content">4주차 내용</p> <!-- 4주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week4Modify">
                    <input type="button" value="삭제" id="japan_week4Delete">
                </div>
                <div id="japan_week5Hidden"> <!-- 버튼5(week5)을 클릭했을 때 나타나는 숨겨진 5주차 사진, 내용-->
                    <h2>5주차</h2>
                    <img src="/image/mung.jpg" id="japan_week5Image"> <!-- 5주차 이미지 (데이터) -->
                    <p id="japan_week5Content">5주차 내용</p> <!-- 5주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week5Modify">
                    <input type="button" value="삭제" id="japan_week5Delete">
                </div>
                <div id="japan_week6Hidden"> <!-- 버튼6(week6)을 클릭했을 때 나타나는 숨겨진 6주차 사진, 내용-->
                    <h2>6주차</h2>
                    <img src="/image/mung.jpg" id="japan_week6Image"> <!-- 6주차 이미지 (데이터) -->
                    <p id="japan_week6Content">6주차 내용</p> <!-- 6주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week6Modify">
                    <input type="button" value="삭제" id="japan_week6Delete">
                </div>
                <div id="japan_week7Hidden"> <!-- 버튼7(week7)을 클릭했을 때 나타나는 숨겨진 7주차 사진, 내용-->
                    <h2>7주차</h2>
                    <img src="/image/mung.jpg" id="japan_week7Image"> <!-- 7주차 이미지 (데이터) -->
                    <p id="japan_week7Content">7주차 내용</p> <!-- 7주차 내용 (데이터) -->
                    <input type="button" value="수정" id="japan_week7Modify">
                    <input type="button" value="삭제" id="japan_week7Delete">
                </div>
            </div>
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
.japan_hiddenIntro {
    width: 80%;
}

#japan_week1Hidden,
#japan_week2Hidden,
#japan_week3Hidden,
#japan_week4Hidden,
#japan_week5Hidden,
#japan_week6Hidden,
#japan_week7Hidden {
    display: none;
    margin-top: 5%;
    padding: 1%;
    color: white;
    background-color: rgba(255, 255, 255, 0.3);
}

.japan_hiddenIntro h2 {
    font-size: 2em;
    margin-bottom: 3%;
}

.japan_hiddenIntro p {
    text-align: left;
    float: right;
    width: 67%;
}

.japan_hiddenIntro input {
    color: white;
    background-color: transparent;
    border: 0px;
    border-bottom: 2px solid white;
    font-size: 15px;
    margin-left: 70px;
    margin-right: 50px;
}

.body {
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.mocean-modal-wrap {
    display: flex;
    justify-content: center;
}

.btn-group {
    display: flex;
    flex-wrap: wrap;
    width: 70%;
    height: 65px;
    margin-top: 10%;
}

.btn-group button {
    outline: 1px solid #000;
    transform-origin: 50% 50%;
}

/* 버튼에 마우스를 댔을 때 커질 지 말지 결정 : scale(1.1) ==> 커짐 */
.btn-group button:hover {
    transform: scale(1.0);
}

button {
    appearance: none;
    border: none;
    box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.15), 0 1px 2px rgba(0, 0, 0, 0.2), 0 1px 1px rgba(0, 0, 0, 0.2);
    flex: 1 1 10%;
    padding: 0.875rem;
    transition: 100ms all ease-in-out;
    width: 100%;
    font-weight: 600;
    font-size: 1.5em;
    text-transform: uppercase;
    background: #424242;
    color: white;
}

button:hover {
    cursor: pointer;
    background: #1C1C1C;
}

.mocean-modal-wrap {
    position: fixed;
    max-width: 320px;
    width: 100%;
    z-index: 2000;
    visibility: hidden;
    backface-visibility: hidden;
    width: 100%;
    margin: auto;
}

.mocean-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    visibility: hidden;
    opacity: 0;
    transition-duration: 500ms;
    background: #151515;
}

.mocean-show.mocean-modal-wrap {
    visibility: visible;
}

.mocean-show.mocean-modal-wrap ~ .mocean-modal-overlay {
    visibility: visible;
    opacity: 1;
}

.mocean-modal {
    transition-property: all;
    transition-duration: 500ms;
    transition-timing-function: cubic-bezier(0.4, 0, 0, 1.5);
    animation-duration: 1000ms;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(0.4, 0, 0, 1.5);
}

.slide-in-top .mocean-content {
    transform: translate3d(0, -100%, 0);
    opacity: 0;
}

.mocean-show.slide-in-top .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-right .mocean-content {
    transform: translate3d(30%, 0, 0);
    opacity: 0;
}

.mocean-show.slide-in-right .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-bottom .mocean-content {
    transform: translate3d(0, 30%, 0);
    opacity: 0;
}

.mocean-show.slide-in-bottom .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-left .mocean-content {
    transform: translate3d(-30%, 0, 0);
    opacity: 0;
}

.mocean-show.slide-in-left .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-out-bottom .mocean-content {
    transform: translateY(100%);
    opacity: 0;
}

.slide-out-top .mocean-content {
    transform: translateY(-100%);
    opacity: 0;
}

.slide-out-right .mocean-content {
    transform: translateX(100%);
    opacity: 0;
}

.slide-out-left .mocean-content {
    transform: translateX(-100%);
    opacity: 0;
}

.mocean-perspective {
    perspective: 600px;
}

.mocean-show {
    visibility: visible;
}


</style>