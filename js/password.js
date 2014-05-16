function capLock(e){
 kc = e.keyCode?e.keyCode:e.which;
 sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
  $('#capss').css("visibility", 'visible');
 else
  $('#capss').css("visibility", 'hidden');
}

var pass_strength;

function IsEnoughLength(str,length)
{
	if ((str == null) || isNaN(length))
		return false;
	else if (str.length < length)
		return false;
	return true;
	
}

function HasMixedCase(passwd)
{
	if(passwd.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
		return true;
	else
		return false;
//	(passwd.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))? 'return true' : 'return false';
}

function HasNumeral(passwd)
{
	if(passwd.match(/[0-9]/))
		return true;
	else
		return false;
//	passwd.match(/[0-9]/) ? 'return true' : 'return false';
}

function HasSpecialChars(passwd)
{
	if(passwd.match(/.[!,@,#,$,%,^,&,*,?,_,~]/))
		return true;
	else
		return false;
//	passwd.match(/.[!,@,#,$,%,^,&,*,?,_,~]/) ? 'return true' : 'return false';
}


function CheckPasswordStrength(pwd)
{
   if(pwd!=""){
	if (IsEnoughLength(pwd,14) && HasMixedCase(pwd) && HasNumeral(pwd) && HasSpecialChars(pwd)){
		//pass_strength = "<b><font style='color:green'>Very strong</font></b>";
		document.getElementById('pwd_strength').style.width = 134+"px";
		document.getElementById('pwd_strength').style.backgroundColor = "green";
	}	
	else if (IsEnoughLength(pwd,8) && HasMixedCase(pwd) && (HasNumeral(pwd) || HasSpecialChars(pwd))){
		//pass_strength = "<b><font style='color:Blue'>Strong</font></b>";
		document.getElementById('pwd_strength').style.width = 100+"px";
		document.getElementById('pwd_strength').style.backgroundColor = "blue";
	}	
	else if (IsEnoughLength(pwd,8) && HasNumeral(pwd)){
		//pass_strength = "<b><font style='color:yellow'>Good</font></b>";
		document.getElementById('pwd_strength').style.width = 50+"px";
		document.getElementById('pwd_strength').style.backgroundColor = "yellow";
	}	
	else{
		//pass_strength = "<b><font style='color:red'>Weak</font></b>";
		document.getElementById('pwd_strength').style.width = 30+"px";
		document.getElementById('pwd_strength').style.backgroundColor = "red";
	}	

	//document.getElementById('pwd_strength').innerHTML = pass_strength;
}
}

function isValidEmail(email)
{
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	 if(!filter.test(email))
		return false;
	 else
		return true;
}	
