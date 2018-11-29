function formatPath(image){
    let formatPathImage = '';
    for(let i= image.length -1 ;i>=0;i--){
        if(image[i] !=='\\') {
            formatPathImage += image[i];
            continue;
        }
        break;
    }
    image = '';
    for(let i= formatPathImage.length -1 ;i>=0;i--){
        image += formatPathImage[i];
    }
    return image;
}

$(document).ready(function() {

    // load category
    $.ajax({
        type: "get",
        url: "/getAllCategory",
        cache: false,
        success: function (data)
        {
            console.log('get request sent !');
            console.log('message: ' + data.message);
            if(data.status) {
                if(data.status){
                    let html = ' <option value="0">Choose ...</option>';

                    for(let i =0; i < data.categories.length ; i++){
                        html += ' <option value="';
                        html +=  data.categories[i].id ;
                        html += '">';
                        html += data.categories[i].name;
                        html +='</option>';
                    }
                    $('.load-cate').html(html);
                    if($('#get-choose-cate').val()>=0){
                        $('.load-cate').val($('#get-choose-cate').val());
                    }
                }
            }

        },
        error: function (data){
            alert('Fail to run load Category..');
        }
    });

    //function show image upload
    $('#upload-file').change(function () {
       console.log($(this));
        var input = document.getElementById("upload-file");
        var fReader = new FileReader();
        fReader.readAsDataURL(input.files[0]);
        fReader.onloadend = function(event){
            var img = document.getElementById("yourImgTag");
            img.src = event.target.result;
        }

    });

    $('#name-product').keyup(function(){
        $('.message-error').html('');
    });
    $('#price-product').keyup(function(){
        $('.message-error').html('');
    });
    $('#image-product').click(function(){
        $('.message-error').html('');
    });

    //khi thực hiện kích vào nút Login

    $('#create-new-product').click(function(e){
        var token    = $("input[name=_token]").val();
        var name    = $("input[name=name-product]").val();
        var price = $("input[name=price-product]").val();
        var des = $("input[name=des-product]").val();
        var image = $("input[name=image-product]").val();
        var quantity = $("input[name=quantity-product]").val();
        var cate = $("select").val();
        e.preventDefault();


        // check data
        if(name==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">Invalid Name</p></td>");
            $('#name-product').focus();
            return false;
        }else if(price ==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">Invalid Price</p></td>");
            $('#price-product').focus();
            return false;
        }else if(quantity ==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">Invalid Quantity</p></td>");
            $('#quantity-product').focus();
            return false;
        }else if(cate ==0){
            $('.message-error').html("  <td></td>\\n'<td><p class=\\\"alert alert-warning\\\" style=\\\"width: 50%;float:right\\\">Choose Category</p></td>");
            $('.load-cate').focus();
            return false;
        }else if(image == ''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">Invalid Image</p></td>");
            return false;
        }

        image = formatPath(image);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Ajax Post

            // var formData = $(this).serialize();

        var formData = new FormData($("#my-form-upload")[0]);
        $.ajax({
            type: "post",
            url: "/file",
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log('request sent !');
                console.log('message: ' + data.message);



                if (data.status) {

                    var dataProduct = {
                        _token:token,
                        nameProduct:name,
                        priceProduct:price,
                        descriptionProduct:des,
                        imageProduct:image,
                        quantityProduct:quantity,
                        cateProduct:cate,
                        currentTimeCreated: data['currentTimeCreated']
                    };

                    $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">" + data.message + "</p></td>");
                    $('.message-error').focus();

                    $.ajax({
                        type: "post",
                        url: "/admin/createProduct",
                        data: dataProduct,
                        cache: false,
                        success: function (response)
                        {
                            console.log('request sent !');
                            console.log('message: ' + response.message);

                            if(response.status) {
                                // window.location.assign('/admin/viewAllProduct');
                            }else{
                                $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">"+data.message+"</p></td>");
                                $('#name-product').focus();
                            }
                        },
                        error: function (response){
                            alert('Fail to run create..');
                            console.log(response);
                        }
                    });
                    // window.location.assign('/admin/viewAllProduct');
                } else {
                    $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-warning\" style=\"width: 50%;float:right\">" + data.message + "</p></td>");
                    $('#name-product').focus();
                }

                return true;
            },
            error: function (data) {
                alert('Fail to run Login..');
                console.log(data);
                return false;
            },
        });




        return false;
    });

});