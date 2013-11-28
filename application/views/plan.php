<div data-role="page" id="plan">
	<div data-role="content">
		<br /><br />
		<center>
			<label style="font-size:18px;font-weight:bold">Hey,</label><br>
			<label style="font-size:18px;font-weight:bold">Here are the perfect plans</label><br>
			<label style="font-size:18px;font-weight:bold">for you!</label>
		</center>

		<div id="planSetA" align="center">
			<br>
			<label id="txtPlatinum">Platinum</label>
			<div class="ui-grid-a" style="margin-top:30px;">
				<div class="ui-block-a" id="grid" align="center">
					<label style="font-size:18px">Insurance value</label><br>
					<label style="font-size:18px">Php 3,000,000.00</label>
				</div>
				<div class="ui-block-b" id="grid">
					<label style="font-size:18px">Premium</label><br>
					<label style="font-size:18px">Php 16,000.00</label>
				</div>   
			</div>
		</div>

		<div id="planSetB" align="center">
			<br>
			<label id="txtPlatinum">Gold</label>
			<div class="ui-grid-a" style="margin-top:30px;">
				<div class="ui-block-a" id="grid" align="center">
					<label style="font-size:18px">Insurance value</label><br>
					<label style="font-size:18px">Php 3,000,000.00</label>
				</div>
				<div class="ui-block-b" id="grid">
					<label style="font-size:18px">Premium</label><br>
					<label style="font-size:18px">Php 16,000.00</label>
				</div>   
			</div>
		</div>

		<div id="planSetC" align="center">
			<br>
			<label id="txtPlatinum">Silver</label>
			<div class="ui-grid-a" style="margin-top:30px;">
				<div class="ui-block-a" id="grid" align="center">
					<label style="font-size:18px">Insurance value</label><br>
					<label style="font-size:18px">Php 3,000,000.00</label>
				</div>
				<div class="ui-block-b" id="grid">
					<label style="font-size:18px">Premium</label><br>
					<label style="font-size:18px">Php 16,000.00</label>
				</div>   
			</div>
		</div>
	</div>

	<div data-role="footer" data-theme="none" data-position="fixed">
        <center>
            <img src="<?php echo base_url(); ?>asset/images/arrow_down.png" id="arrow-down">
        </center>
  </div>

</div>

<script>
$('#planSetA').click(function(){
	$('#planSetA').css('border', '1px solid #d7b8c6');
	$('#planSetB').css('border', 'none');
	$('#planSetC').css('border', 'none');
});

$('#planSetB').click(function(){
	$('#planSetB').css('border', '1px solid #d7b8c6');
	$('#planSetA').css('border', 'none');
	$('#planSetC').css('border', 'none');
});

$('#planSetC').click(function(){
	$('#planSetC').css('border', '1px solid #d7b8c6');
	$('#planSetB').css('border', 'none');
	$('#planSetA').css('border', 'none');
});


</script>