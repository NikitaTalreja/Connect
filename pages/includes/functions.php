<?php
require_once("db.php");
function checkQueryResult($resultset){
    global $connection;
    if(!$resultset){
        die("Query Failed : ".mysqli_error($connection));
    }
}
function checkUser(){
    global $connection;
    if(!isset($_SESSION['user_id'])){
        $url = "http://localhost/connect/pages/error.php";
        redirect($url);
    }
}
/*
*
*
POST functions
*
*
*/
function getPost($loggedInId){
    global $connection;
    $post_rows = array();
    $query = "SELECT * FROM posts where post_author = $loggedInId and deleted = 0 order by post_time desc";
    $post_details = mysqli_query($connection, $query);
    checkQueryResult($post_details);
    while($post_row = mysqli_fetch_assoc($post_details)){
        $post_rows[] = $post_row;
    }
    return($post_rows);
}
function getallPost($loggedInId){
    global $connection;
    $post_rows = array();
    $query = "SELECT * FROM posts where deleted = 0 order by post_time desc";
    $post_details = mysqli_query($connection, $query);
    checkQueryResult($post_details);
    while($post_row = mysqli_fetch_assoc($post_details)){
        $post_rows[] = $post_row;
    }
    return($post_rows);
}
function getPostAuthor($post_author){
    global $connection;
    $query = "SELECT * from users where user_id = $post_author";
    $post_author_details = mysqli_query($connection, $query);
    checkQueryResult($post_author_details);
    if($row = mysqli_fetch_assoc($post_author_details)){
        $post_author_name = $row['user_firstname'];
        return $post_author_name;
    }
    
}





/*
*
*
Resume functions
*
*
*/
function getLoggedInUser($loggedInId){
    global $connection;
    $query = "SELECT * FROM users WHERE user_id = $loggedInId";
    $user_details = mysqli_query($connection, $query);
    checkQueryResult($user_details);
    if($row = mysqli_fetch_assoc($user_details)){
        return ($row);
   }
}
function getTechnicalSkills($loggedInId){
    global $connection;
    $query = "SELECT * FROM technical_skills WHERE user_id = $loggedInId";
    $technical_details = mysqli_query($connection, $query);
    checkQueryResult($technical_details);
    if($technical_row = mysqli_fetch_assoc($technical_details)){
        return ($technical_row);
   }
}
function getEducation($loggedInId){
    global $connection;
    $query = "SELECT * FROM education WHERE user_id = $loggedInId";
    $education_details = mysqli_query($connection, $query);
    checkQueryResult($education_details);
    if($education_row = mysqli_fetch_assoc($education_details)){
        return ($education_row);
   }
}
function getProject($loggedInId){
    global $connection;
    $rows = array();
    $query = "SELECT * FROM project WHERE user_id = $loggedInId";
    $project_details = mysqli_query($connection, $query);
    checkQueryResult($project_details);
    while($project_row = mysqli_fetch_assoc($project_details)){
        $rows[] = $project_row;
   }
    return $rows;
}
function getCocurricular($loggedInId){
    global $connection;
    $rows = array();
    $query = "SELECT * FROM cocurricular where user_id = $loggedInId";
    $cocurricular_details = mysqli_query($connection, $query);
    checkQueryResult($cocurricular_details);
    while($cocurricular_row = mysqli_fetch_assoc($cocurricular_details)){
        $rows[] = $cocurricular_row;
   }
    return $rows;
}
function getExtracurricular($loggedInId){
    global $connection;
    $rows = array();
    $query = "SELECT * FROM extracurricular where user_id = $loggedInId";
    $extracurricular_details = mysqli_query($connection, $query);
    checkQueryResult($extracurricular_details);
    while($extracurricular_row = mysqli_fetch_assoc($extracurricular_details)){
        $rows[] = $extracurricular_row;
   }
    return $rows;
}
/*
*
*
CRUD
*
*
*/
function insert($tableName, $columns, $values){
    global $connection;
    $query = "INSERT INTO $tableName($columns) VALUES ($values)";
    
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
    return $resultset;
}
function redirect($url){
    header("Location: $url");
    exit();
}
function deleteRecord($tableName,$primaryKeyColumnName,$primaryKeyValue){
		global $connection;
		$query = "UPDATE $tableName SET deleted = 1, deleted_by = $employeeID,deleted_at = now() WHERE $primaryKeyColumnName = $primaryKeyValue";
		$resultset = mysqli_query($connection, $query);
    	checkQueryResult($resultset); 
	}

?>