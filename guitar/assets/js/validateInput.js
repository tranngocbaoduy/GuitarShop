function validateInput(){
    var email= document.getElementById('email');
    var pass = document.getElementById('pwd');
    var error = document.getElementById('error-message');
    if(email.value == ''){

        error.innerHTML = 'Please enter your name';
        error.style.display = 'block';
        return false;

    } else if(pass.value == ''){
        error.innerHTML ='Please enter your password';
        error.style.display = 'block';
        return false;
    }
    $('#error-message').css('display','none');
    return true;
}