function validation() {
    var correct_way = /^[A-Za-z]+$/;
    var name = document.getElementById("name").value;
    var password=document.getElementById("password").value;


    if (name == "") {
        document.getElementById("message").innerHTML = "please fill name";
        return false;
    }
    if (name.length < 3) {
        document.getElementById("message").innerHTML = "name must be 3 characters";
        return false;
    }

    if (name.length > 20) {
        document.getElementById("message").innerHTML = "name must be less than 30 characters";
        return false;
    }
    if (name.match(correct_way)) {
        true;

    } else {
        document.getElementById("message").innerHTML = "only alphabets are allowed";
        return false;
    }
    if(password==""){
        document.getElementById("message").innerHTML="please fill password";
        return false;
    }
    if (password.length > 5) {
        document.getElementById("message").innerHTML = "password must be greater than characters";
        return false;
    }
    var email=document.myForm.email.value;
    if(email.indexOf('@')<=0){
        document.getElementById("message").innerHTML="Invalide @ position";
        return false;
    }
    if((email.charAt(emailemail.lengtj-4)!='.')&&
    (email.charAt(emailemail.lengtj-4)!='.')){
        document.getElementById("message").innerHTML="Inavlid . position";
        return false;
    }

}