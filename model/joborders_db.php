<?php

function get_job_by_num($empId, $jobOrderNo) {
    global $db;
    $query = " SELECT * FROM joborders WHERE id = :empid AND jobOrderNo = :jobOrderNo ORDER BY id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":empid", $empId);
    $statement->bindValue(":jobOrderNo", $jobOrderNo);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        header("Location:../view/error.php?msg=" . $ex->getMessage());
        exit();
        $jobOderNo = $statement->fetchAll();
        $statement->clocseCursor();

        return $jobOderNo;
    }
}
