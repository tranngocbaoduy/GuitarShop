// load category
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
        $(".dropdown-menu").append(htmlHeader);
        $(".list-category").append(htmlHeader);
        $(".list-category-footer").append(htmlFooter);
    },
    error: function(data){
        alert("Không thể load dữ liệu" );
    }
});