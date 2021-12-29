$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if (dataObj.email.length < 6) {
		_error
		     .text("Please enter a valid email address")
		     .show();
		return false;
	} else if (dataObj.password.length < 8) {
				_error
		     .text("Please enter a password that is at least 8 characters long.")
		     .show();
		return false;
	}


	//if the code gets this far we start the ajax process
	_error.hide();

	$.ajax ({
		type: 'POST',
		//wouldn't work unless I put the root of the folder here (i guess since i have other projects? idk)
		url: '/Log-Reg-Site/ajax/register.php', 
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done (function ajaxDone(data){
		//whatever data is
		if(data.redirect !== undefined){
			window.location = data.redirect;
		} else if(data.error !== undefined){
			_error
				.text(data.error)
				.show();
		}
	})

	.fail (function ajaxFailed(e) {
		//this failed
	})

	.always (function ajaxAlwaysDoThis(data){
		//always do
		console.log('always');
	})


	return false;
})

//login
.on("submit", "form.js-login", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if (dataObj.email.length < 6) {
		_error
		     .text("Please enter a valid email address")
		     .show();
		return false;
	} else if (dataObj.password.length < 8) {
				_error
		     .text("Please enter a password that is at least 8 characters long.")
		     .show();
		return false;
	}


	//if the code gets this far we start the ajax process
	_error.hide();

	$.ajax ({
		type: 'POST',
		//wouldn't work unless I put the root of the folder here (i guess since i have other projects? idk)
		url: '/Log-Reg-Site/ajax/login.php', 
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done (function ajaxDone(data){
		//whatever data is
		if(data.redirect !== undefined){
			window.location = data.redirect;
		} else if(data.error !== undefined){
			_error
				.html(data.error)
				.show();
		}
	})

	.fail (function ajaxFailed(e) {
		//this failed
	})

	.always (function ajaxAlwaysDoThis(data){
		//always do
		console.log('always');
	})


	return false;
})
