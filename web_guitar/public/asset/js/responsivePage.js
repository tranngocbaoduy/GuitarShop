$(document).ready(function(){
    // $(window).resize(function(){
    //     $(".input-group input").val($(window).width());
    //     if(parseInt($(window).width()) <=1318){
    //         $("#header").addClass("navbar-right");
    //         $("my-input").removeClass("navbar-right");
    //     }else{
    //         $("#header").removeClass("navbar-right");
    //     }
    //     if(parseInt($(window).width()) <=800){
    //         $("my-input").removeClass("navbar-right");
    //     }else{
    //         $("my-input").addClass("navbar-right");
    //     }
    // });
    // $(".input-group input").val($(window).width());
    // if(parseInt($(window).width()) <=1318){
    //     $("#header").addClass("navbar-right");
    //     $("my-input").removeClass("navbar-right");
    // }else{
    //     $("#header").removeClass("navbar-right");
    //
    // }
    // if(parseInt($(window).width()) <=800){
    //     $("my-input").removeClass("navbar-right");
    // }else{
    //     $("my-input").addClass("navbar-right");
    // }

    $(".navbar-header button").click(function(){
        if($("#check-btn").val()==0){
            $(".input-group").css("margin-top","50px");
            $(".input-group").css("margin-right","20px");
            $("#check-btn").val("1");
        }else{
            $(".input-group").css("margin-top","10px");
            $("#check-btn").val("0");
            $(".input-group").css("margin-right","20px");
        }
    });
});