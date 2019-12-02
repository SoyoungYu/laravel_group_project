<template>
    <div class="item2">
        <div class="title">
            {{ qna.title }}
        </div>
        <div class="data">
        <!-- v-for 말고 다른 방법 찾기. 어차피 1개밖에 안 불러오는데 for를 할 이유가 없음. -->
            {{ qna.question }}
        </div>
        <div class="comment">
            <div class="comment_data">
                <table>
                    <tr v-for = "answer in answers">
                        <td> {{ answer.user_id }} </td>
                        <td> {{ answer.reply }} </td>
                    </tr>
                </table>
            </div>
            <form @submit = "createAnswer">
                <input type="text" name="댓글쓰기" class="comment_text" v-model = "view_reply">
                <button>글쓰기</button>
            </form>
        </div>
        <button v-on:click="goBackList">목록</button>
        <button v-on:click ="deleteQnA">삭제</button>
        <button v-on:click = "updateQnA">수정</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            qna : '',
            answers : '',
            view_reply : ''
        };
    },
    mounted() {
        console.log('Component mounted.')
        Axios.get('/api/qna/' + this.$route.params.id)
        .then(response => {
            this.qna = response.data.qna[0]
            this.answers = response.data.reply
        })
        .catch(error => {
            console.log(error)
        })
    },
    methods : {
        goBackList(){
            this.$router.push('/qna')
        },
        deleteQnA(){
            Axios.delete('/api/qna/' + this.$route.params.id)
            .then(response => {
                this.$router.push('/qna')
            })
            .catch(error => {
                console.log(error)
            })
        },
        updateQnA(){
            this.$router.push({name : "QnACreate", params : {id : this.qna.id, title : this.qna.title, question : this.qna.question}});
        },
        createAnswer(e){
            e.preventDefault();
            let currentObj = this;
            Axios.post('/api/qna',{
                control : 'reply',
                qna_id : this.$route.params.id,
                user_id : 'test',
                reply : this.view_reply
            })
            .then(response => {
                console.log(response)
            })
            .catch(error=>{
                console.log(error)
            })
            
        }
    }
}
</script>

<style scoped>
.item2{
    width: 600px;
    margin-top: 13%;
    margin-left: 30%;
    color: #fff;
}

.title {
    border-bottom: 2px solid #fff;
    margin-bottom: 1%;
    text-align: center;
    font-size: 24px;
}

.data{
    height: 300px;
    border: 2px solid #fff;
}

.comment{
    margin-top: 20px;
    height: 200px;
    border: 2px solid gray;
}

.comment_text{
    margin-left: 30px;
    width:600px;
    height:20px;
    border: 1px solid blue;
}
.list_btn{
    margin-left: 225px;
    font-size: 15px;
}

.comment_data{
    margin-top: 30px;
    margin-left: 30px;
    width: 90%;
    height: 100px;
 
}
</style>