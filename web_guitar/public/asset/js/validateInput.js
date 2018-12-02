function validateInput(){
    var name= document.getElementById('name');
    var pass = document.getElementById('pwd');
    var error = document.getElementById('error-message');
    if(name.value == ''){
        alert("ds");
        error.innerHTML = 'Please enter your name';
        error.style.display = 'block';
        return false;

    } else if(pass.value == ''){
        error.innerHTML ='Please enter your password';
        error.style.display = 'block';
        return false;
    }
    $('#error-message').css('display','none');
    return false;
}
