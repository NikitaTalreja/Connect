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
    <title>Connect | Activities</title>
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
        <section id="cocurricular-section">
            <div class="cocurricular clearfix">
                <div class="section-heading">
                    <h3>Extra Curricular Activities</h3>
                    <div class="underline">
                    </div>
                </div>
                <!--    End of .section-heading-->
                <form action="http://localhost/connect/pages/scripts/resume/add.php" method="post">
                    <div class="one">
                        <div class="left-side pull-left">
                            <div class="row">
                                <label for="">Event Name
                    <input type="text" placeholder="e.g Dance" name="event_name">
                    </label>
                                <label for="">Organised By
                    <input type="text" placeholder="e.g VESIT Utsav 2018" name="organisation_name">
                    </label>
                            </div>
                            
                        </div>
                        <div class="right-side pull-right">
                            <div class="row">
                                <label for="">Position
                    <input type="text" placeholder="e.g 1st" name="position">
                    </label>
                                <label for="">Additional Description
                    <input type="text" placeholder="" name="additional_description">
                    </label>
                            </div>
                            

                        </div>
                        <input type="submit" class="yellow-btn resume-submit" name="extracurricular-submit" value="Submit">
                    </div>

                </form>
                <a href="http://localhost/connect/pages/add-technicalskills.php" class="yellow-btn next-button">Next</a>
<!--                <a href="#" class="yellow-btn add-btn">Add More Activities</a>-->
            </div>
        </section>


        <!--    Start of footer section-->
        <?php
        require_once("includes/footer.php");
    ?>
            <!--end of footer section-->



</body>
<script src="../assets/global/js/jquery3.3.1.min.js"></script>
<script src="../assets/pages/js/add-row.js"></script>

</html>
