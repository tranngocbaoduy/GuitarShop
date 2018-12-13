
$(document).ready(function () {
    function loadCart(){
        let yourCartJsonString = '';
        let groupProductId = [];
        let yourCart = [];
        let check = sessionStorage.getItem("cart");
        if(check == null){
            sessionStorage.setItem("cart",[]);

        }else {
            yourCartJsonString = sessionStorage.getItem("cart");
            if(yourCartJsonString!=''){
                yourCart = JSON.parse(yourCartJsonString);
            }
            console.log(yourCart);
            for(let i =0 ; i<yourCart.length;i++){
                groupProductId.push(yourCart[i]['id']);
            }
            var data ={
                groupProductId:groupProductId
            }
            $.ajax({
                type: 'get',
                url: '/getProductByGroupIdAjax',
                data: data,
                success: function (result) {

                    console.log(result['message']);
                    console.log(result['productGroup']);
                    let html = "";
                    let total = 0;
                    let tempProduct = {
                        id:'',
                        quantity: 0,
                        price:0
                    };
                    for(let i = 0; i< result['productGroup'].length;i++){
                        for(let j =0; j< yourCart.length;j++){
                            if(result['productGroup'][i]['id']==yourCart[j]['id']){
                                tempProduct.id = yourCart[j]['id'];
                                tempProduct.quantity = yourCart[j]['quantity'];
                                tempProduct.price = yourCart[j]['price'];
                                break;
                            }
                        }
                        let subtotal = result['productGroup'][i]['price'] *tempProduct.quantity ;
                        total += subtotal;
                        html += "<tr>\n" +
                            "                    <td><img src=\"uploads/"+result['productGroup'][i]['image']+"\" alt=\"Avatar\" style=\"width:100%\"></td>\n" +
                            "                    <td data-th=\"Product\">\n" +
                            "                        <h4 class=\"nomargin\">" +result['productGroup'][i]['name'] +"</h4>\n" +
                            "                    </td>\n" +
                            "                    <td data-th=\"Price\" >$ "+ result['productGroup'][i]['price']+ "</td>\n" +
                            "                    <td data-th=\"Quantity\"'>\n" +
                            "                        <input type=\"number\" id=\""+tempProduct.id+"-quantity\"class=\"form-control text-center\" data-num=\""+tempProduct.quantity+ "\" value=\"";

                        html += tempProduct.quantity;
                        html +="\">\n" +
                            "                    </td>\n" +
                            "                    <td data-tr=\"Subtotal\" class=\"text-center subtotal\"><span>$ "+subtotal+"</span></td>\n" +
                            "                    <td class=\"actions\" data-th=\"\">\n" +
                            "                        <button class=\"btn btn-info btn-delete\" id=\""+tempProduct.id+"-btn-remove\"'>x<i class=\"fa fa-refresh\"></i></button>\n" +
                            "                    </td>\n" +
                            "                </tr>";
                    }


                    $('#your-cart').html(html);
                    sessionStorage.setItem('total',total.toFixed(2));

                    $('#total').html(total);


                    $('input[type=number]').on('change',function(){
                        //quantity not < 0
                        let valueCurrent = 0;
                        let quantity= $(this).val();
                        let id = formatId($(this).attr('id'));
                        if($(this).val()<=0){
                            alert('Invalid number');
                            $(this).val(1);
                            return;
                        }
                        // quantity not > quantity of product current
                        for(let i =0; i<result['productGroup'].length;i++){
                            if(result['productGroup'][i]['id']== id && result['productGroup'][i]['quantity']< quantity ){
                                valueCurrent=result['productGroup'][i]['price']*quantity;
                                alert('Quantity Only '+ result['productGroup'][i]['quantity']);
                                $(this).val(result['productGroup'][i]['quantity']);
                                return;
                            }
                        }

                        for(let i =0; i<result['productGroup'].length;i++){
                            if(result['productGroup'][i]['id']== id){
                                valueCurrent=result['productGroup'][i]['price']*quantity;

                                break;
                            }
                        }
                        total = 0;
                        console.log(total);
                        for(let i = 0; i<yourCart.length; i++){
                            if(yourCart[i]['id']==id){
                                yourCart[i]['quantity'] = quantity;
                                yourCartJsonString = JSON.stringify(yourCart);
                                sessionStorage.setItem('cart',yourCartJsonString);
                            }
                            total += parseFloat(yourCart[i]['price']) * parseInt(yourCart[i]['quantity']);
                            console.log(total);
                        }
                        $('#total').html(total.toFixed(2));
                        if(sessionStorage.getItem('total')==null){
                            sessionStorage.setItem('total',null);
                        }else{
                            sessionStorage.setItem('total',total.toFixed(2));
                        }
                        $(this).parent().parent().children('td').children('span').html("$ "+valueCurrent.toFixed(2));
                    });


                    $(".btn-delete").on("click",function(e){

                        let message = confirm("Do you want to delete it?");
                        if(message){
                            let yourCartJsonString = sessionStorage.getItem("cart");
                            let yourCart = JSON.parse(yourCartJsonString);
                            for(let i =0; i<yourCart.length;i++){
                                if(yourCart[i]['id']== formatId($(this).attr('id'))){
                                    yourCart.splice(i,1);
                                    break;
                                }
                            }
                            yourCartJsonString = JSON.stringify(yourCart);
                            sessionStorage.setItem("cart",yourCartJsonString);
                            $(this).parent().parent().remove();
                            console.log("Delete product in cart success !!");
                        }
                    });

                    console.log($('#total').html());
                   // alert( $('#total').html('asd'))

                },
                error: function(data){
                    alert("Không thể load dữ liệu" );
                }
            });

        }



    }
    loadCart();
    function formatId(id){
        let temp = '';
        let fmId = '';
        for(let i =0 ;i< id.length;i++){
            if(id[i]=="-"){
                break;
            }
            temp+=id[i];
        }
        for(let i =0 ;i< temp.length;i++){
            fmId+=temp[i];
        }
        return fmId;
    }
});