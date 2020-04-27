<?php include '../view/header.php';?>
<main> 
    <h1>Employee TimeSheet</h1>
<?php include '../view/aside.php';?>
    <section class="weeks">
        <ul class="heading">
            <li><h3 style="margin-right: 0.8em;">EMPLOYEE NAME: <?php echo $aname; ?></h3></li>
            <li><h3 style="margin-right: 0.8em;"> EMPLOYEE NO:<?php echo $empId; ?> </h3></li>
            
            <li><h3 style="margin-right: .5em;"> WEEK ENDING:<?php echo $weekEnding; ?> </h3></li>
            
        </ul>
        
        <table class="table" style="width:100%">
            <tr>
              <th>Sat</th>
              <th>Sun</th>
              <th>Mon</th> 
              <th>Tue</th>
              <th>Wed</th>
              <th>Thurs</th> 
              <th>Fri</th>
              <th>Wkly Total</th> 
              <th>Jobsheet N0</th>
            </tr>
        <form action="" method="POST" id="myform">
          <input type="hidden" name="empId" value="<?php echo $empId?>;">
            <tr>
                <td><input type="number" min="0" name="saturday" max="10" class="hour" id="sat"/></td>
                <td><input type="number" name="sunday" min="0" max="10" class="hour"  id="sun"/></td>
                <td><input type="number" min="0" name="monday" max="10" class="hour" id="mon"/></td>
                <td><input type="number" min="0" name="tuesday" max="10" class="hour" id="tue"/></td>
                <td><input type="number" min="0" name="wednesday" max="10" class="hour" id="wed"/></td>
                <td><input type="number" min="0" name="thursday" max="10" class="hour" id="thur"/></td>
                <td><input type="number" min="0" name="friday" max="10" class="hour" id="fri"/></td>
                <td ><input type='hidden' name='action' value="" class="sum"  id="weeklyTotal"/></td>
                <td>
                    <input id="jobsheet" name="subject" type="text" class="job">
                </td> 
                
                <td><button class="btn btn-primary calc" type="submit">Save</button></td> 
            </tr>
        </form>
             <?php foreach($alltimesheets as $timesheet){?>
            <tr>
              <td class="id"><?php echo $timesheet['saturday']?></td>
              <td class="id"><?php echo $timesheet['sunday']?></td>
              <td class="id"><?php echo $timesheet['monday']?></td>
              <td class="id"><?php echo $timesheet['tuesday']?></td>
              <td class="id"><?php echo $timesheet['wednesday']?></td>
              <td class="id"><?php echo $timesheet['thursday']?></td>
              <td class="id"><?php echo $timesheet['friday']?></td>
            </tr>
                <?php }?>
             <tr>
              <td class="sat"></td>
              <td class="sun"> </td>
              <td class="mon"></td>
              <td class="tue"></td>
              <td class="wed"></td>
              <td class="thurs"></td>
              <td class="fri"></td>
            </tr>
        </table>
           
       
	<button class="last_paragraph btn btn-primary">
            <a href="?action=show_add_form"><span style="color: red;">Export file</span></a>
            <br>
        </button>
        <button class="reset btn btn-primary">
            <label class="col-sm-2 control-label" for="reset">
            <a><span style="color: red;">Reset</span></a>
            </label>
            <br>
        </button>
         <div class="modal fade" id="over60" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header alert alert-danger">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Maximum Hours Exceeded</h4>
        </div>
        <div class="modal-body">
          <p>You submitted <span class="sum summodal"></span> hours this week.</p>
          <p>You are not allowed to work more than 60 hours a week.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </section>	
</main>
<?php include '../view/footer.php';?>



