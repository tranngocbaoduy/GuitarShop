

function getProductByCategoryMore() {
    let idCate= $('#hold-id-cate').val();
    let numberSkip= $('#hold-skip-product').val();
    let whatPage='Product';
    let data ={
        id:idCate,
        whatPage:whatPage,
        numberSkip:numberSkip,
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    console.log(data);
    $.ajax({
        type: 'GET',
        url: '/getProductByCategoryMore',
        data :data,
        cache : false,
        success: function (result) {
            console.log('message: ' +result['message']);
            let html = '';
            let htmlHeader = '';
            if(result['status']){
                for(let i =0; i<result['products'].length;i++){
                    html+="<div style='display: none' class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 product load\" id=\""+result['products'][i]['id']+"\">\n" +
                        "                            <img src=\"uploads/"+result['products'][i]['image'] +"\"  alt=\"Avatar\" style=\"width:100%\">\n" +
                        "                            <h4><b>"+result['products'][i]['name']+"<br>"+result['products'][i]['price']+"</b></h4>\n" +
                        "                        </div>";
                }

                $('#hold-skip-product').val(result['numberSkip']);
                let htmlImg = '';
                htmlImg = '<div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 loading"></div><div  class="col-lg-2 col-md-4 col-sm-4 col-xs-4 loading"><img src="asset/images/loading-1.gif" style="width:100%;display: block" alt="loading"></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 loading"></div>';
                $("#list-product-by-cate").append(htmlImg+html);
                setTimeout(function() {
                    $(".loading").css('visibility', 'visible').show('slow').fadeOut("slow");
                },600);
                setTimeout(function(e){
                    $('.load').fadeIn('slow');

                    $(".loading").remove();
                    $('.product').click(function () {
                        window.location.assign('/detail-product-id=' + $(this).attr('id'));
                    });
                },500);
            }

        },
        error: function () {
            alert('Không thể load dữ liệu');
        }
    });
}

function getBestSellerMore() {

    let numberSkip= $('#hold-skip-product-2').val();
    let whatPage='Home';
    let data ={
        whatPage:whatPage,
        numberSkip:numberSkip,
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        url: '/getBestSeller',
        data :data,
        cache : false,
        success: function (result) {
            let html = '';
            let htmlHeader = '';
            if(result['status']){
                for(let i =0; i<result['products'].length;i++){
                    html+="<div style='display: none;'class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 product load\" id=\""+result['products'][i]['id'] +"\"`>\n<img src=\"asset/images/best-seller.png\" style=\"width:18%;position:absolute;top:15px;right:15px;z-index:10;\" alt=\"best-seller\">" +
                        "                            <img src=\"uploads/"+result['products'][i]['image'] +"\"  alt=\"Avatar\" style=\"width:100%;z-index: 1\">\n" +
                        "                            <h4><b>"+result['products'][i]['name']+"<br>"+result['products'][i]['price']+"</b></h4>\n" +
                        "                        </div>";
                }

                $('#hold-skip-product-2').val(result['numberSkip']);

                let htmlImg = '';
                htmlImg = '<div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 loading"></div><div  class="col-lg-2 col-md-4 col-sm-4 col-xs-4 loading"><img src="asset/images/loading-1.gif" style="width:100%;display: block" alt="loading"></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 loading"></div>';
                $("#best-seller").append(htmlImg+html);
                setTimeout(function() {
                    $(".loading").css('visibility', 'visible').show('slow').fadeOut("slow");
                },600);
                setTimeout(function(e){
                    $('.load').fadeIn('slow');

                    $(".loading").remove();
                    $('.product').click(function () {
                        window.location.assign('/detail-product-id=' + $(this).attr('id'));
                    });
                },500);
            }
        },
        error: function () {
            alert('Không thể load dữ liệu');
        }
    });

}
$(document).ready(function(){
    $("#btn-more-1").click(function(){
        getProductByCategoryMore();
    });


    $("#btn-more-2").click(function(){
        getBestSellerMore();
    });

    $('.product').click(function () {
        window.location.assign('/detail-product-id='+$(this).attr('id'));
    });

});