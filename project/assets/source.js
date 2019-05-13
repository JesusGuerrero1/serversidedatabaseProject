function validate(){
	if( document.getElementById('firstname').value == "" ){
		alert( "Please provide your first name!" );
		document.myForm.firstname.focus() ;
		return false;
	}

	if( document.getElementById('lastname').value == "" ){
		alert( "Please provide your last name!" );
		document.myForm.lastname.focus() ;
		return false;
	}

	if( document.getElementById('email').value == "" ){
		alert( "Please provide your Email!" );
		document.myForm.email.focus() ;
		return false;
	}
	return false;
}