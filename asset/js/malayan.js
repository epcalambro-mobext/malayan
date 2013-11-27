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

function login(email,password)
{

	var success = true;
	var emailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var response = {'status' : true,'message':'SUCCESS'};


	if(email == null || email == '')
	{
		response = {
			'status' : false,
			'message' : 'Please enter your email.'
		};

		$('.ui-input-text #email').addClass('error');

		return response;
	}


	if (!email.match(emailregex) && email !="")
    {
    	response = {
			'status' : false,
			'message' : 'Please enter your valid email.'
		};

		return response;
	}

	if(password == null || password == '')
	{
		response = {
			'status' : false,
			'message' : 'Please enter your password.'
		};

		return response;
	}

	return response;

}//end login
