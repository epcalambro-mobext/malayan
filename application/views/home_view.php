<div id="home" data-role="page" align="center">
  <div data-role="content">
<<<<<<< HEAD
  	<p id="alertDesc" style="word-wrap:break-word;" align="center"><label id="text" style="float:left">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
 </p>
  </div><!-- end content -->
    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
            <a href="#" id="closePopup" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext">Close</a>
          
=======
    <!-- content -->

  <p id="gender" name="gender">Male</p>
  <input type="submit" id="register" name="register" value="Submit" />

  </div><!-- end content -->
    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
>>>>>>> 5d26da68f5471e90c11e730fe0852e022bfe76d3
      </div>
    </div>

    <div data-role="popup" id="popupBasic" data-position-to="window">
      <div style="font-size:20px;">Male</div>
      <div style="font-size:20px;">Female</div>
    </div>
</div><!-- end page -->
<script type="text/javascript">

$('#document').ready(function(){


  $('#register').click(function(){

    var gender = '';
    var age = '';
    var weight = '';
    var past_history = '';
    var desired_amount = '';
    var limit_amount = '';
    var hospital_id = '';

    var data = {

      'gender' : gender,
      'age' : age,
      'weight' : weight,
      'past_history' : past_history,
      'desired_amount' : desired_amount,
      'limit_amount' : limit_amount,
      'hospital_id' : hospital_id
     };

     var response = validation(data);

     if(response.status)
     {
        //CHECK PROMO CODE
            $.ajax({
              url : '<?php echo base_url(); ?>home/register',
              data : data,
              dataType: 'json',
              type : 'POST',
              success : function(data){ 
                alert(data.status);
                return false;
              },
              complete: hideLoader,
              beforeSend : showLoader('Please wait...'),
              error : function()
              {
                
              }
          });
     }
     else
     {
        alert(response.msg);
        return false;
     }

  });
});

<<<<<<< HEAD
$('#text').click(function(){
  $('#popupBasic').popup('open', {positionTo: '#text'});
  $('#popupBasic').css('margin-top', "30px");
  $('#popupBasic').css('width', "100%");
  
});

</script>
=======
</script>
>>>>>>> 5d26da68f5471e90c11e730fe0852e022bfe76d3
