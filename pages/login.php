<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect | Login</title>
    <link rel="stylesheet" href="../assets/pages/css/login.css">
    <link rel="stylesheet" href="../assets/pages/css/genericcss.css">
    <!--LINKING ICON-->
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <div id="particles-js">
        <div class="box">
            <h2>Login</h2>
            <form action="http://localhost/connect/pages/includes/process-login.php" method="POST" onsubmit="return validation()" id="myForm">

                <div>
                    <input type="text" name="username" required="" id="email">
                    <label>Name</label>
                    <span id="email-message"></span>
                </div>
                <div>
                    <input type="password" name="password" required="" id="password">
                    <label>Password</label>
                    <span id="password-message"></span>
                </div>
<!--                <input type="submit" name="verify" value="Verify">-->
                <input type="submit" name="submit" value="Submit">
                
                <div>
                    <a href="http://localhost/connect/pages/register.php">Not Registered?</a>


                </div>
            </form>
        </div>
    </div>
    <script>
            function validation() {
    var password=document.getElementById("password").value;
    
    if (password.length < 5) {
        document.getElementById("password-message").innerHTML = "password must be greater than 5 characters";
        return false;
    }
    
    var email=document.getElementById("email").value;
    if(email.indexOf('@')<=0){
        document.getElementById("email-message").innerHTML="Invalid @ position";
        return false;
    }
    if((email.charAt(email.length-4)!='.')&&
    (email.charAt(email.length-4)!='.')){
        document.getElementById("email-message").innerHTML="Inavlid . position";
        return false;
    }
}
        </script>
<scrpt src="../assets/global/js/jquery3.3.1.min.js"></scrpt> 
<script src="../assets/global/plugins/particle/particles.js"></script>
<script src="../assets/global/plugins/particle/app.js"></script>





</body>

</html>
