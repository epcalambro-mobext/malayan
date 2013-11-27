<div id="home" data-role="page">
  <div data-role="content" align="center">

    <img src="<?php echo base_url();?>asset/images/home_banner.png" id="banner">

  	<div id="regForm" style="margin-top:40px;">
            <div class="age" style="margin-bottom:-40px">
                Hi!, I am a <u><label id="gender">GENDER</label></u>.
            </div>
            <div class="age">
                I'm <input type="tel" style="font-size:22px;color:black" value="13" id="age" maxlength="2" /> years old.
            </div>
            <div class="weight">
               I weight  <input type="tel" id="weight" value="0" style="font-size:22px;color:black" maxlength="3" data-autosize-input='{ "space": 40 }'>
            </div>Kg.
            <div class="city">
                I live in <input type="text" id="city" value="City" style="font-size:22px;color:black">.
            </div>
            <div>
                 I have a past history of <u><label id="history">HISTORY</label></u>.
            </div>
            <div class="desiredAmount">
                 My ideal coverage will be Php <input type="tel" style="font-size:22px;color:black" style="font-size:22px;color:black" value="0" id="desiredAmount" />
            </div>
            <div class="premiumAmount">
                 with a premium of Php <input type="tel" style="font-size:22px;color:black" value="0" id="premiumAmount" />
            </div>
    </div>
  </div><!-- end content -->
  <div data-role="footer" data-theme="none" data-position="fixed">
        <center>
            <img src="<?php echo base_url(); ?>asset/images/arrow_down.png" id="arrow-down">
        </center>
    </div>

    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
            <a href="#" id="closePopup" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext">Close</a>
          

    <!-- content -->

  <p id="gender" name="gender">Male</p>
  <input type="submit" id="register" name="register" value="Submit" />

  </div><!-- end content -->
    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
      </div>
    </div>

    <div data-role="popup" id="genderPopup" data-position-to="window">
        <ul data-role="listview">
            <li onClick="getGender('Male')">Male</li>
            <li onClick="getGender('Female')">Female</li>
        </ul>
    </div>

    <div data-role="popup" id="historyPopup" data-position-to="window" style="width:300px;height:200px;overflow:auto;padding-left:10px;padding-right:10px">
        <br><br>
        <ul data-role="listview" data-filter="true" styke="">
            <li onClick="getHistory('Tubercolosis')">Tubercolosis</li>
            <li onClick="getHistory('Heart Transplant')">Heart Transplant</li>
            <li onClick="getHistory('Tubercolosis')">Tubercolosis</li>
            <li onClick="getHistory('Heart Transplant')">Heart Transplant</li>
            <li onClick="getHistory('Tubercolosis')">Tubercolosis</li>
        </ul>
    </div>

</div><!-- end page -->
<script type="text/javascript">

$('#document').ready(function(){


  var gender = '';
  var age = '';
  var weight = '';
  var past_history = '';
  var desired_amount = '';
  var limit_amount = '';
  var hospital_id = '';

  $('#register').click(function(){

    

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
  

//Load Gender Popups
$('#gender').click(function(){
    $('#genderPopup').popup('open', {positionTo : "#gender"});
    $('#genderPopup').css('margin-top', '55px');  
});


//Load History Popups
$('#history').click(function(){
    $('#historyPopup').popup('open', {positionTo : "#history"});
    $('#historyPopup').css('margin-top', '80px');
});

  /* auto size text inputs */
 var oneLetterWidth = 10;
 var minCharacters = 5;

 $('#city').keyup(function () {
     var len = $(this).val().length;
     if (len > minCharacters) {
         // increase width
         $(this).width(len * oneLetterWidth);
     } else {
         // restore minimal width;
         $(this).width(50);
     }
 });


 function getGender(genderV)
 {
    gender = genderV;
    $('#gender').text(genderV);
    $('#genderPopup').popup('close');
 }

 function getHistory(historyV)
 {
    past_history = historyV;
    $('#history').text(historyV);
    $('#historyPopup').popup('close');
 }
</script>

