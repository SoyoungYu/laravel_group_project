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
                    <input type="button" value="삭제" id="japan_week4Delete">asdfsdafsafdasfdsfd
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