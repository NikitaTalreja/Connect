<!DOCTYPE html>
<html lang="en">
<?php
    require_once("includes/constants.php");
?>

    <head>
        <meta charset="UTF-8">
        <title>Connect | Registration</title>
        <link rel="stylesheet" href="../assets/pages/css/login.css">
        <link rel="stylesheet" href="../assets/pages/css/genericcss.css">
        <!--LINKING ICON-->
    <link rel="shortcut icon" href="favicon.ico">
<!--    linking plugins-->
   <link rel="stylesheet" href="../assets/global/plugins/toastr-master/build/toastr.css">
    </head>

    <body>
        <div id="particles-js">
            <div class="box">
                <h2>Registration</h2>
                <form action="scripts/user/add.php" method="post" onsubmit="return validation()" id="myform">

                    <div>
                        <input type="text" name="user_firstname" required="" id="firstname">
                        <label>First Name</label>
                        <span id="fname-message"></span>
                    </div>
                    <div>
                        <input type="text" name="user_lastname" required="" id="lastname">
                        <label>Last Name</label>
                        <span id="lname-message"></span>
                    </div>
                    <div>
                        <input type="email" name="user_email" required="" id="email">
                        <label>Email</label>
                        <span id="email-message"></span>
                    </div>

                    <div>
                        <input type="password" name="user_password" required="" id="password">
                        <label>Password</label>
                        <span id="password-message"></span>
                    </div>
                    <div>
                        <input type="text" name="user_contact" required="" id="contact_number">
                        <label>Contact Number</label>
                        <span id="contact-message"></span>
                    </div>
                    <div>
                        <input type="text" name="user_address" required="" id="address">
                        <label>Address</label>
                        <span id="address-message"></span>
                    </div>


                    <input type="submit" name="submit" value="Submit">


                </form>

            </div>
        </div>
        <script>
            function validation() {
    var correct_way = /^[A-Za-z]+$/;
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var password=document.getElementById("password").value;
    var number = document.getElementById("contact_number").value;


    if (fname == "") {
        document.getElementById("fname-message").innerHTML = "Please fill First name";
        return false;
    }
    if (fname.length < 3) {
        document.getElementById("fname-message").innerHTML = "Name must be minimum 3 characters";
        return false;
    }

    if (fname.length > 20) {
        document.getElementById("fname-message").innerHTML = "Name must be less than 30 characters";
        return false;
    }
    if (fname.match(correct_way)) {
        true;

    } else {
        document.getElementById("fname-message").innerHTML = "Please enter alphabets only!!";
        return false;
    }
    if (lname == "") {
        document.getElementById("lname-message").innerHTML = "Please fill Last name";
        return false;
    }
    if (lname.length < 3) {
        document.getElementById("lname-message").innerHTML = "Last Name must be minimum 3 characters";
        return false;
    }

    if (lname.length > 20) {
        document.getElementById("lname-message").innerHTML = "Last Name must be less than 30 characters";
        return false;
    }
    if (lname.match(correct_way)) {
        true;

    } else {
        document.getElementById("lname-message").innerHTML = "Please enter alphabets only!!";
        return false;
    }
    if(password==""){
        document.getElementById("password-message").innerHTML="please fill password";
        return false;
    }
    if (password.length < 5) {
        document.getElementById("password-message").innerHTML = "password must be greater than 5 characters";
        return false;
    }
    if(isNaN(number)){
        document.getElementById("contact-message").innerHTML = "Please enter numeric values!";
        return false;
    }
    if (number.length < 10){
        document.getElementById("contact-message").innerHTML = "Contact Number should be 10 digits long";
        return false;
    }
    var email = document.getElementById("email").value;
    if(email.indexOf('@')<=0){
        document.getElementById("email-message").innerHTML="Invalide @ position";
        return false;
    }
    if((email.charAt(email.length-4)!='.')&&
    (email.charAt(email.length-4)!='.')){
        document.getElementById("email-message").innerHTML="Inavlid . position";
        return false;
    }

}
        </script>
        <script src="../assets/global/plugins/particle/particles.js"></script>
        <script src="../assets/global/plugins/particle/app.js"></script>
        <script src="../assets/global/plugins/toastr-master/build/toastr.min.js"></script>
        


    </body>

</html>
