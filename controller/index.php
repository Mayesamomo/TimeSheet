
<?php
require '../model/database.php';
require '../model/employees_db.php';
require '../model/joborders_db.php';
require '../model/timesheets_db.php';
$action = filter_input(INPUT_GET, 'action');
if ($action == null) {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == null) {

        $action = 'get_employees';
        
    }
}

switch ($action) {
    case 'get_employees' :
        $allEmployees = get_employees();

        if ($allEmployees == null) {
            include '../view/error.php?msg=NoEmployeesFound';
        } else {

            include '../view/select_employees.php';
        }
        break;

//    case 'get_joborders':
//        $empId = filter_input(INPUT_POST, 'empId');
//        $weekEnding = filter_input(INPUT_POST, 'weekEnding');
//        
//        
//
//        $allJoborders = get_job_by_num($empId, $weekEnding);
//
//        include '../view/enter_emp_hours.php';
//
//        break;
    case 'Enter_emp_hours':
        $empId = filter_input(INPUT_POST, 'empId');
        $weekEnding = filter_input(INPUT_POST, 'weekEnding');
        $aname = get_name($empId);

       $alltimesheets = get_timesheets($empId, $weekEnding);
       
            include '../view/enter_emp_hours.php';
        
        break;
}