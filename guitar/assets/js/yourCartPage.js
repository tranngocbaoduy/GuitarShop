
$(document).ready(function () {
    $(".btn-delete").on("click",function(e){
        var k = confirm("Do you want to delete it?");
        if(k){
           $(this).parent().parent().remove();
        }
    });
});