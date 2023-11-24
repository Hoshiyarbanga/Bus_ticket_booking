// log in form validations
let usernameError = document.getElementById('usernameError');
let passwordError = document.getElementById('passwordError');
let username = document.getElementById('username');
let password = document.getElementById('password');
let wsRegex = /^\S*\s*\S*$/g;

function validateForm(){
    if(username.value ===""){
        usernameError.innerHTML="please enter username";
        return false;
    }else{
        usernameError.innerHTML="";
    }

    if(password.value ===""){
        passwordError.innerHTML="please enter password";
        return false;
    }else{
        passwordError.innerHTML="";
    }
    
}