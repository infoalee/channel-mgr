$(function() {

    if ($(location).attr('hash').length < 1 || $(location).attr('hash') == null) {
        show_dashboard();
    } else if ($(location).attr('hash') == '#/booking') {
        show_booing();
    } else if ($(location).attr('hash') == '#/calendar') {
        show_calendar();
    } else {
        show_dashboard();
    }

});