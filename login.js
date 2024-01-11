const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click" , (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "" && password === "") {
        alert("Username and Password fields are empty");
        return false;
    }
    else{
        if(username==""){
            alert("Username is empty");
            return false;
        }
        if(password==""){
            alert("Password field is empty");
            return false;
        }
    }
})