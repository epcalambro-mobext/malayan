<div id="home" data-role="page" align="center">
  <div data-role="content">
    <!-- content -->

  <p id="gender" name="gender">Male</p>
  <input type="submit" id="register" name="register" value="Submit" />

  </div><!-- end content -->
    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
      </div>
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

</script>
