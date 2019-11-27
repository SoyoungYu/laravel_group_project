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