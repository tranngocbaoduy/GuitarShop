let quantiyFirst = 4;

function loadProductByQuantity(number) {
    $.ajax({
        type: 'GET',
        url: 'controller/ProductController.php',
        data: {
            action: "getProductByQuantity",
            quantity: number
        },
        dataType: 'json',
        success: function (result) {
            let html = '';
            let count = 0;
            // Kết quả là một object json
            // Nên ta sẽ loop result
            $.each(result, function (key, item) {
                html += '<div class=\"col-lg-3 col-md-6 col-sm-6 product \"><a href=\"productDetail.php?id=';
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
            $('#new-product').html(html);
        },
        error: function () {
            alert('Không thể load dữ liệu');
        }

    });
    $.ajax({
        type: 'GET',
        url: 'controller/ProductController.php',
        data: {
            action: "getBestSellProduct"
        },
        dataType: 'json',
        success: function (result) {
            let html = '';
            let count = 0;
            // Kết quả là một object json
            // Nên ta sẽ loop result
            $.each(result, function (key, item) {
                html += '<div class=\"col-lg-3 col-md-6 col-sm-6 product \"><a href=\"productDetail.php?id=';
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
            $('#best-seller').html(html);
        },
        error: function () {
            alert('Không thể load dữ liệu');
        }

    });
}



//load more 4 product if clicked
$('#btn-more-1').on("click",function() {
    // alert($('#new-product div:last-child a').attr("id"));
    //loadProductByQuantity(parseInt($('#new-product div:last-child').attr("id"))+3);
});

// load khi vao trang index
loadProductByQuantity(quantiyFirst);
