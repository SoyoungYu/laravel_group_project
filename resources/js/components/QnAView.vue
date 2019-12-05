<template>
    <div class="item2">
        <div class="title" v-for = 'qna in qnas' v-bind:key="qna">
            {{ qna.title }}
        </div>
        <div class="data" v-for = 'qna in qnas' v-bind:key="qna">
        <!-- v-for 말고 다른 방법 찾기. 어차피 1개밖에 안 불러오는데 for를 할 이유가 없음. -->
            {{ qna.question }}
        </div>
        <div class="comment">
            <div class="comment_data">dddddddd</div>
            <input type="text" name="댓글쓰기" class="comment_text">
            <input type="button" value="글쓰기">
        </div>
        <input type="button" value="목록" class= "list_btn">
    </div>
</template>

<script>
export default {
    data() {
        return {
            qnas : ''
        };
    },
    mounted() {
        console.log(this.$route.params.id)
        console.log('Component mounted.')
        Axios.get('/api/qna/' + this.$route.params.id)
        .then(response => {
            console.log(response.data.qna)
            this.qnas = response.data.qna
        })
        .catch(error => {
            console.log(error)
        })
    },
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
.footer {
    margin-top: 180px;
    margin-bottom: 40px;
}
.footer #foot {
    text-align: center;
}

.container{
    display: flex;
    margin-top: 50px;
    width: 100%;
    

}

.item2{
    margin-top : 200px;
    color : white;
}

.data{
    height: 300px;
    border: 1px solid black;
 
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