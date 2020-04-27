/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function()
{
    $("#myform").validate(
      {
        rules: 
        {

          hour: 
          {
            range:[0,10]
          }
        }
      });	
});

