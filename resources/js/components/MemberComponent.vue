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
        <section class="MOD_ACCORDION1">
            <div data-layout="_r">
                <div data-layout="al16">
                    <div class="AP_accordion" role="tablist">
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp1" tabindex="0">Tab Title 1</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <img src="/image/bird.jpg">
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp2" tabindex="0">Tab Title 2</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <img src="/image/cat.jpg">
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp3" tabindex="0">Tab Title 3</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <img src="/image/tiger.jpg">
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp4" tabindex="0">Tab Title 4</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <img src="/image/hed.jpg">
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp5" tabindex="0">Tab Title 5</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <img src="/image/lion.jpg">
                        </div>
                        <p class="AP_accordion_tab" role="tab" data-theme="_bgp6" tabindex="0">Tab Title 6</p>
                        <div class="AP_accordion_panel" role="tabpanel">
                            <img src="/image/dog.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
END MODULE AREA 1: Accordian 1
-->

        <!--<div class="intro">
            <img src="bird.jpg" id="bird">
            <img src="cat.jpg" id="cat">
            <img src="tiger.jpg" id="tiger">
            <img src="hed.jpg" id="hed">
            <img src="lion.jpg" id="lion">
            <img src="dog.jpg" id="dog">
        </div>-->
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