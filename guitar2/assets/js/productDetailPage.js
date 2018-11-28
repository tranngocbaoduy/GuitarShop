
$(document).ready(function(){
    let paramIdCategory = 'null';
    let searchParams = new URLSearchParams(window.location.search);
    let paramIdProduct = 'null';
    if(searchParams.has('id')) {
        paramIdProduct = searchParams.get('id');
    }

    $.ajax({
        type: 'get',
        url: 'controller/ProductController.php',
        dataType: 'json',
        data: {
            idProduct: paramIdProduct,
            action: "getProductById" // get by id
        },
        success: function (data) {
            /// load dữ liệu info chung product
            let htmlInfo= '';
            console.log(data);
            htmlInfo += '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 product">\n' +
                '                        <img src="';
            htmlInfo += data['image'];
            htmlInfo += '" alt="Avatar" style="width:100%">\n' +
                '                    </div>\n' +
                '                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">\n' +
                '                        <ul class="detail">\n' +
                '                            <li><h1><b>';
            htmlInfo += data['name'];
            htmlInfo += '</b></h1></li><li>Price : ';
            htmlInfo += data['price'];
            htmlInfo += '</li><li>Brand : ';
            htmlInfo += data['id_cate'];
            htmlInfo += '</li>\n' +
                '                            <li>Quantity\n' +
                '                                <div class="qty mt-5" style="float: right; margin-left: -70px">\n' +
                '                                    <span class="minus bg-dark">-</span>\n' +
                '                                    <input type="number" class="count" name="qty" value="1">\n' +
                '                                    <span class="plus bg-dark">+</span>\n' +
                '                                </div>\n' +
                '\n' +
                '                            </li>\n' +
                '                            <br/>\n' +
                '\n' +
                '                            <li>\n' +
                '                                <button href="#contact" class="btn-add-to-cart">Add to Cart</button>\n' +
                '                            </li>\n' +
                '                        </ul>\n' +
                '                    </div>';

            paramIdCategory = data['id_cate'];
            $("#info-product").html(htmlInfo);

            $.ajax({
                type: 'get',
                url: 'controller/CategoryController.php',
                dataType: 'json',
                data: {
                    idCategory: paramIdCategory,
                    action: "getCategoryById" // get by id
                },
                success: function (result) {
                    /// load dữ liệu info chung product
                    let htmlCate= '';
                    console.log(result+'---');
                    htmlCate += '<h1 class="title-product"><b>';
                    htmlCate += result['name'];
                    htmlCate += '</b></h1>';


                    $("#cate-product").html(htmlCate);
                },
                error: function(data){
                    alert("Không thể load dữ liệu" );
                }
            });
        },
        error: function(data){
            alert("Không thể load dữ liệu" );
        }
    });






});
