<template>
    <div class="all">
        <div class="title">
            <h2>8</h2>
        </div>
        <div class="navi">
            <div id="navibar">
                <a href="/../member">조원소개</a>
                <a href="/../japan">현지학기제</a>
                <a href="">QnA</a>
            </div>
        </div>
        <div class="navilog">
            <div class="login">
                <a href="/../login">로그인</a>
            </div>
        </div>
        <div class="body">
            <div class="btn-group">

                <button class="mocean-modal-button" data-mocean-type="slide-in-top">weak 1</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-right">weak 2</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-bottom">weak 3</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-left">weak 4</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-top" data-mocean-out-type="slide-out-bottom">weak 5</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-bottom" data-mocean-out-type="slide-out-top">weak 6</button>
                <button class="mocean-modal-button" data-mocean-type="slide-in-left" data-mocean-out-type="slide-out-right">weak 7</button>

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