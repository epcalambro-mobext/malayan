<div id="home" data-role="page" align="center">
  <div data-role="content">
  	<input type="text" id="email" name="email" placeholder="Email" />
  	<input type="password" id="password" name="password" placeholder="Password" />
  	<input type="submit" id="login" name="login" value="Login" />
  </div><!-- end content -->
    <div data-role="popup" data-history="false" data-dismissible="false" data-overlay-theme="d" id="alert" data-history="false" data-transition="pop" data-position-to="window">
      <div data-role="content" align="center">
            <a href="#" id="closePopup" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext">Close</a>
          <p id="alertDesc"></p>
      </div>
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


</script>