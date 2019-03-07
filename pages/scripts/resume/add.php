<?php
    require_once("../../includes/functions.php");
    session_start();
    $user_id = $_SESSION['user_id'];
    //echo $user_id;
    if(isset($_POST['technical-submit'])){
        $languages = $_POST['languages'];
        $framework = $_POST['frameworks'];
        $database_languages = $_POST['database_languages'];
        $additional_description = $_POST['additional_description'];
        
        $tableName = "technical_skills";
        $columns = "user_id,languages,frameworks,database_languages,additional_description";
        $values = "$user_id,'$languages','$framework','$database_languages','$additional_description'";
        
        insert($tableName,$columns,$values);
        
        echo "Inserted Successfully!";
        
        $url = "http://localhost/connect/pages/add-technicalskills.php";
        redirect($url);
    }
    else if(isset($_POST['education-submit'])){
        $grad_institute = $_POST['grad_institute'];
        $grad_city = $_POST['grad_city'];
        $grad_degree = $_POST['grad_degree'];
        $cgpi = $_POST['cgpi'];
        $grad_admission_year = $_POST['grad_admission_year'];
        $grad_passing_year = $_POST['grad_passing_year'];
        $higher_institute = $_POST['higher_institute'];
        $higher_city = $_POST['higher_city'];
        $higher_course = $_POST['higher_course'];
        $higher_percentage = $_POST['higher_percentage'];
        $higher_admission_year = $_POST['higher_admission_year'];
        $higher_passing_year = $_POST['higher_passing_year'];
        $school_name = $_POST['school_name'];
        $school_city = $_POST['school_city'];
        $school_board = $_POST['school_board'];
        $school_percentage = $_POST['school_percentage'];
        $school_admission_year = $_POST['school_admission_year'];
        $school_passing_year = $_POST['school_passing_year'];
        
        $tableName = "education";
        $columns = "user_id,grad_institute,grad_city,grad_degree,cgpi,grad_admission_year,grad_passing_year,higher_institute,higher_city,higher_course,higher_percentage,higher_admission_year, higher_passing_year, school_name, school_city, school_board, school_percentage,school_admission_year,school_passing_year";
        
        $values = "$user_id,'$grad_institute','$grad_city','$grad_degree','$cgpi','$grad_admission_year','$grad_passing_year',
    '$higher_institute','$higher_city','$higher_course','$higher_percentage','$higher_admission_year','$higher_passing_year','$school_name','$school_city','$school_board','$school_percentage','$school_admission_year','$school_passing_year'";
        insert($tableName, $columns, $values);
        //echo "Inserted Successfully!";
        $url = "http://localhost/connect/pages/add-education.php";
        redirect($url);
    }




else if(isset($_POST['project-submit'])){
        $project_title = $_POST['project_title'];
        $technologies_used = $_POST['technologies_used'];
        $done_in_the_year = $_POST['done_in_the_year'];
        $additional_information = $_POST['additional_information'];
        
        $tableName = "project";
        $columns = "user_id, project_title, technologies_used, done_in_the_year,additional_information";
        $values = "$user_id,'$project_title','$technologies_used','$done_in_the_year','$additional_information'";
        
       // echo "$user_id,$project_title,$technologies_used,$done_in_the_year,$additional_information";
       insert($tableName,$columns,$values);
        $url = "http://localhost/connect/pages/add-projects.php";
    redirect($url);
    
    }
else if(isset($_POST['cocurricular-submit'])){
    $event_name = $_POST['event_name'];
    $organisation_name = $_POST['organisation_name'];
    $position = $_POST['position'];
    $additional_description = $_POST['additional_description'];
    
    $tableName = "cocurricular";
    $columns = "user_id, event_name, organisation_name, position, additional_description ";
    $values = "$user_id,'$event_name','$organisation_name','$position','$additional_description'";
    
   insert($tableName, $columns, $values);
   $url = "http://localhost/connect/pages/add-cocurricular.php";
    redirect($url);
}
else if(isset($_POST['extracurricular-submit'])){
    $event_name = $_POST['event_name'];
    $organisation_name = $_POST['organisation_name'];
    $position = $_POST['position'];
    $additional_description = $_POST['additional_description'];
    
    $tableName = "extracurricular";
    $columns = "user_id, event_name, organisation_name, position, additional_description ";
    $values = "$user_id,'$event_name','$organisation_name','$position','$additional_description'";
    
   insert($tableName, $columns, $values);
   $url = "http://localhost/connect/pages/add-extracurricular.php";
    redirect($url);
}
?>