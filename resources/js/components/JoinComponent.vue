<template>
<div class="all">
        <div class="body">
        <div class="join_all">
            <div class="join">
                <p>회원가입</p>
                <div class="user">
                    <!-- 회원가입 시 정보 입력 창 -->
                    <input type="text" name="id" value="ID" id="join_id" onFocus="this.value=''; return true;" onBlur="this.value='ID'; return true;">
                    <br />
                    <input type="password" name="password" id="join_pw">
                    <br />
                    <input type="password" name="password2" id="join_pw_check">
                    <br />
                    <input type="text" name="name" value="NAME" id="join_username" onFocus="this.value=''; return true;" onBlur="this.value='NAME'; return true;">
                    <br />
                    <input type="email" name="email" value="EMAIL" id="join_email" onFocus="this.value=''; return true;" onBlur="this.value='EMAIL'; return true;">
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


<style scoped>

.join_all {
    margin-top: 14%;
    margin-right: 35%;
    margin-left: 35%;
    padding-bottom: 2%;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 10px;
    border : 1px solid white;
}

.join {margin-top: 15%;color: #fff}

.join p {text-align: center;font-size: 24px;font-weight: 500;padding-top: 4%;padding-bottom: 5%}

.user {margin-top: 1.5%;margin-bottom: 1%}

#join_id,
#join_pw,
#join_pw_check,
#join_username,
#join_email {
    margin-bottom: 3%;
}

.user input {color: #fff;background-color: transparent;border: 0 solid transparent;border-bottom: 1px solid #fff;width: 44%;text-align: center}

.ok input,
.cancel input {width: 215px;height: 27px;border-radius: 5px;background-color: darkgray;color: black}

#join_ok,
#join_cancel {
    background-color: #cfcfcf;
    border: 1px solid #fff;
    margin: 0.2%;
}
</style>