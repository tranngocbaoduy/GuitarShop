$(document).ready(function(){
    $(window).resize(function(){
        $(".input-group input").val($(window).width());
        if(parseInt($(window).width()) <=1318){
            $("#header").addClass("navbar-right");
        }else{
            $("#header").removeClass("navbar-right");
        }
    });
    $(".input-group input").val($(window).width());
    if(parseInt($(window).width()) <=1318){
        $("#header").addClass("navbar-right");
    }else{
        $("#header").removeClass("navbar-right");

    }

    $(".navbar-header button").click(function(){
        if($("#check-btn").val()==0){
            $("#check-btn").val("1");
            $(".input-group").css("margin-top","50px");
            $(".input-group").css("margin-right","0px");
        }else{
            $("#check-btn").val("0");
            $(".input-group").css({
                "margin-top":"10px",
                "margin-right":"-43px"
            });

        }
        console.log($("#check-btn").val());
    });
});