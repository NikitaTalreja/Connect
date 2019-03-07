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
    <title>Connect | Education</title>
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
    <!--    start of educational-form-section-->
    <section id="education-section">
        <div class="education clearfix">
            <div class="section-heading">
                <h3>Education Details</h3>
                <div class="underline">
                </div>
            </div>
            <!--    End of .section-heading-->
            <form action="http://localhost/connect/pages/scripts/resume/add.php" method="post">
                <div class="left-side pull-left">
                    <div class="row">
                        <label for="">Graduation Institute
            <input type="text" placeholder="e.g VESIT"  name="grad_institute">
            </label>

                        <label for="">Degree
            <input type="text" placeholder="e.g B.E(INFT)" name="grad_degree">
            </label>
                        <label for="">Admission Year
            <input type="text" placeholder="e.g 2016"  name="grad_admission_year">
            </label>
                    </div>
                    <div class="row">
                        <label for="">Secondary College Institute
            <input type="text" placeholder="e.g VES"  name="higher_institute">
            </label>

                        <label for="">Course Name
            <input type="text" placeholder="e.g HSC/Diploma"   name="higher_course">
            </label>
                        <label for="">Admission Year
            <input type="text" placeholder="e.g 2014"   name="higher_admission_year">
            </label>
                    </div>
                    <div class="row">
                        <label for="">School Name
            <input type="text" placeholder="e.g VES"  name="school_name">
            </label>

                        <label for="">Board
            <input type="text" placeholder="e.g SSC"  name="school_board">
            </label>
                        <label for="">Admission Year
            <input type="text" placeholder="e.g 2001"   name="school_admission_year">
            </label>
                    </div>

                </div>
                <div class="right-side pull-left">
                    <div class="row">
                        <label for="">City
            <input type="text" placeholder="e.g Chembur"   name="grad_city">
            </label>
                        <label for="">CGPI
            <input type="text" placeholder="e.g 8" name="cgpi">
            </label>

                        <label for="">Passing Year
            <input type="text" placeholder="e.g 2020"  name="grad_passing_year">
            </label>

                    </div>
                    <div class="row">
                       <label for="">City
            <input type="text" placeholder="e.g Chembur"  name="higher_city">
            </label>
                        <label for="">Percentage
            <input type="text" placeholder="e.g 88"  name="higher_percentage">
            </label>

                        <label for="">Passing Year
            <input type="text" placeholder="e.g 2016" name="higher_passing_year">
            </label> 
                    </div>
                    <div class="row">
                       <label for="">City
            <input type="text" placeholder="e.g Chembur"  name="school_city">
            </label>
                        <label for="">Percentage
            <input type="text" placeholder="e.g 88"   name="school_percentage">
            </label>

                        <label for="">Passing Year
            <input type="text" placeholder="e.g 2014"   name="school_passing_year">
            </label> 
                    </div>
                    
                    
                </div>
                <button type="submit" class="yellow-btn resume-submit" name="education-submit">Submit</button>
            </form>
 <a href="http://localhost/connect/pages/add-projects.php" class="yellow-btn next-button" name="education-next">Next</a>
        </div>
        <!--    end of .education-->
    </section>
    <!--   end of education-form-section-->
    <!--    Start of footer section-->
   <?php
        require_once("includes/footer.php");
    ?>
    <!--end of footer section-->



<script src="../assets/global/js/jquery3.3.1.min.js"></script>
</body>


</html>
