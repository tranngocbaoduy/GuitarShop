
$(document).ready(function(){
    let searchParams = new URLSearchParams(window.location.search);
    let paramCate = 'null';
    if(searchParams.has('cate')) {
        paramCate = searchParams.get('cate');
    }

    $.ajax({
        type: 'get',
        url: 'controller/ProductController.php',
        dataType: 'json',
        data: {
            idCategory: paramCate,
            action: "getProductByCategory" // get by cate
        },
        success: function (data) {
            let html = '';
            let count = 0;
            // Kết quả là một object json
            // Nên ta sẽ loop result

            $.each(data, function (key, item) {
                // html += ' <div class=\"col-lg-4 col-md-6 col-sm-6 product\"><img src=\"';
                // html += item['image'];
                // html += '\" alt=\"Avatar\" style=\"width:100%\"><h4><b>';
                // html += item['name'];
                // html += '<br>';
                // html += item['price'];
                // html += '</b></h4></div>';

                html += '<div class=\"col-lg-4 col-md-6 col-sm-6 product \"><a href=\"productDetail.php?id=';
                html += item['id'];
                html += '">';
                html += '<img src="';
                html += item['image'];
                html += '" alt="Avatar" style="width:100%">';
                html += '<h4><b>';
                html += item['name'];
                html += '<br>';
                html += item['price'];
                html += '</b></h4></a></div>';
            });


            $('#list-product-by-cate').html(html);
        },
        error: function(data){
            alert("Không thể load dữ liệu" );
        }
    });

});
