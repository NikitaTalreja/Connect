<!DOCTYPE html>
<html lang="en">
<?php
   require_once("includes/functions.php");
   session_start();
   $user_id = $_SESSION['user_id'];
   $row = getLoggedInUser($user_id);
   $user_firstname = $row['user_firstname'];
   $user_address = $row['user_address'];
   $user_contact = $row['user_contact'];
   $user_email = $row['user_email'];
    $post_row = getPost($user_id);
    
    
?>
<head>
    <!--   Start of META TAGS-->
    <meta charset="UTF-8">
    <meta name="description" content="Building a student portal where students can interact and create resume!">
    <meta name="keywords" content="Resume, share, connect, profile">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->
    <!--   TITLE OF THE PAGE-->
    <title>Connect | My Profile</title>
    <!--    LINKINGS-->
    <!--LINKING ICON-->
    <link rel="shortcut icon" href="favicon.ico">
    <!--LINKING FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!--PLUGINS-->
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="../assets/global/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="../assets/pages/css/genericcss.css">
    <link rel="stylesheet" href="../assets/pages/css/profilepage.css">
</head>

<body>
    <!--   START OF NAVIGATION BAR-->
    <?php
        require_once("includes/header.php");
    ?>
        <!--END OF NAVIGATION BAR-->
        <!--    start of .profile-section-->

        <section id="profile-section" class="profile-section clearfix">
            <div class="profile-description pull-left">
                <div class="user-image">
                    <img src="../assets/pages/images/avatar_hat.jpg" alt="">
                    <div class="user-name">
                        <h3><?php echo "$user_firstname"; ?></h3>
                    </div>

                </div>
                <!--                end of .user-image-->
                <div class="user-details">
                   
                    <ul>
                        <div class="user-details-inner">
                            <li><i class="fa fa-suitcase user-detail-icons"></i><span>Information Technology</span></li>
                        </div>
                        <div class="user-details-inner">
                            <li><i class="fa fa-home user-detail-icons"></i><span><?php echo "$user_address"; ?></span></li>
                        </div>
                        <div class="user-details-inner">
                            <li><i class="fa fa-envelope user-detail-icons"></i><span><?php echo "$user_email"; ?></span></li>
                        </div>
                        <div class="user-details-inner">
                            <li><i class="fa fa-phone user-detail-icons"></i><span><?php echo "$user_contact"; ?></span></li>
                        </div>
                    </ul>
                </div>
                <!--           end of .user-details-->
                <a href="" class="yellow-btn myprofile-btn">Edit</a>
            </div>
            <!--        end of .profile-description-->
            <div class="user-posts pull-left">
               <?php 
                    $i;
                    for($i = 0; $i < sizeof($post_row); $i++){
                        $row = $post_row[$i];
                        $post_author = $row['post_author'];
                        $post_author_name = getPostAuthor($post_author);
                        $post_title = $row['post_title'];
                        $post_content = $row['post_content'];
                        $post_time = $row['post_time'];
                        
                    
                ?>
                <div class="posts">
                    <div class="post-info clearfix">
                        <div class="post-image-name pull-left">
                            <img src="../assets/pages/images/avatar_hat.jpg" alt="">

                        </div>
                        <div class="post-user-name pull-left">
                            <h3><?php echo "$post_author_name"; ?></h3>
                        </div>
                        <div class="time pull-left">
                            <span><?php echo "$post_time"; ?></span>
                        </div>
                    </div>
                    <hr class="post-underline">
                    <!--                    end of .post-info-->
                    <div class="post-content">
                        <p class="post-content-inner"><?php echo "$post_content";?></p>

                        <!--               end of .post-content-->
                        <div class="post-image">
                            <img src="../assets/posts/images/<?php echo "$post_title"?>.jpg" alt="">
                        </div>
                        <!--               end of .post-image-->
                    </div>
                    <!--                end of .post-content-->
                    <div class="buttons">
<!--                        <a href="" class="yellow-btn post-button like-button"><i class="fa fa-thumbs-up post-icons"></i>Like</a>-->
                       <a href="http://localhost/connect/pages/scripts/posts/delete.php" class="yellow-btn post-button"><i class="fa fa-trash post-icons"></i>Delete</a>
                    </div>
                </div>
                    <?php
                    }
                ?>
                <!--                end of .posts-->
            </div>
            <!--   end of .user-posts-->
        </section>

        <!--   end of .profile-section-->

        <!--    Start of footer section-->
        <?php
        require_once("includes/footer.php");
    ?>
            <!--end of footer section-->
            <script src="../assets/global/js/jquery3.3.1.min.js"></script>
            <script src="../assets/global/plugins/particle/particles.js"></script>
            <srcipt src="../assets/global/plugins/particle/app.js"></srcipt>
</body>


</html>
