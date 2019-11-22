<template>
    <div class="all">
    <div class="title">
        <h2>8</h2>
    </div>
    <div class="navi">
        <div id="navibar">
            <a href="/../member">조원소개</a>
            <a href="/../japan">현지학기제</a>
            <a href="">QnA</a>
        </div>
    </div>
    <div class="navilog">
        <div class="login">
            <a href="/../login">로그인</a>
        </div>
    </div>
    <div class="body">
        <div class="login">
            <p>로그인</p>
            <div class="user">
                ID<input type="text" name="id">
                <br />
                PW<input type="password" name="password">
            </div>
        </div>
        <div class="ok">
            <input type="button" value="확인">
        </div>
        <div class="cancel">
            <input type="button" value="취소" onclick="location.href='/'">
        </div>
        <div class="new">
            <a href="">ID 찾기</a> | <a href="/../join">아직 회원이 아니신가요?</a>
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