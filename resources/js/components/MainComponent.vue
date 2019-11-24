<template>
    <div class="all">
    <div class="body">
        <div class="main">
            <img src="/image/univ.jpg">
        </div>
        <div class="middle">
            <div class="mem">
                <th>
                    <img src="/image/cof.jpg">
                </th>
                <th>
                    <div id="mems">조원 소개 페이지입니다.<br />자세히 보려면 클릭하세요.</div>
                </th>
            </div>
            <div class="jpn">
                <th>
                    <img src="/image/chr.jpg">
                </th>
                <th>
                    <div id="jpns">현지학기제 소개 페이지입니다.<br />자세히 보려면 클릭하세요.</div>
                </th>
            </div>
        </div>
        <div class="qna">
            <h2 class="qnas">QnA<br /><br />궁금한게 있으면 물어보세요!</h2>
            <img src="/image/que.jpg">
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
