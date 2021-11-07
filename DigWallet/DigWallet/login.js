var Info = []
function saveInfo(){
    var username = document.getElementById("login").value
    var password = document.getElementById("password").value
    
     notIn = true;

    for(let i  = 0; i < Info.length; i++){
        if (Info[i][0] == username){
            notIn = false;
            break;
        }
    }
    if (notIn){
        Info.push([username,password]);
        document.querySelector('#login').addEventListener('click', () => {
            window.location.href = "login.html"
        });
    } else {
        document.querySelector('#login').addEventListener('click', () => {
            window.location.href = "signup.html"
        });
    }
}