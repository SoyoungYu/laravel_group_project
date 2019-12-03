for (i = 1; i <= 7; i++) {
    jQuery('#japan_week'+i).click(function () {
        if ($('#japan_weekHidden').css("display") == "none") {
            jQuery('#japan_weekHidden').show();
        } else {
            jQuery('#japan_weekHidden').hide();
        }
    });
}