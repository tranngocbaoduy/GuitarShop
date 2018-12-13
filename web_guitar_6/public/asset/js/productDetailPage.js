
$(document).ready(function(){
    let temp = '';
    let id = '';
    let searchParams = window.location.href;
    for(let i= searchParams.length -1; i>= 0 ; i--){
        if(searchParams[i] === '=' && searchParams[i-1] == 'd' ){
            break;
        }
        temp+=searchParams[i];
    }

    for(let i= temp.length -1; i>= 0 ; i--){
        id+=temp[i];
    }
    let data = {
        id: id  ,
    }
    $.ajax({
        type: 'get',
        url: '/getProductByIdAjax',
        data:data,
        dataType:'json',
        success: function (result) {
            /// load dữ liệu info chung product
            let htmlInfo= '';
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
            htmlInfo += result['product']['id_category'];
            htmlInfo += '</li>\n' +
                '                            <li>Quantity\n' +
                '                                <div class="qty mt-5" style="float: right; margin-left: -70px">\n' +
                '                                    <span class="minus bg-dark">-</span>\n' +
                '                                    <input type="number" id="quantity-product"class="count" name="qty" value="1">\n' +
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

            idCategory = result['product']['id_category'];
            $("#info-product").html(htmlInfo);

            data ={
                id:idCategory
            }
            $.ajax({
                type: 'get',
                url: '/getCategoryByIdAjax',
                dataType: 'json',
                data: data,
                success: function (result) {
                    /// load dữ liệu info chung product
                    let htmlCate= '';
                    console.log(result['message']);
                    htmlCate += '<h1 class="title-product"><b>';
                    htmlCate += result['category']['name'];
                    htmlCate += '</b></h1>';

                    $("#cate-product").html(htmlCate);
                },
                error: function(data){
                    alert("Không thể load dữ liệu" );
                }
            });

            $("#add-to-cart").on('click',function () {
                let yourCartJsonString = '';
                let exist = false;
                let yourCart = [];
                let check = sessionStorage.getItem("cart");
                if(check == null){
                    sessionStorage.setItem("cart",[]);
                }else{
                    yourCartJsonString = sessionStorage.getItem("cart");
                    if(yourCartJsonString!=''){
                        yourCart = JSON.parse(yourCartJsonString);
                    }
                    for(let i = 0 ; i<yourCart.length;i++){
                        if(result['product']['id']==yourCart[i]['id']){
                            yourCart[i]['quantity']++;
                            exist=true;
                            break;
                        }
                    }
                }

                if(!exist) {
                    let data = {
                        id:result['product']['id'],
                        quantity: $('#quantity-product').val(),
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
        error: function(data){
            alert("Không thể load dữ liệu" );
        }
    });






});
