function CheckPassword(inputtxt)   
{   
	var passw = /((?=.{8,})(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]))/g; 
	
	if(inputtxt.value.match(passw))   
	{   
		return true;

	}  
	else  
	{   
		alert('Your password must be 8 characters or more long, have one uppercase, one lowercase letter and one number. Please try again.')  
		return false;
	}  
}  
