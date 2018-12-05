
$(document).ready(function(){

    $('.product').click(function () {
        window.location.assign('/detail-product-id='+$(this).attr('id'));
    });

});

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
            let html = '';
            let htmlHeader = '';
            if(result['status']){
                for(let i =0; i<result['products'].length;i++){
                    html+="<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 product\" id=\""+result['products'][i]['id']+"\">\n" +
                        "                            <img src=\"uploads/"+result['products'][i]['image'] +"\"  alt=\"Avatar\" style=\"width:100%\">\n" +
                        "                            <h4><b>"+result['products'][i]['name']+"<br>"+result['products'][i]['price']+"</b></h4>\n" +
                        "                        </div>";
                }

                $('#hold-skip-product').val(result['numberSkip']);
                $("#list-product-by-cate").append(html);
                $('.product').click(function () {
                    window.location.assign('/detail-product-id='+$(this).attr('id'));
                });

                return;
            }

        },
        error: function () {
            alert('Không thể load dữ liệu');
        }
    });


}
$(document).ready(function(){
    $(".btn-more").click(function(){
        getProductByCategoryMore();
    });
});