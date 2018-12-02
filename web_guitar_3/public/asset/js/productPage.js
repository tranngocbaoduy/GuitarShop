
$(document).ready(function(){

    $('.product').click(function () {
        window.location.assign('/detail-product-id='+$(this).attr('id'));
    });

});
