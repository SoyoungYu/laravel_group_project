<template>
    <div class="item2">
        <form>
            <table style="text-align: center; border: 1px solid #dddddd">
                <thead>
                    <tr>
                        <th colspan="2" style="background-color: #eeeeee; text-align: center;">게시판 글쓰기 양식</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form_control" placeholder="제목" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td><textarea class="form_control2" placeholder="내용"  maxlength="2048" style="height: 400px;" ></textarea></td>
                    </tr>
                </tbody>
                </table>	
            <input type="submit" value="완료" />
            <input type="button" value="취소"/>
        </form>
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
.item1{
    flex-basis:20%;
}
.item2{
    flex-basis:60%;
}
.item3{
    flex-basis:20%;
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