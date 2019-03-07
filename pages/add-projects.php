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
    <title>Connect | Projects</title>
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
        <!--    start of projects section-->


        <section id="projects-section">
            <div class="projects clearfix">
                <div class="section-heading">
                    <h3>Projects</h3>
                    <div class="underline">
                    </div>
                </div>
                <!--                End of .section-heading-->
                <form action="http://localhost/connect/pages/scripts/resume/add.php" id="project-form" method="post">
                    <div class="one">
                        <div class="left-side pull-left">
                            <div class="row">
                                <label for="">Project Title
                       <input type="text" placeholder=" e.g Hotel Management System" name="project_title">
                       </label>
                                <label for="">Technologies Used
                       <input type="text" placeholder=" e.g HTML,CSS,JS" name="technologies_used">
                       </label>
                            </div>

                        </div>
                        <div class="right-side pull-left">
                            <div class="row">
                                <label for="">Completed Year
                       <input type="text" placeholder=" e.g 2012" name="done_in_the_year">
                       </label>
                                <label for="">Additional Description
                       <input type="text" placeholder="" name="additional_information">
                       </label>
                            </div>
                        </div>
                        <input type="submit" class="yellow-btn resume-submit" name="project-submit" value="Submit">
                    </div>


                </form>
                <a href="http://localhost/connect/pages/add-cocurricular.php" class="yellow-btn next-button" name="project-next">Next</a>
<!--                <a href="#" class="yellow-btn add-btn">Add More Projects</a>-->
            </div>

        </section>

        <!--   end of projects section-->
        <!--    Start of footer section-->
        <?php
        require_once("includes/footer.php");
    ?>
            <!--end of footer section-->


            <script src="../assets/global/js/jquery3.3.1.min.js"></script>
            <script src="../assets/pages/js/add-row.js"></script>
</body>

</html>
