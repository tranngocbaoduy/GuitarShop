$(document).ready(function () {
    loadCategory();
    loadBrand();
    checkLogin();

    $('#my-search').submit(function () {
        if($('#search-id').val() == ''){
            return false;
        }
        window.location.assign('/detail-product-id=' + $('#search-id').val());
        return false;
    });


    $('#search').autocomplete({
        source: function (request, response) {
            $.ajax({
                type: "GET",
                url: "/searchAutoComplete",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                data: {
                    term: request.term
                },
                cache: false,
                // data:'{QueryFilter: "' + request.term  + '"}',
                success: function (data) {
                    // console.log(request.term);
                    // console.log(data);
                    //
                    // //
                    response($.map(data, function (value, key) {
                        return {
                            label: value.name,
                            value: value.name,
                            id: value.id,
                            image: value.image,
                        }
                    }));


                }
            });
        },
        minLength: 1,
        autoFocus: true,
        select: function (e, ui) {
            $('#search-id').val(ui.item.id);
        },
    }).data("ui-autocomplete")._renderItem = function(ul, item) {

        let html = '';
        html+='<table>\n' +
            '                        <tr>\n' +
            '                            <td width="50%"><div ">'+item.label+'</span></td>\n' +
            '                            <td width="50%"><img alt="product"style="width: 30%;" src="uploads/'+item.image+'"></td>\n' +
            '                        </tr>\n' +
            '                    </table>';
        return $("<li style='list-style-type: none;width: 30%'>").data("ui-autocomplete-item", item).append(html).appendTo(ul);
    };
});

function autoComplete() {

}

function loadCategory() {
    $.ajax({
        type: 'GET',
        url: '/getAllCategory',
        dataType: 'json',
        success: function (result) {
            let htmlHeader = '';
            let htmlFooter = '';
            let htmlNavigationLeft = '';
            let count = 0;
            // Kết quả là một object json
            // Nên ta sẽ loop result
            console.log(result);
            $.each(result['categories'], function (key, item) {
                htmlHeader += '<li><a href=\"getProductByIdCategory=';
                htmlHeader += item['id'];
                htmlHeader += '\">';
                htmlHeader += item['name'];
                htmlHeader += '</a></li>';

                htmlFooter += '<li><a href=\"getProductByIdCategory=';
                htmlFooter += item['id'];
                htmlFooter += '\">';
                htmlFooter += item['name'];
                htmlFooter += '</a></li><br>';
            });
            // alert(html);
            $("#cate").append(htmlHeader);
            $(".list-category").append(htmlHeader);
            $(".list-category-footer").append(htmlFooter);


        },
        error: function (result) {
            alert("Không thể load dữ liệu");
        }
    })
}

function loadBrand() {
    $.ajax({
        type: 'GET',
        url: '/getAllBrand',
        cache: false,
        success: function (result) {
            let htmlNavigationLeft = '';
            console.log(result);
            $.each(result['brands'], function (key, item) {
                htmlNavigationLeft += '<li><a href=\"/getProductByIdBrand=';
                htmlNavigationLeft += item['id'];
                htmlNavigationLeft += '\">';
                htmlNavigationLeft += item['name'];
                htmlNavigationLeft += '</a></li>';

            });
            // alert(html);
            $(".list-brand").append(htmlNavigationLeft);


        },
        error: function (result) {
            alert("Không thể load dữ liệu");
        }
    });
}

function checkLogin() {
    let token = localStorage.getItem('tokenCustomer');

    if (token == null || token == '') {
        let html = '';
        html += ' <a href="/userLogin" >LOGIN</a>';

        $('#logged').html(html);
    } else {
        let data = {
            token: token,
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/checkLogin',
            data: data,
            cache: false,
            success: function (result) {
                console.log('Send request success');
                if (result['status']) {
                    let html = '';
                    html += '' +
                        '                        <a class="dropdown-toggle" data-toggle="dropdown">Hello ' + result['customer']['name'] + '\n' +
                        '                        <span class="caret"></span></a>\n' +
                        '                    <ul class="dropdown-menu">\n' +
                        '                        <li><a href="/myAccount" id="your-login">My Account</a></li>\n' +
                        '                    <li><a href="#" id="your-logout">Logout</a></li>\n' +
                        '                    </ul>\n';

                    $('#logged').html(html);

                    $('#your-logout').click(function () {
                        localStorage.removeItem('tokenCustomer');
                        window.location.assign('/userLogin');
                    });

                } else {
                    let html = '';
                    html += ' <a href="/userLogin" >LOGIN</a>';

                    $('#logged').html(html);

                }
            },
            error: function (result) {
                alert("Request Failed");
            }
        });

    }
}


