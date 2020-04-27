<?php
$dsn ="mysql:host=localhost;dbname=mytimesheets";
$username = "root";
$password = "";

try{
    $db = new PDO($dsn, $username, $password);
    //Setting up error on server
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_reporting(E_ALL);
    
}catch(PDOException $ex){
   //echo "Connection Failure Error is " . $ex->getMessage();
    // redirect to an error page passing the error message
    header("Location:../view/error.php?msg=" . $ex->getMessage());
}


