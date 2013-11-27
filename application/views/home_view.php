<div id="home" data-role="page" align="center">
  <div data-role="content">
  	<p id="alertDesc" style="word-wrap:break-word;" align="center"><label id="text" style="float:left">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
 </p>
  </div><!-- end content -->
    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
            <a href="#" id="closePopup" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext">Close</a>
          
      </div>
    </div>

    <div data-role="popup" id="popupBasic" data-position-to="window">
      <div style="font-size:20px;">Male</div>
      <div style="font-size:20px;">Female</div>
    </div>
</div><!-- end page -->
<script type="text/javascript">

$('#document').ready(function(){

	$('#login').click(function(){

		var email = $('#email').val();
		var password = $('#password').val();
		var response = {};

		response = login(email,password);



	});



});

$('#text').click(function(){
  $('#popupBasic').popup('open', {positionTo: '#text'});
  $('#popupBasic').css('margin-top', "30px");
  $('#popupBasic').css('width', "100%");
  
});

</script>