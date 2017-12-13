var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");
function validatePW(){
    if(password.value != confirm_password.value){
        confirm_password.setCustomValidity("Passwords do not match.");
    }
    else{
        confirm_password.setCustomValidity('');
    }
}
password.onchange = validatePW;
confirm_password.onkeyup = validatePW;