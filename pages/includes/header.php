<?php
    
    require_once("includes/functions.php");
    session_start();
    checkUser();
    $user_id = $_SESSION['user_id'];
    $row = getLoggedInUser($user_id);
$user_firstname = $row['user_firstname'];
//echo $_SESSION['user_id'];
//echo session_status();
?>
    <section class="navigation-bar" id="navigation-bar">
        <nav class="clearfix">

            <div class="left-part-logo pull-left">
                <a href="" class="left-part-logo">Connect</a>
            </div>
            <div class="right-part-navigation pull-right">
                <ul class="navigation-unordered-list">
                    <li><a href="http://localhost/connect/pages/home.php">Home</a></li>

                    <li><a href="http://localhost/connect/pages/myprofile.php">My Profile</a></li>
                    <li><a href="http://localhost/connect/pages/newsfeed.php">Newsfeed</a></li>

                    <li><a href="http://localhost/connect/pages/resume.php">Resume</a></li>
                    <li><a href='http://localhost/connect/pages/includes/logout.php' id="logout" name="logout">Logout</a></li>
                    <li><span>Hi, <?php echo $user_firstname;?></span></li>
                </ul>
            </div>

        </nav>
    </section>
