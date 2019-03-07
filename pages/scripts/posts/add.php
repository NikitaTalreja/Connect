<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once("../../includes/functions.php");
//$slang_words = array();

if(isset($_POST['post-submit'])){
    $post_title = $_POST['post_title'];
    
    if(isset($_FILES['post_image'])){
    $image_name = $_FILES['post_image']['name'];
    $image_size = $_FILES['post_image']['size'];
    $temp_name = $_FILES['post_image']['tmp_name'];
    $file_type = $_FILES['post_image']['type'];
    $file_extension = strtolower(end(explode(".", $image_name)));
    }
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
//    $post_comment_count = 0;
    $post_like_count = 0;
    //echo  "$user_id,'$post_title',now(),now(),'$file_extension','$post_content',$post_comment_count,$post_like_count";
    //move_uploaded_file($post_image_temp, "../images/$post_image");
   $tableName = "posts";
   $columns = "post_author,post_title,post_date,post_time,post_image,post_content,post_like_count";
    $values = "$user_id,'$post_title',now(),now(),'$file_extension','$post_content',$post_like_count";
    insert($tableName,$columns,$values);
    
    if(isset($_FILES['post_image'])){
        move_uploaded_file($temp_name,"../../../assets/posts/images/".$post_title.$user_id.".".$file_extension);
    }
   $url = "http://localhost/conect/pages/newsfeed.php";
   redirect($url);
}
?>


