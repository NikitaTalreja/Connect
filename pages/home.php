<!DOCTYPE html>
<html lang="en">
<?php
   
    require_once("includes/functions.php");
    session_start();
    checkUser();
    
    
//echo $_SESSION['user_id'];
//echo session_status();
?>
<head>
    <!--   Start of META TAGS-->
    <meta charset="UTF-8">
    <meta name="description" content="Building a student portal where students can interact and create resume!">
    <meta name="keywords" content="Resume, share, connect, profile">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->
    <!--   TITLE OF THE PAGE-->
    <title>Connect | Home</title>
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
    <link rel="stylesheet" href="../assets/pages/css/homepage.css">
    <link rel="stylesheet" href="../assets/pages/css/loading.css">
</head>

<body>
  
    <!--   START OF NAVIGATION BAR-->
    <?php
        require_once("includes/header.php");
    ?>
    <!--END OF NAVIGATION BAR-->
    <!--    START OF HOME-COVER-->
    <section class="home-cover section-bottom-margin">
        <div class="home-background-image">
            <div class="home-content-box">
                <div class="home-content-inner">

                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

                    <div class="button home-btn">
                        <a href="#about-us" class="white-btn">Know About Us!</a>
                    </div>
                </div>
                <!--                END OF .home-content-inner-->
            </div>
            <!--            END of .home-content-box-->
        </div>
        <!--        END OF .home-background-image-->
    </section>
    <!--END OF HOME-COVER-->
    <!--Start of about-us section-->
    <section class="about-us section-bottom-margin" id="about-us">
        <div class="section-heading">
            <h3>About Connect</h3>
            <div class="underline">
            </div>
        </div>
        <!--    End of .section-heading-->
        <!--Start of .about-us-outer-->
        <div class="about-us-outer clearfix">
            <div class="about-us-content pull-left">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quasi provident odit dignissimos aperiam, officiis reiciendis at modi quos natus nostrum sed? Beatae aliquam optio, nobis quod ullam aspernatur vero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, unde adipisci quo eaque facere.</p>
            </div>
            <div class="about-us-image pull-right">

            </div>
        </div>
        <!--END OF .about-us-outer-->
    </section>
    <!--End of about-us section-->
    <!--    Start of footer section-->
    <?php
        require_once("includes/footer.php");
    ?>
    <!--end of footer section-->



</body>
<script src="../assets/global/js/jquery3.3.1.min.js"></script>


</html>
