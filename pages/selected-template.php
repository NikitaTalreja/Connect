<!DOCTYPE html>
<html lang="en">
<?php
   session_start();
    require_once("includes/functions.php");
    $url = "http://localhost/connect/pages/error.php";
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : redirect($url) ;
    $row = getLoggedInUser($user_id);
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_address = $row['user_address'];
    $user_contact = $row['user_contact'];
    $user_email = $row['user_email'];
    
    $technical_row = getTechnicalSkills($user_id);
    $languages = $technical_row['languages'];
    $framework = $technical_row['frameworks'];
    $database_languages = $technical_row['database_languages'];
    $additional_description = $technical_row['additional_description'];
    
    $education_row = getEducation($user_id);
    $grad_institute = $education_row['grad_institute'];
    $grad_city = $education_row['grad_city'];
    $grad_degree = $education_row['grad_degree'];
    $cgpi = $education_row['cgpi'];
    $grad_admission_year = $education_row['grad_admission_year'];
    $grad_passing_year = $education_row['grad_passing_year'];
    $higher_institute = $education_row['higher_institute'];
    $higher_city = $education_row['higher_city'];
    $higher_course = $education_row['higher_course'];
    $higher_percentage = $education_row['higher_percentage'];
    $higher_admission_year = $education_row['higher_admission_year'];
    $higher_passing_year = $education_row['higher_passing_year'];
    $school_name = $education_row['school_name'];
    $school_city = $education_row['school_city'];
    $school_board = $education_row['school_board'];
    $school_percentage = $education_row['school_percentage'];
    $school_admission_year = $education_row['school_admission_year'];
    $school_passing_year = $education_row['school_passing_year'];
    
    $rows = getProject($user_id);
//    print_r($rows);
    $cocurricular_row = getCocurricular($user_id);
    $extracurricular_row = getExtracurricular($user_id);
    
    
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
        <title>Connect | Template-1</title>
        <!--    LINKINGS-->
        <!--LINKING ICON-->
        <link rel="shortcut icon" href="favicon.ico">
        <!--LINKING FONTS-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">
        <!--PLUGINS-->
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="../assets/global/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--CUSTOM CSS-->
        <link rel="stylesheet" href="../assets/pages/css/template.css">
        <link rel="stylesheet" href="../assets/pages/css/genericcss.css">
        <!--    <link rel="stylesheet" href="../assets/pages/css/resumegeneric.css">-->
    </head>

    <body>
        <div class="a4-size-paper" id="resume">

            <div class="details">

                <div class="personal-details-container margin-bottom">

                    <h2 class="name margin-bottom">
                        <?php echo "$user_firstname "."$user_lastname "; ?>
                    </h2>
                    <p class="address personal-details">
                        <?php echo "$user_address" ?>
                    </p>
                    <p class="contact personal-details">
                        <?php echo "$user_contact" ?>
                    </p>
                    <p class="email personal-details">
                        <?php echo "$user_email" ?>
                    </p>

                </div>
                <hr class="underline">
                <div class="professional-details">
                    <div class="professional-summary">
                        <h4 class="heading margin-subheading">Professional Summary</h4>
                        <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto temporibus ea saepe ab voluptatem deserunt, odit a blanditiis officia soluta in, ducimus cum molestias doloremque ipsam veritatis pariatur at tenetur.</p>
                    </div>
                    <!--                end of .professional-summary-->
                    <div class="technical-skills clearfix margin-bottom">
                        <?php
                if(is_null($technical_row)==false){
                ?>
                            <h4 class="heading margin-subheading">Technical Skills</h4>
                            <div class="left-part pull-left">
                                <div class="skill">
                                    <i class="fa fa-circle bullets"></i>
                                    <h4 class="technical-skills-heading">Languages</h4>
                                    <p class="technical-skills-subcontent">
                                        <?php echo "$languages"; ?>
                                    </p>
                                </div>
                                <!--                    end of .skill -->
                                <div class="skill">
                                    <i class="fa fa-circle bullets"></i>
                                    <h4 class="technical-skills-heading">Frameworks</h4>
                                    <p class="technical-skills-subcontent">
                                        <?php echo "$framework"; ?>
                                    </p>
                                </div>
                                <!--                    end of .skill -->
                            </div>
                            <div class="right-part pull-left">
                                <div class="skill">
                                    <i class="fa fa-circle bullets"></i>
                                    <h4 class="technical-skills-heading">Database Technologies</h4>
                                    <p class="technical-skills-subcontent">
                                        <?php echo "$database_languages"; ?>
                                    </p>
                                </div>
                                <!--                    end of .skill -->
                            </div>
                            <div class="right-part pull-left">
                                <div class="skill">
                                    <i class="fa fa-circle bullets"></i>
                                    <h4 class="technical-skills-heading">Additional Skills</h4>
                                    <p class="technical-skills-subcontent">
                                        <?php echo "$additional_description"; ?>
                                    </p>
                                </div>
                                <!--                    end of .skill -->
                            </div>
                            <?php
                }
                    ?>
                    </div>
                    <!--                end of .technical-skills-->
                    <div class="educational-details margin-bottom">
                        <?php
                if(is_null($education_row)==false){
                ?>
                            <h4 class="heading margin-subheading">Education</h4>
                            <div class="education">
                                <h4 class="technical-skills-heading">
                                    <?php echo "$grad_degree (" ."$grad_admission_year"."-"."$grad_passing_year".")";?>
                                </h4>
                                <p class="education-subcontent">
                                    <?php echo "$grad_institute"," "."$grad_city"; ?>
                                </p>
                                <p class="education-subcontent">CGPI <span id="pdfcontent">&mdash;</span>
                                    <?php echo "$cgpi"; ?>
                                </p>
                            </div>
                            <!--                    end of .education-->
                            <div class="education">
                                <h4 class="technical-skills-heading">
                                    <?php echo "$higher_course"." ("."$higher_admission_year"."-"."$higher_passing_year".")"; ?>
                                </h4>
                                <p class="education-subcontent">
                                    <?php echo "$higher_institute"." "."$higher_city"; ?>
                                </p>
                                <p class="education-subcontent">Percentage &mdash;
                                    <?php echo "$higher_percentage"; ?> </p>
                            </div>
                            <!--                    end of .education-->
                            <div class="education">
                                <h4 class="technical-skills-heading">
                                    <?php echo"$school_board"." ("."$school_admission_year"."-"."$school_passing_year".")"; ?>
                                </h4>
                                <p class="education-subcontent">
                                    <?php echo"$school_name"." "."$school_city"; ?>
                                </p>
                                <p class="education-subcontent">Percentage &mdash;
                                    <?php echo "$school_percentage"; ?>
                                </p>
                            </div>
                            <!--                    end of .education-->
                            <?php
                }
                        ?>
                    </div>
                    <!--                end of .educational-details-->
                    <div class="project-details margin-bottom">
                        <?php
                if(sizeof($rows)!=0){
                ?>
                            <h4 class="heading margin-subheading">Projects</h4>
                            <?php 
                            $i;
                            for($i = 0; $i <sizeof($rows);$i++) {
                                $row = $rows[$i];
                                $project_title = $row['project_title'];
                                $technologies_used = $row['technologies_used'];
                                $done_in_the_year = $row['done_in_the_year'];
                                $additional_information = $row['additional_information'];
                            ?>
                            <div class="education">
                                <i class="fa fa-circle bullets"></i>
                                <h4 class="technical-skills-heading">
                                    <?php echo "$project_title". " ("."$done_in_the_year".")" ; ?>
                                </h4>

                                <p class="education-subcontent">Technologies Used &#58;
                                    <?php echo "$technologies_used"; ?>
                                </p>
                            </div>
                            <!--                    end of .education-->
                            <?php
                            }
                        ?>



                    </div>
                    <!--                end of .project-details-->
                    <?php
                }
                        ?>
                        <div class="co-curricular-activities margin-bottom">
                            <?php 
                        if(sizeof($cocurricular_row)!=0){
                            
                            ?>
                            <h4 class="heading margin-subheading">Co &#46; Curricular Activities</h4>
                            <?php
                        $j;
                        for($j = 0; $j < sizeof($cocurricular_row); $j++){
                            
                        $rowc = $cocurricular_row[$j];
                        $event_name = $rowc['event_name'];
                        $organisation_name = $rowc['organisation_name'];
                        $position = $rowc['position'];
                        $additional_description = $rowc['additional_description'];
                            ?>
                                <div class="education">
                                    <i class="fa fa-circle bullets"></i>

                                    <p class="education-subcontent">
                                        <?php echo "$position"." in "."$event_name"." organised by "."$organisation_name"; ?>
                                    </p>
                                </div>
                                <!--                    end of .education-->
                                <?php
                        }
                        ?>
                                    <?php
                        }
                        ?>
                        </div>
                        <!--                end 0f .co-curricular-activities-->
                        <div class="extracurricular-activities">
                            <?php
                            if(sizeof($extracurricular_row)!=0){
                        ?>
                                <h4 class="heading margin-subheading">Extra&#46;Curricular Activities</h4>
                                <?php
                        $k;
                        for($k=0; $k < sizeof($extracurricular_row); $k++){
                            $rowc = $extracurricular_row[$k];
                        $event_name = $rowc['event_name'];
                        $organisation_name = $rowc['organisation_name'];
                        $position = $rowc['position'];
                        $additional_description = $rowc['additional_description'];
                            
                        
                        ?>
                                    <div class="education">
                                        <i class="fa fa-circle bullets"></i>

                                        <p class="education-subcontent">Secured First Position in Drama UTSAV&#39;18 organised by VESIT</p>
                                    </div>
                                    <!--                    end of .education-->
                                    <?php
                        }
                        ?>
                                        <?php
                            }
                        ?>
                        </div>
                        <!--                end 0f .co-curricular-activities-->
                </div>
                <!--            end of .professional-details-->

            </div>
            <!--        end of .details-->
            <div id="editor"></div>
            <!----TEST-->
        </div>
        <!--    end of .a4-size-paper-->
        <a href="javascript:resume()" class="yellow-btn download-btn" id="cmd">Download Resum</a>
        <form action="scripts/resume/openinword.php" method="post">
            <input type="hidden" name="htmlstring" id="htmlstring" value="">
            <!--            <input type="submit" id="open_in_docx" value="Generate Docx" class="yellow-btn docx-btn">-->
        </form>




    </body>
    <script src="../assets/global/js/jquery3.3.1.min.js"></script>
    <script src="scripts/resume/jsPDF-master/dist/jspdf.min.js"></script>
    <script src="scripts/resume/jsPDF-master/dist/jspdf.debug.js"></script>

    <script>
        function resume() {
            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function(element, renderer) {
                    return true;
                }
            };

            $('#cmd').click(function() {
                doc.fromHTML($('#resume').html(), 15, 15, {
                    'width': 170,
                    'elementHandlers': specialElementHandlers
                });
                doc.save('sample-file.pdf');
            });
        }

    </script>
<!--
    <script>
        $('#open_in_docx').click(function() {
            //get your Div HTML tring
            var s = $('#resume').html();
            $('#htmlstring').val(s);
        });

    </script>
-->

</html>
