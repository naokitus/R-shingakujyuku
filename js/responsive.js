$(function(){
    $("#hamburger").click(function(){
        $(this).toggleClass("active");
        $("#hamburger-menu").toggleClass("open");
    });
});