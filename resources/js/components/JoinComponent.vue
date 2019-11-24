<template>
    <div class="all">
        <div class="body">
            <div class="join">
                <p>회원가입</p>
                <div class="user"> <!-- 회원가입 시 정보 입력 창 -->
                    ID<input type="text" name="id" id="join_id">
                    <br />
                    PW<input type="password" name="password" id="join_pw">
                    <br />
                    PW 확인<input type="password" name="password2" id="join_pw_check">
                    <br />
                    이름<input type="text" name="name" id="join_username">
                    <br />
                    이메일<input type="email" name="email" id="join_email">
                </div>
            </div>
            <div class="ok">
                <input type="button" value="확인" id="join_ok">
                <input type="button" value="취소" onclick="location.href='/'" id="join_cancel">
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