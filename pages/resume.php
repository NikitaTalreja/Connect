<!DOCTYPE html>
<html lang="en">
<?php
    
?>

<head>
    <!--   Start of META TAGS-->
    <meta charset="UTF-8">
    <meta name="description" content="Building a student portal where students can interact and create resume!">
    <meta name="keywords" content="Resume, share, connect, profile">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->
    <!--   TITLE OF THE PAGE-->
    <title>Connect | Resume</title>
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
    <link rel="stylesheet" href="../assets/pages/css/resume.css">
</head>

<body>
    <!--   START OF NAVIGATION BAR-->
    <?php
        require_once("includes/header.php");
    ?>
    <!--END OF NAVIGATION BAR-->
    <!--start of buttons-section-->
    <section id="button-section" class="button-section">
    <div class="buttons-outer">
        <div class="buttons-inner">
<!--
            <div class="edit-personal-info button-margin-bottom">
                <a href="http://localhost/connect/pages/edit-info.php" class="yellow-btn resume-buttons"><i class="fa fa-plus"></i> Edit Personal Information</a>
            </div>
-->
            <div class="add-education button-margin-bottom">
                <a href="http://localhost/connect/pages/add-education.php" class="yellow-btn resume-buttons"><i class="fa fa-plus"></i> Add Educational Information</a>
            </div>
            
            <div class="add-projects button-margin-bottom">
                <a href="http://localhost/connect/pages/add-projects.php" class="yellow-btn resume-buttons"><i class="fa fa-plus"></i> Add Projects</a>
            </div>
            <div class="add-co.curricular-activities button-margin-bottom">
                <a href="http://localhost/connect/pages/add-cocurricular.php" class="yellow-btn resume-buttons"><i class="fa fa-plus"></i> Add Co-Curricular Activities</a>
            </div>
            <div class="add-co.curricular-activities button-margin-bottom">
                <a href="http://localhost/connect/pages/add-extracurricular.php" class="yellow-btn resume-buttons"><i class="fa fa-plus"></i> Add Extra-Curricular Activities</a>
            </div>
            <div class="add-technical-skills button-margin-bottom">
                <a href="http://localhost/connect/pages/add-technicalskills.php" class="yellow-btn resume-buttons"><i class="fa fa-plus"></i> Add Technical Skills</a>
            </div>
        </div>
    </div>
</section>
    <!--end of button-section-->
    <!--    Start of footer section-->
    <?php
        require_once("includes/footer.php");
    ?>
    <!--end of footer section-->



</body>
<script src="../assets/global/js/jquery3.3.1.min.js"></script>

</html>
