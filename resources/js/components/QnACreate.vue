<template>
    <div class="item2">
        <form id="create">
            <table>
                <thead>
                    <tr>
                        <th colspan="2" style="text-align: center; color: white;">새 글 작성하기</th>
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
            <input type="submit" value="완료" id="ok"/>
            <input type="button" value="취소" id="cancel"/>
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