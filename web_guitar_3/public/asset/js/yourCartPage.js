
$(document).ready(function () {
    $(".btn-delete").on("click",function(e){
        var message = confirm("Do you want to delete it?");
        if(message){
           $(this).parent().parent().remove();
        }
    });
});