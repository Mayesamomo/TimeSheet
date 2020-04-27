<?php
function get_timesheets($empId, $weekEnding){
    global $db;
    $query = "SELECT * FROM timesheets WHERE empId = :empId AND weekEnding = :weekEnding ORDER BY id";
    $statement = $db->prepare($query);
    $statement->bindValue(":empId", $empId);    
    $statement->bindValue(":weekEnding", $weekEnding);
    try{
        $statement->execute();
    } catch (PDOException $ex) {
        header("Location:../view/error.php?msg=" . $ex->getMessage());
        exit();
    }
    $timesheets = $statement->fetchAll();
    $statement->closeCursor();
    
    return $timesheets;
}

//ADDING TIMESHEETS TO THE DATABASE
//    function add_timesheets($id,$emId,$job,$wkEnd,$mon,$tue,$wed,$thur,$fri,$sat,$sun) {
//    global $db;
//    $query = "INSERT INTO timesheets(empId,jobSheet,weekEnding,monday,tuesday,wednesday,thursday,friday,saturday,sunday)
//            VALUES (:id, :empId, :jobSheet, :weekEnding, :monday, :tuesday, :wednesday, :thursday, :friday, :saturday, :sunday)";
//    $statement = $db->prepare($query);
//    $statement->bindValue(":id", $id);
//    $statement->bindValue(":empId",$emId);
//    $statement->bindValue(":jobSheet",$job);
//    $statement->bindValue(":weekEnding",$wkEnd);     
//    $statement->bindValue(":monday", $mon);
//    $statement->bindValue(":tuesday", $tue);
//    $statement->bindValue(":wednesday", $wed);
//    $statement->bindValue(":thursday", $thur);
//    $statement->bindValue(":friday", $fri);
//    $statement->bindValue(":saturday", $sat);
//    $statement->bindValue(":sunday", $sun);
//    try {
//        $statement->execute();
//    } catch (PDOException $ex) {
//        //redirect to an error page passing the error message
//        $timesheeets = get_timesheets();
//        heaeder("Location:../view/error.php?msg=" . $ex->getMessage());
//        exit();
//    }
//    $statement->closeCursor();
//    return $timesheeets;
//}
