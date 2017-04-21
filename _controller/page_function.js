$.ajaxPrefilter(function(options, original_Options, jqXHR) {
    options.async = true;
});

function trimStr(str) { //trim User-defined function
    return str.replace(/^\s+|\s+$/g, '');
}

/*
$( document ).ajaxStart(function() {
  $( ".modal-loading" ).show();
});
$( document ).ajaxStop(function() {
  $( ".modal-loading" ).hide();
});
*/
$(document).on({
    ajaxStart: function() { $('.modal-loading').show(); },
    ajaxStop: function() { $('.modal-loading').hide(); }
});


var updateLinkActive = function(url) {

    $('ul.nav a').removeClass('active').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();;

}