function pageReady() {


    let temp = '';
    let id = '';
    let searchParams = window.location.href;
    for (let i = searchParams.length - 1; i >= 0; i--) {
        if (searchParams[i] === '=' && searchParams[i - 1] == 'd') {
            break;
        }
        temp += searchParams[i];
    }

    for (let i = temp.length - 1; i >= 0; i--) {
        id += temp[i];
    }
    let data = {
        id: id,
    }
    $.ajax({
        type: 'get',
        url: '/getProductByIdAjax',
        data: data,
        dataType: 'json',
        success: function (result) {
            /// load dữ liệu info chung product
            let htmlInfo = '';
            console.log(result['message']);
            htmlInfo += '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 product">\n' +
                '                        <img src="uploads/';
            htmlInfo += result['product']['image'];
            htmlInfo += '" alt="Avatar" style="width:100%">\n' +
                '                    </div>\n' +
                '                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">\n' +
                '                        <ul class="detail">\n' +
                '                            <li><h1><b>';
            htmlInfo += result['product']['name'];
            htmlInfo += '</b></h1></li><li>Price : ';
            htmlInfo += result['product']['price'];
            htmlInfo += '</li><li>Brand : ';
            htmlInfo += '<b class="brand"></b>';
            htmlInfo += '</li>\n' +
                '                            <li>Quantity\n' +
                '                                <div class="qty mt-5" style="float: right; margin-left: -70px">\n' +
                '                                    <span class="minus bg-dark">-</span>\n' +
                '                                    <input type="number" id="quantity-product-buy" class="count" name="qty" value="1">\n' +
                '                                    <span class="plus bg-dark">+</span>\n' +
                '                                </div>\n' +
                '\n' +
                '                            </li>\n' +
                '                            <br/>\n' +
                '\n' +
                '                            <li>\n' +
                '                                <button id="add-to-cart" class="btn-add-to-cart">Add to Cart</button>\n' +
                '                            </li>\n' +
                '                        </ul>\n' +
                '                    </div>';

            let idCategory = result['product']['id_category'];
            let idBrand = result['product']['id_brand'];
            $("#info-product").html(htmlInfo);
            let quantityCurrentProduct = parseInt(result['product']['quantity']);
            $('.count').prop('disabled', true);
            $(document).on('click', '.plus', function () {
                if (parseInt($('.count').val()) < quantityCurrentProduct){
                    $('.count').val(parseInt($('.count').val()) + 1);
                }else{
                    alert('Product has just quantity: '+ quantityCurrentProduct);
                }
            });
            $(document).on('click', '.minus', function () {
                $('.count').val(parseInt($('.count').val()) - 1);
                if ($('.count').val() == 0) {
                    $('.count').val(1);
                }
            });

            let detailHtml = '';
            detailHtml += ' <li>Brand Name: <b class="brand">' + result['product']['id_brand'] + '</b></li>\n' +
                '                            <li>Type: <b>' + result['product']['id_category'] + '</b></li>\n' +
                '                            <li>Suitable For: <b>Beginner, Unisex, Professional Performance, Home-schooling</b></li>\n' +
                '                            <li>Model Number: <b>AGT16</b></li>\n' +
                '                            <li>Pickup: none</li>\n' +
                '                            <li>Tone Position: <b>18</b></li>' +
                '                            <li>Description: <b>' + result['product']['description'] + '</b></li>';

            $('#ptap-detail').html(detailHtml);

            let dataCategory = {
                id: idCategory,
            }
            $.ajax({
                type: 'get',
                url: '/getCategoryByIdAjax',
                dataType: 'json',
                cache: false,
                data: dataCategory,
                success: function (result) {
                    /// load dữ liệu info chung product
                    console.log('message: ' + result['message']);
                    if (result['status']) {
                        let htmlCate = '';
                        htmlCate += '<h1 class="title-product"><b>';
                        htmlCate += result['category']['name'];
                        htmlCate += '</b></h1>';

                        let htmlCateMore = '';
                        htmlCateMore += '<h1 class="title-product"><b> ';
                        htmlCateMore += 'More';
                        htmlCateMore += '</b></h1>';

                        $(".cate-product").html(htmlCate);
                        $(".cate-product-more").html(htmlCateMore);

                        let dataBrand = {
                            id: idBrand,
                        }
                        $.ajax({
                            type: 'get',
                            url: '/getBrandByIdAjax',
                            dataType: 'json',
                            cache: false,
                            data: dataBrand,
                            success: function (result) {
                                /// load dữ liệu info chung product
                                console.log('message: ' + result['message']);
                                if (result['status']) {
                                    $('.brand').html(result['brand']['name']);
                                }
                                // let htmlCate = '';
                                //
                                // console.log(result['message']);
                                // htmlCate += '<h1 class="title-product"><b>';
                                // htmlCate += result['category']['name'];
                                // htmlCate += '</b></h1>';
                                //
                                // let htmlCateMore = '';
                                // htmlCateMore += '<h1 class="title-product"><b> ';
                                // htmlCateMore += 'More';
                                // htmlCateMore += '</b></h1>';
                                //
                                // $(".cate-product").html(htmlCate);
                                // $(".cate-product-more").html(htmlCateMore);

                            },
                            error: function (data) {
                                alert("Không thể load dữ liệu");
                            }
                        });
                    }

                },
                error: function (data) {
                    alert("Không thể load dữ liệu");
                }
            });


            $("#add-to-cart").on('click', function () {
                let yourCartJsonString = '';
                let exist = false;
                let yourCart = [];
                let check = sessionStorage.getItem("cart");
                if (check == null) {
                    sessionStorage.setItem("cart", []);
                } else {
                    yourCartJsonString = sessionStorage.getItem("cart");
                    if (yourCartJsonString != '') {
                        yourCart = JSON.parse(yourCartJsonString);
                    }
                    for (let i = 0; i < yourCart.length; i++) {
                        if (result['product']['id'] == yourCart[i]['id']) {
                            yourCart[i]['quantity'] = parseInt(yourCart[i]['quantity']) + parseInt($('#quantity-product-buy').val());
                            exist = true;
                            break;
                        }
                    }
                }

                if (!exist) {
                    let data = {
                        id: result['product']['id'],
                        quantity: $('#quantity-product-buy').val(),
                        price: result['product']['price'],
                    }
                    yourCart.push(data);
                }

                console.log(yourCart);
                yourCartJsonString = JSON.stringify(yourCart);
                sessionStorage.setItem("cart", yourCartJsonString);

                window.location.assign("/yourCart");
            });
        },
        error: function (data) {
            alert("Không thể load dữ liệu");
        }
    });
}


function getProductSameCategoryMore() {
    let idCate = $('#hold-id-cate').val();
    let numberSkip = $('#hold-skip-product').val();

    let whatPage = 'Home';
    let data = {
        id: idCate,
        whatPage: whatPage,
        numberSkip: numberSkip,
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log(data);
    $.ajax({
        type: 'GET',
        url: '/getProductSameCategoryMore',
        data: data,
        cache: false,
        success: function (result) {
            let html = '';
            let htmlHeader = '';
            console.log('message: ' + result['message']);
            if (result['status']) {
                for (let i = 0; i < result['products'].length; i++) {
                    html += "<div style='display: none' class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 product load\" id=\"" + result['products'][i]['id'] + "\"`>\n" +
                        "                            <img src=\"uploads/" + result['products'][i]['image'] + "\"  alt=\"Avatar\" style=\"width:100%;z-index: 1\">\n" +
                        "                            <h4><b>" + result['products'][i]['name'] + "<br>" + result['products'][i]['price'] + "</b></h4>\n" +
                        "                        </div>";
                }

                $('#hold-skip-product').val(result['numberSkip']);

                let htmlImg = '';
                htmlImg = '<div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 loading"></div><div  class="col-lg-2 col-md-4 col-sm-4 col-xs-4 loading"><img src="asset/images/loading-1.gif" style="width:100%;display: block" alt="loading"></div><div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 loading"></div>';
                $("#product-same-category-more").append(htmlImg + html);
                setTimeout(function () {
                    $(".loading").css('visibility', 'visible').show('slow').fadeOut("slow");
                }, 600);
                setTimeout(function (e) {
                    $('.load').fadeIn('slow');

                    $(".loading").remove();
                    $('.product').click(function () {
                        window.location.assign('/detail-product-id=' + $(this).attr('id'));
                    });
                }, 500);

            }
        },
        error: function () {
            alert('Không thể load dữ liệu');
        }
    });
}


$(document).ready(function () {

    pageReady();

    $('.product').click(function () {
        window.location.assign('/detail-product-id=' + $(this).attr('id'));
    });

    $("#btn-more-product").click(function () {
        getProductSameCategoryMore();
    });
});
