<!DOCTYPE html>
<html lang="en">

<head>
    <!--   Start of META TAGS-->
    <meta charset="UTF-8">
    <meta name="description" content="Building a student portal where students can interact and create resume!">
    <meta name="keywords" content="Resume, share, connect, profile">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->
    <!--   TITLE OF THE PAGE-->
    <title>Connect | Personal Information</title>
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
    <link rel="stylesheet" href="../assets/pages/css/resumegeneric.css">

</head>

<body>
    <!--   START OF NAVIGATION BAR-->
    <?php
        require_once("includes/header.php");
    ?>
    <!--END OF NAVIGATION BAR-->
<!--    start of edit-info section-->
<div class="personal-info clearfix">

            <div class="section-heading">
                <h3>Personal Information</h3>
                <div class="underline">
                </div>
            </div>
            <!--    End of .section-heading-->
            <form action="">
                <div class="left-side pull-left">
                    <div class="row">
                       <label for="">First Name
                       <input type="text" placeholder="<?php echo "$user_firstname" ?>" >
                       </label>
                       <label for="">Email
                       <input type="id" placeholder="">
                       </label> 
                       <label for="">Address
                       <input type="email" placeholder="">
                       </label> 
                    </div>
            
                </div>
                <div class="right-side pull-left">
                    <div class="row">
                       <label for="">Last Name
                       <input type="text" placeholder="">
                       </label>
                       <label for="">Contact Number
                       <input type="text" placeholder="">
                       </label> 
                    </div>
                </div>
            </form>
        </div>
<!--   End of edit-info section-->
    <!--    Start of footer section-->
    <?php
        require_once("includes/footer.php");
    ?>
    <!--end of footer section-->



</body>
<script src="../assets/global/js/jquery3.3.1.min.js"></script>

</html>