$(document).ready(function () {
    if (checkHasLoginYet()) {
        fillInfoOrder();
    }


});

function checkHasLoginYet() {
    let checkLogin = localStorage.getItem('tokenCustomer');
    if (checkLogin != null) {
        return true;
    } else {
        window.location.assign('/userLogin');
        alert('You must login first!!!');
    }
}

function getProductById(idProduct){
    let data={
        id: idProduct
    }

   return $.ajax({
        type:'get',
        url: '/getProductByIdAjax',
        cache: false,
        data: data,
    })
}

function fillInfoOrder() {
    let tokenCustomer = localStorage.getItem('tokenCustomer');

    let data = {
        token: tokenCustomer,
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '/getInfoOrder',
        cache: false,
        data: data,
        success: function (result) {
            console.log("Request sent1")
            console.log(result['message']);
            if (result['status']) {
                let myAllOrder = '';
                let colorTable = ['success','warning','info'];
                // i là theo từng bill
                // j là các sản phẩm trong bill
                let num = 0;
                for(let i = 0; i< result['listProductOrdered'].length;i++){
                    let htmlProductByBill = '';
                    if(num >2 ){
                        num = 0;
                    }
                    for(let j = 0; j < result['listProductOrdered'][i].length;j++){

                        let product = getProductById(result['listProductOrdered'][i][j]['id_product']);
                        console.log(product.success);
                        htmlProductByBill += ' <tr class="'+colorTable[parseInt(num)]+'"><td>'+result['listProductOrdered'][i][j]['created_at']+'</td>'+
                            '<td><img width="30%" alt="product" src="uploads/'+result['listProductOrdered'][i][j]['image']+'" ></td>\n' +
                            '                        <td>'+result['listProductOrdered'][i][j]['name']+'</td>\n' +
                            '                        <td>'+result['listProductOrdered'][i][j]['price']+'</td>\n' +
                            '                        <td>'+result['listProductOrdered'][i][j]['quantity']+'</td>\n' +
                            '                        <td>'+result['listProductOrdered'][i][j]['price']*result['listProductOrdered'][i][j]['quantity']+'</td>\n' +
                            '                        <td><button type="button">Edit</td></tr> '

                    }
                    num++;
                    myAllOrder+= htmlProductByBill;
                }


                $('#my-order').html(myAllOrder);
                // console.log(result['listProductOrdered']);
            }


        },
        error: function (data) {
            alert("Error send request");
        }
    });

}