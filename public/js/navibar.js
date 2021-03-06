$(function () {
    var lastScrollTop = 0,
        delta = 15;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta) return; // 스크롤값을 받아서 리턴한다. 
        if ((st > lastScrollTop) && (lastScrollTop > 0)) {
            $("#all").css("top", "-160px"); // 스크롤을 내렸을때 #header의 CSS 속성중 top 값을 -160px로 변경한다. 
            $("#navilog").css("top", "-160px");
        } else {
            $("#all").css("top", "0px"); // 스크롤을 올렸을때 #header의 CSS 속성중 top 값을 0px로 변경한다.
            $("#navilog").css("top", "0px");
        }
        lastScrollTop = st;
    });
});