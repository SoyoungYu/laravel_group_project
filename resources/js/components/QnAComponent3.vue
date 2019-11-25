<template>
    <div class="container">
        <div class="item1"></div>
        <div class="item2">
            <div class="title">제목</div>
            <div class="data">내용<br>내용</div>
            <div class="comment">
                <div class="comment_data">dddddddd</div>
                <input type="text" name="댓글쓰기" class="comment_text">
                <input type="button" value="글쓰기">
            </div>
        </div>
        <div class="item3"></div>
        <input type="button" value="목록" class= "list_btn">
    </div>
</template>

<script>
export default {
    mounted() {
            console.log('Component mounted.')
        }
}
</script>