<template>
    <div class="item2">
        <form @submit = "postQnA">
            <table style="text-align: center; border: 1px solid #dddddd">
                <thead>
                    <tr>
                        <th colspan="2" style="background-color: #eeeeee; text-align: center;">게시판 글쓰기 양식</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form_control" placeholder="제목" maxlength="100" v-model = "title"></td>
                    </tr>
                    <tr>
                        <td><textarea class="form_control2" placeholder="내용"  maxlength="2048" style="height: 400px;" v-model = "question"></textarea></td>
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
.navi {
    width: 550px;
    margin: 0 auto;
    position: relative;
}

.navi #navibar {
    border-bottom: 2.5px solid black;
    padding-left: 20%;
}

#navibar a {
    text-decoration: none;
    color: black;
    padding-right: 12%;
}
.container{
    
    display: flex;
    margin-top: 50px;
    width: 100%;
}
.item2{
    margin-top : 200px;
}

.footer {
    margin-top: 180px;
    margin-bottom: 40px;
}
.footer #foot {
    text-align: center;
}


.form_control{
    margin-top: 20px;
    width:600px;

}
.form_control2{
    margin-top: 10px;
    width:600px;

}
</style>