$(function() {
    $('.dash-a').click(function() {
        updateLinkActive(this.href);
        if (this.hash == '#/booking') {
            show_booking();
        } else if (this.hash == '#/dashboard') {
            show_dashboard();
        } else if (this.hash == '#') {
            show_dashboard();
        }
    });

});