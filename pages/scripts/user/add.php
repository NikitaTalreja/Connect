<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/global/plugins/toastr-master/build/toastr.css">
</head>
<body>
   <script>
       toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    </script>
    <script src="../../../assets/global/plugins/toastr-master/build/toastr.min.js"></script>
</body>
-->




<?php
require_once("../../includes/db.php");
require_once("../../includes/functions.php");

       

if(isset($_POST['submit'])){
    $user_email = $_POST['user_email'];
    $query = "SELECT * FROM users WHERE user_email = '$user_email'";
    $select_user_details = mysqli_query($connection, $query);
    
    checkQueryResult($select_user_details);
    //proceed if there is data returned otherwise there would be error
    if(mysqli_num_rows($select_user_details)==1){
        $url = "http://localhost/connect/pages/register.php";
        
        redirect($url);
    }
    else{
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_contact = $_POST['user_contact'];
    $user_address = $_POST['user_address'];
    $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);
    $tableName = "users";
    
    $columns = "user_firstname, user_lastname, user_email, user_password, user_contact, user_address";
    
    $values = "'$user_firstname','$user_lastname', '$user_email','$hashed_password',$user_contact,'$user_address'";
    
    insert($tableName,$columns, $values);
    
    $url = "http://localhost/connect/pages/login.php";
    redirect($url);
    }
}else{
    $url = "http://localhost/connect/pages/error.php";
    redirect($url);
}
?>
<!--</html>-->