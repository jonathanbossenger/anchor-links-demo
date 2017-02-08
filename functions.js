jQuery(function ($) {
    $( document ).ready(function() {
        // accordion
        if (typeof openers.accordion !== 'undefined') {
            var accordion_element = '#my-accordian .' + openers.accordion + ' h5.et_pb_toggle_title';
            $(accordion_element).click();
            $("html, body").animate({ scrollTop: $('#my-accordian').offset().top }, 1000);
        }
        // tab
        if (typeof openers.tab !== 'undefined') {
            var tab_element = '#my-tabs .' + openers.tab + ' a';
            $(tab_element).click();
            $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
        }
    });
});