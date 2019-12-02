<template>
    <div class="all">
        <div class="body">
            <div class="join_all">
                <div class="join">
                    <p>회원가입</p>
                    <form action="/join" method="POST">
                    <div class="form-group">
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="user_id" placeholder="ID" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="password" placeholder="비밀번호" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="name" placeholder="이름" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" placeholder="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="sex" placeholder="성별" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-8 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary btn-block">가입</button>
                        </div>
                    </div>  
                </form>
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
.body {
    padding-top: 14%;
    padding-bottom: 9.7%;
    background-image: url("/image/office.jpg");
    height: 500%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.join_all {
    /* margin-top: 14%; */
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

.form-group input {
    color: #fff;
    background-color: transparent;
    border: 0 solid transparent;
    border-bottom: 1px solid #fff;
    width: 44%;
    text-align: center;
    padding-top: 1%;
    margin-top: 1.5%;
    margin-bottom: 1%;
}

.form-group input::placeholder {
    color: #fff;
    font-size: 15px;
}

.form-group button {
    width: 215px;
    height: 27px;
    border-radius: 5px;
    background-color: darkgray;
    color: black;
    cursor: pointer;
    margin-top: 5%;
}
</style>