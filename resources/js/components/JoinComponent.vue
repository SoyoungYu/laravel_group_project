<template>
    <div class="all">
        <div class="title">
        <h2>8</h2>
    </div>
    <div class="navi">
        <div id="navibar">
            <a href="/../member">조원소개</a>
            <a href="">현지학기제</a>
            <a href="">QnA</a>
        </div>
    </div>
    <div class="navilog">
        <div class="login">
            <a href="/../login">로그인</a>
        </div>
    </div>
        <div class="body">
            <div class="join">
                <p>회원가입</p>
                <div class="user">
                    ID<input type="text" name="id">
                    <br />
                    PW<input type="password" name="password">
                    <br />
                    PW 확인<input type="password" name="password2">
                    <br />
                    이름<input type="text" name="name">
                    <br />
                    이메일<input type="email" name="email">
                </div>
            </div>
            <div class="ok">
                <input type="button" value="확인">
                <input type="button" value="취소" onclick="location.href='/'">
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