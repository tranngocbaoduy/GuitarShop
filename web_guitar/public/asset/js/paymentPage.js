$('#total').html("Total: $ " + sessionStorage.getItem('total'));

function validateInput() {
    if ($("#f-name").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid First Name. Please check again !!");
        $('#f-name').focus();
        return false;
    } else if ($("#l-name").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Last Name. Please check again !!");
        $('#l-name').focus();
        return false;
    } else if ($("#address").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Address. Please check again !!");
        $('#address').focus();
        return false;
    } else if ($("#email").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Email. Please check again !!");
        $('#email').focus();
        return false;
    } else if ($("#phone").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Phone. Please check again !!");
        $('#phone').focus();
        return false;
    } else if ($("#city").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid City. Please check again !!");
        $('#city').focus();
        return false;
    } else if ($("#country").val() == 0) {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Country. Please check again !!");
        $('#country').focus();
        return false;
    } else if ($("#code").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Postal Code. Please check again !!");
        $('#code').focus();
        return false;
    } else if ($("#card-name").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Card Name. Please check again !!");
        $('#card-name').focus();
        return false;
    } else if ($("#card-number").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Card Number. Please check again !!");
        $('#card-name').focus();
        return false;
    }
    return true;
}

$(document).ready(function () {

    $(".btn-payment").click(function () {

        if (validateInput()) {
            let yourCartJsonString = '';
            let yourCart = [];
            let checkCart = sessionStorage.getItem("cart");

            let dataUser = {
                name: $("#f-name").val() + " " + $("#l-name").val(),
                address: $("#address").val() + $("#city").val(),
                phone: $("#phone").val(),
                email: $("#email").val(),
                country: $("#country").val(),
                postCode: $("#code").val(),
                cardName: $("#card-name").val(),
                cardNumber: $("#card-number").val(),
            }

            if (checkCart == null) {
                sessionStorage.setItem("cart", null);
            } else {
                yourCartJsonString = sessionStorage.getItem("cart");
                yourCart = JSON.parse(yourCartJsonString);
                console.log(yourCart);

            }
            //get product info in cart
            let listProducts = [];
            for (let i = 0; i < yourCart.length; i++) {
                let product = {
                    id: yourCart[i]['id'],
                    quantity: yourCart[i]['quantity'],
                    price: yourCart[i]['price'],
                }
                listProducts.push(product);
            }

            let dataProduct = {
                product: listProducts,
                total: sessionStorage.getItem('total'),
            }

            console.log(dataUser);
            console.log(dataProduct);
            let data = {
                dataUser: dataUser,
                dataProduct: dataProduct,
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "post",
                url: "/createBill",
                data: data,
                cache: false,
                success: function (data) {
                    console.log('Request sent !');
                    if (data.status) {
                        console.log('message: ' + data['token']);
                        let htmlProductInfo = '';
                        let htmlCustomerInfo = '';


                        htmlCustomerInfo += " <table class=\"table table-hover\" ><tr>\n" +
                            "                            <td style=\"opacity: 0.4\">Name. </td>\n" +
                            "                            <td>" + data['customer']['name'] + "</td>\n" +
                            "                        </tr>\n" +
                            "                        <tr>\n" +
                            "                            <td style=\"opacity: 0.4\">Address. </td>\n" +
                            "                            <td>" + data['customer']['address'] + " " + data['customer']['country'] + "</td>\n" +
                            "                        </tr>\n" +
                            "                        <tr>\n" +
                            "                            <td style=\"opacity: 0.4\">Email. </td>\n" +
                            "                            <td>" + data['customer']['email'] + "</td>\n" +
                            "                        </tr>\n" +
                            "                        <tr>\n" +
                            "                            <td style=\"opacity: 0.4\">Phone. </td>\n" +
                            "                            <td>" + data['customer']['phone'] + "</td>\n" +
                            "                        </tr> <tr>\n" +
                            "                            <td style=\"opacity: 0.4\">Your code. </td>\n" +
                            "                            <td>" + data['token'] + "</td>\n" +
                            "                        </tr>   <tr>\n" +
                            "                         <td>.</td><td><span style=\"width: 100%\" class=\"label label-danger\">This is your code use to check your order. Please check email to get code!!! Thanks</span></td>\n" +
                            "                        </tr>" +
                            "                            </table>";

                        let count = 1;
                        for (let i = 0; i < data['listProductInfo'].length; i++) {
                            htmlProductInfo += "<tr>\n" +
                                "                            <td>" + count + "</td>\n" +
                                "                            <td>" + data['listProductInfo'][i]['name'] + "</td>\n" +
                                "                            <td>" + data['listProductInfo'][i]['price'] + "</td>\n" +
                                "                            <td>" + data['listProductInfo'][i]['quantity'] + "</td>\n" +
                                "                        </tr>";
                            count++;
                        }
                        htmlProductInfo += "<tr><td colspan='2'></td><td>Total. </td><td>" + data['bill']['total'] + "</td></tr>";

                        $('#info-customer').html(htmlCustomerInfo);
                        $('#info-product').html(htmlProductInfo);



                        //show order bill
                        $('.btn-bill').click();
                        $('.close').click(function () {
                            alert('You\'ll direct to Home Page. Thanks your purchase');
                            sessionStorage.clear();
                            window.location.assign('/home');

                        });
                        window.onclick = function (event) {
                            alert('You\'ll direct to Home Page. Thanks your purchase');
                            sessionStorage.clear();
                            window.location.assign('/home');

                        }

                    }

                },
                error: function (data) {
                    alert('Request Failed..');
                }
            });
        }


    });
    $("#f-name").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#l-name").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#address").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#city").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#email").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#phone").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#country").change(function () {
        $('.message-error').hide('slow');
    });
    $("#code").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#card-name").keyup(function () {
        $('.message-error').hide('slow');
    });
    $("#card-number").keyup(function () {
        $('.message-error').hide('slow');
    });

});