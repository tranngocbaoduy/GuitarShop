function validateInput(){
    var name= document.getElementById('name');
    var pass = $('#password');

    if(name.value == ''){
        var error = document.getElementById('error-message');
        error.innerHTML = 'Please enter your name';
        error.style.display = 'block';
        return false;

    } else if(pass.val() == ''){
        var error = $('#error-message');
        error.html('Please enter your password');
        error.css('display','block');
        return false;
    }
    $('#error-message').css('display','none');
    return true;
}