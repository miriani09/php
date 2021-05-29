function validatePassword(password) {
    if (password.length === 0) {
        document.getElementById("msg").innerHTML = "";
        return;
    }
    const matchedCase = new Array();
    matchedCase.push("[A-Z]");
    matchedCase.push("[0-9]");
    matchedCase.push("[a-z]");

    let ctr = 0;
    for (let i = 0; i < matchedCase.length; i++) {
        if (new RegExp(matchedCase[i]).test(password)) {
            ctr++;
        }
    }
    let color = "";
    let strength = "";
    switch (ctr) {
        case 0:

        case 1:
            strength = "სუსტი";
            color = "red";
            break;
        case 2:
            strength = "საშუალო";
            color = "orange";
            break;
        case 3:
            strength = "ძლიერი";
            color = "green";
            break;
    }
    document.getElementById("msg").innerHTML = strength;
    document.getElementById("msg").style.color = color;
}
function password_show() {
    x = document.getElementById("pwd");
    x2 = document.getElementById("pwd2");
    if (x.type === "password" && x2.type === "password") {
        x.type = "text";
        x2.type = "text";
    }else {
        x.type = "password";
        x2.type = "password";
    }
}

function mail_check(){
    Email=document.getElementById("mail");

    const filterEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if(!filterEmail.test(Email.value)){
        Email.style.border = "solid 2px red"
        return false
    }else{
        Email.style.border = "solid 2px green"
        return true
    }
}
function name_check(){
    name1 = document.getElementById("name")

    if(name1.value === ""){
        name1.style.border = "solid 2px red"
        return false
    }else{
        name1.style.border = "solid 2px green"
        return true
    }

}
function surname_check(){
    surname1 = document.getElementById("surname")

    if(surname1.value === ""){
        surname1.style.border = "solid 2px red"
        return false
    }else{
        surname1.style.border = "solid 2px green"
        return true
    }
}
function phone_check(){
    phone1 = document.getElementById("phone")
    const filterPhone1 = /^\d{9}$/;

    if(!filterPhone1.test(phone1.value)){
        phone1.style.border = "solid 2px red"
        return false
    }else{
        phone1.style.border = "solid 2px green"
        return true
    }
}

function compare_password(){
    x = document.getElementById("pwd");
    x2 = document.getElementById("pwd2");
    if(x.value == x2.value){
        return true
    }else{
        return false
    }
}

function done(){
    password_match = compare_password()
    if(mail_check() && name_check() && surname_check() && phone_check() && password_match){
        alert("თქვენ წარმატებით დარეგისტრირდით")
        window.location.reload()
    }else if(!password_match){
        alert("პაროლები არ ემთხვევა")
    }else{
        alert("გთხოვთ შეავსოთ ფორმა სწორად")
    }
}
