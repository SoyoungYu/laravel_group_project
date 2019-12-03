<template>
    <div class="item2">
        <form @submit = "postQnA">
            <table style="text-align: center; border: 1px solid #ddd">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center; color: white; font-size: 20px">새 글 작성하기</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form_control" placeholder="제목" style="color: #fff; font-size: 24px" maxlength="100" v-model = "title"></td>
                    </tr>
                    <tr>
                        <td><textarea class="form_control2" placeholder="내용"  maxlength="2048" style="height: 400px; color: #fff" v-model = "question"></textarea></td>
                    </tr>
                </tbody>
                </table>	
            <button>완료</button>
            <button v-on:click="back">취소</button>
        </form>
    </div>
</template>

<script>
export default {
    mounted() {
            console.log('Component mounted.')
    },
    data(){
        return {
            title : '',
            question : ''
        }
    },
    methods : {
        postQnA(e) {
            e.preventDefault();
            let currentObj = this;
            Axios.post('/api/qna',{
                title : this.title,
                question : this.question
            })
            .then(response => {
                this.$router.push('/qna')
            })
            .catch(error => {
                console.log(error)
            });
        },
        back(){
            this.$router.push('/qna')
        }
    }
}
</script>

<style scoped>
.item2 {
    margin-top: 13%;
    margin-left: 30%;
    color: #fff;
}

#create {
    text-align: center;
    margin-top: 13%;
    margin-left: 30%;
    border: 0px solid transparent;
}

#cancel {
    margin-left: 5%;
    margin-right: 43%;
}

#ok, #cancel {
    cursor: pointer;
    color: white;
    background-color: transparent;
    border: 0px;
    border-bottom: 2px solid white;
	font-size: 15px;
    margin-top: 1%;
    font-size: 17px;
}

.form_control{
    margin-top: 20px;
    width:600px;
    border: 0px solid transparent;
    border-bottom: 2px solid #fff;
    background-color: transparent;
}
.form_control2{
    margin-top: 10px;
    width:600px;
    border: 2px solid #fff;
    background-color: transparent;
}
</style>