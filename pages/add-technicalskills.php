<!DOCTYPE html>
<html lang="en">
<?php
   
    require_once("includes/functions.php");
    session_start();
    checkUser();
    
?>

<head>
    <!--   Start of META TAGS-->
    <meta charset="UTF-8">
    <meta name="description" content="Building a student portal where students can interact and create resume!">
    <meta name="keywords" content="Resume, share, connect, profile">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <!--END OF META TAGS-->
    <!--   TITLE OF THE PAGE-->
    <title>Connect | Skills</title>
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


    <section id="technical-skills-section">
        <div class="technical-skills clearfix">

            <div class="section-heading">
                <h3>Technical Skills</h3>
                <div class="underline">
                </div>
            </div>
            <!--    End of .section-heading-->
            <form action="http://localhost/connect/pages/scripts/resume/add.php" method="post">
                <div class="left-side pull-left">
                    <div class="row">
                       <label for="">Languages
                       <input type="text" placeholder=" e.g C, C#" required="" name="languages">
                       </label>
                       <label for="">Database Technology
                       <input type="text" placeholder=" e.g SQL" required="" name="database_languages">
                       </label> 
                    </div>
            
                </div>
                <div class="right-side pull-left">
                    <div class="row">
                       <label for="">Frameworks
                       <input type="text" placeholder=" e.g Bootstrap, jQuery" required="" name="frameworks">
                       </label>
                       <label for="">Additional Skills
                       <input type="text" placeholder="" name="additional_description">
                       </label> 
                    </div>
                </div>
                <button type="submit" class="yellow-btn resume-submit" name="technical-submit">Submit</button>
            </form>
            <a href="http://localhost/connect/pages/template1.php" class="yellow-btn template-btn">Preview Template</a>
            <a href="http://localhost/connect/pages/selected-template.php" class="yellow-btn template-btn select-btn">Select Template</a>
<!--            <a href="http://localhost/connect/pages/scripts/resume/saveaspdf.php" class="yellow-btn template-btn select-btn">Download Template</a>-->
        </div>
    </section>




    <!--    Start of footer section-->
    <?php
        require_once("includes/footer.php");
    ?>
    <!--end of footer section-->



</body>
<script src="../assets/global/js/jquery3.3.1.min.js"></script>

</html>