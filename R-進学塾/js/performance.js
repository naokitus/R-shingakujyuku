$(function(){
    $(".toggle").on("click",function(){
        $(this).next().slideToggle(200);
    })
});