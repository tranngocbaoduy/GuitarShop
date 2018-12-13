$(document).ready(function () {

    checkHasLoginYet();

});

function checkHasLoginYet() {
    let checkLogin = localStorage.getItem('tokenCustomer');
    if (checkLogin != null) {
        return true;
    } else {
        window.location.assign('/userLogin');
        alert('You must login first!!!');
    }
}
