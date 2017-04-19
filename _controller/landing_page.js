var show_dashboard = function(){
    $("#baseview").load("./_view/dashboard.php");  
}
var show_booing = function(){
    $("#baseview").load("./_view/newtask.php");  
}

if($(location).attr('hash').length <1 || $(location).attr('hash') == null){
    show_dashboard();
}else if($(location).attr('hash')=='#/booking'){
    show_booing();
}else{
    show_dashboard();
}
