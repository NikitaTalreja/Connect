<?php
require_once("db.php");
require_once("functions.php");
session_start();
echo session_status();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM users WHERE user_email = '$username'";
    
    $select_user_details = mysqli_query($connection, $query);
    
    checkQueryResult($select_user_details);
    //proceed if there is data returned otherwise there would be error
    if(mysqli_num_rows($select_user_details)>1){
        //die();
        //$error_message = "Your Username or Password didn't match!!";
        //echo "$error_message";
        header("Location: ../error.php");
    }
    //if we are having 0/1 row
    //$db_password= "";
    if($row = mysqli_fetch_assoc($select_user_details) ){
        //I have 1 row
        $db_password = $row['user_password'];
        $user_id = $row['user_id'];
    }else{
        $db_password = "";
    }
    if(password_verify($password, $db_password)){
        $_SESSION['user_id'] = $user_id;
        header("Location: ../home.php");
    }else{
        $error_message = "Your Username or Password didn't match!!";
        echo "$error_message";
        header("Location: ../error.php");
    }
}
?>