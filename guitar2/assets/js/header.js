$.ajax({
    type: 'GET',
    url: 'controller/HomeController.php',
    data: "text",
    success: function (data) {
        $("#header").append( data);
    },
    error: function(data){
        alert("Không thể load dữ1 liệu" );
    }
});
// load category
$.ajax({
    type: 'GET',
    url: 'controller/HomeController.php',
    data: {
        action:"getAllCategory"
    },
    dataType: 'json',
    success: function (result) {
        let htmlHeader = '';
        let htmlFooter = '';
        let htmlNavigationLeft = '';
        let count = 0;
        // Kết quả là một object json
        // Nên ta sẽ loop result
        $.each(result, function (key, item) {
            htmlHeader += '<li><a href=\"product.php?cate=';
            htmlHeader += item['id'];
            htmlHeader += '\">';
            htmlHeader += item['name'];
            htmlHeader += '</a></li>';

            htmlFooter += '<li><a href=\"product.php?cate=';
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