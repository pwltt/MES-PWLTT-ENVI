$(function(){
    $("#register_dialog").dialog({
        autoOpen: false
    });

    $("#register").click(function(){
        $('#register_dialog').dialog("open");
    })
});
$(function(){
    $("#login_dialog").dialog({
        autoOpen: false
    });

    $("#login_button").click(function(){
        $('#login_dialog').dialog("open");
    })
});
   