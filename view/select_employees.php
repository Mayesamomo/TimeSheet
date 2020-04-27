<?php include '../view/header.php';?>
<main>
    <?php include '../view/aside.php';?>
  
 <section class="employee">
        <h2 id="header">Employee List</h2>
        <form method="POST" action=".">
            <input type="hidden" name="action" value="Enter_emp_hours">
      <select name="empId">
            <option value="hidden">Select Employee</option>
            <?php foreach($allEmployees as $employee){
                $aname =  $employee['firstName'].' '.$employee['lastName'];
                $empId = $employee['id'];
                ?>
                <option value="<?php echo $empId;?>"><?php echo $aname;?></option>
        <?php }?>
        </select>
        
        <input type="date" step="7" min="2018-11-24" id="weekEnding" name="weekEnding" >
            
        <input type="submit" value="Select" class="btn btn-primary">
        </form>
        
      
 </section>
</main>
        <?php include '../view/footer.php';?>
