<template>
    <div class="all">
        <div class="body">
        <div class="join_all">
            <div class="join">
                <p>회원가입</p>
                <div class="user">
                    <!-- 회원가입 시 정보 입력 창 -->
                    <input type="text" name="id" value="ID" id="join_id" onFocus="this.value=''; return true;">
                    <br />
                    <input type="text" name="password" value="PASSWORD" id="join_pw" onFocus="this.type='password'; this.value=''; return true;">
                    <br />
                    <input type="text" name="password2" value="PASSWORD CHECK" id="join_pw_check" onFocus="this.type='password'; this.value=''; return true;">
                    <br />
                    <input type="text" name="name" value="NAME" id="join_username" onFocus="this.value=''; return true;">
                    <br />
                    <input type="email" name="email" value="EMAIL" id="join_email" onFocus="this.value=''; return true;">
                </div>
            </div>
            <div class="ok">
                <input type="button" value="확인" id="join_ok">
            </div>
            <div class="cancel">
                <input type="button" value="취소" onclick="/../login" id="join_cancel">
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