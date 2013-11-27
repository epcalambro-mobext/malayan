function showLoader(message)
{
  $.mobile.showPageLoadingMsg("a", message);
}
              
function hideLoader()
{
  $.mobile.hidePageLoadingMsg();
}

function showAlert(message)
{
    $('#alertDesc').text(message);
    $('#alert').popup('open');
}
              
function hideAlert()
{
  $('#alert').popup('close');
}

function validation(data)
{

	var response = {
		'status' : true,
		'msg' : 'SUCCESS'
	}

	if(data.gender == null || data.gender == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please enter your gender.'
		}
		return response;
	}

	if(data.age == null || data.age == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please enter your age.'
		}
		return response;
	}

	if(data.weight == null || data.weight == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please enter your weight.'
		}
		return response;
	}

	if(data.past_history == null || data.past_history == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please enter your past history medication.'
		}
		return response;
	}

	if(data.desired_amount == null || data.desired_amount == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please enter your past history desired amount.'
		}
		return response;
	}

	if(data.desired_amount<=3000)
	{
		response = {
			'status' : false,
			'msg' : 'The minimum amount for desired amount is Php3000.00'
		}
		return response;
	}

	if(data.limit_amount == null || data.limit_amount == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please enter your past history limit amount.'
		}
		return response;
	}

	if(data.limit_amount<=3000)
	{
		response = {
			'status' : false,
			'msg' : 'The minimum amount for limit amount is Php3000.00'
		}
		return response;
	}

	if(data.hospital_id == null || data.hospital_id == '')
	{
		response = {
			'status' : false,
			'msg' : 'Please select your hospital.'
		}
		return response;
	}

	return response;

}//end login
