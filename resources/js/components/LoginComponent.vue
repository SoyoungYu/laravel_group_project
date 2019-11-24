<template>
    <div class="all">
        <div class="body">
            <div class="login">
                <p>로그인</p>
                <div class="user"> <!-- 아이디, 비밀번호 입력 창 -->
                    ID<input type="text" name="id" id="login_id">
                    <br />
                    PW<input type="password" name="password" id="login_pw">
                </div>
            </div>
            <div class="ok">
                <input type="button" value="확인" id="login_ok">
            </div>
            <div class="cancel">
                <input type="button" value="취소" onclick="location.href='/'" id="login_cancel">
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