<?php

function get_employees(){
    global $db;
    $query = "SELECT * FROM employees ORDER BY id;";
    $statement = $db->prepare($query);
    try{
        $statement->execute();
    } catch (PDOException $ex) {
        header("Location:../view/error.php?msg=" . $ex->getMessage());
        exit();
    }
    $employees = $statement->fetchAll();
    $statement->closeCursor();
    
    return $employees;
}
// function get_employees_weekending($weekending){
//     global $db;
//     $query ="SELECT * FROM timesheets WHERE weekEnding= :weekending";
//     $statement= $db->prepare($query);
//     $statement->bindValue(":weekending",$weekending);
//     try{
//         $statement->execute();
//     } catch (PDOException $ex){
//         header("Location:../view/error.php?msg=").$ex->getMessage();
//     }
//     $Week_ending =$statement->fetch();
//     $weekend =$Week_ending['jobEnding'];
//     $statement->closeCursor();
//     return $weekend;
// }


function get_name($empId){
    global $db;
    $query = "SELECT * FROM employees WHERE id = :empId";
    $statement = $db->prepare($query);
    $statement->bindValue(":empId", $empId);
    try{
        $statement->execute();
    } catch (PDOException $ex) {
        header("Location:../view/error.php?msg=" . $ex->getMessage());
        exit();
    }
    $employees = $statement->fetch();
    $statement->closeCursor();
    
    return $employees['firstName'] . " " . $employees['lastName'];
}

/* @var $jobsheet type */
global $db;
$jobsheet = $_GET["term"];
if ($jobsheet != null) {
    $query = "SELECT * FROM timesheets WHERE jobSheet LIKE :jobSheet";
    $statement = $db->prepare($query);
    $statement->bindValue(":n", $jobsheet."%", PDO::PARAM_STR);
    try {
        $statement->execute();
    }
    catch(PharException $e) {
        echo $e->getMessage();
        exit();
    }
    $results = $statement->fetch();
    $statement->closeCursor();
    
    $jobsheet = array();
    
    foreach ($results as $result){
        $jobsheet[$result['id']] = $jobsheet['jobSheet'];
       ;
    }
    $response = json_encode($jobsheet);
    echo $response;
}
