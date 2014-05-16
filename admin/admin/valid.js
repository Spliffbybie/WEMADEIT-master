$(document).ready(function(){
  $("#user_username").blur(function(){chkname('user_username');});
  $("#user_password").blur(function(){ chkname('user_password'); });
  $("#user_password2").blur(function() { chkselect('user_password2'); });
  $("#user_question").blur(function() { chkname('user_question'); });
  $("#user_answer").blur(function() { chkname('user_answer'); });
  $("#user_role").blur(function() { chkselect('user_role'); });
  $('.pop_but').click(function() { chkvalid(); })
 });    
//==================OnClick Validations==========================
function chkvalid()
{
 $val=$("#terms:checked").val();
 if($val==undefined){
    setalert('termsspan',$termserr);
}else{
  clearalert('termsspan');
var ofnam=chkname('user_username');
var olnam=chkname('user_password');
var ogen=chkname('user_password2');
var oemail=chkselect('user_question');
var omono=chkname('user_answer');
var ousr=chkselect('user_role');
if((ofnam==true) && (olnam==true) && (ogen==true) && (oemail==true) && (omono==true) && (ousr==true)){
 if(($("#user_username").val()!="") && ($("#user_password").val()!="") &&($("#user_password2").val()!="") &&($("#user_question").val()!="") 
 &&($("#user_answer").val()!="") &&($("#user_role").val()!="")){
     if(($("#user_usernamespan").val()=="")&&($("#user_passwordspan").val()=="")&& ($("#user_password2span").val()=="")
     &&($("#user_questionspan").val()=="")&&($("#user_answerspan").val()=="")&&($("#user_rolespan").val()==""))
      {
   $('#success').html('<center><h1><font color=green>Welcome to HScripts.com</h1><br><h4><font color=red>Submission Successful!</font></h4></center>')
     }
   }
  }
 }
}//==================Validate Re type password==========================
function chkpass(data)
{
 if($('#user_password').val()==data)
  return true;
 else
  return false;
} 
//==================Validate Email==========================
function isValidEmail(email)
{
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	 if(!filter.test(email))
		return false;
	 else
		return true;
}	

//==================Validate Number==========================
function validatenum(data)
{
        if(data.match('^(0|[1-9][0-9]*)$'))
               return true;
         else 
             return false;
}
//==================Validate Nunmber==========================

//==================Validate Name==========================
function checkSpecialChar(data){
	var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?~_";
	isvalid=true;
	for (var i = 0; i < data.length; i++) {
		if (iChars.indexOf(data.charAt(i)) != -1) {isvalid=false;}
	}return isvalid;
}
function validateName(data){
		  if(data.length>0&&checkSpecialChar(data)){
      var isvalid=true;
      var iChars = "1234567890"; 
			for (var i = 0; i < data.length; i++) {
		 if (iChars.indexOf(data.charAt(i)) != -1) {isvalid=false;}
}	
			return isvalid;
}
		else{return false;
}
}

//==================Validate Name==========================

function chkname(nameid)
{
 $value=$('#'+nameid).val();
 
 if($value=="")
  {
  setalert(nameid+'span',$empty);     
       }
   else{
        if(nameid=='user_username'|| nameid=='user_answer'){
            $valid=validateName($value);
            $errmsg=$nameerr;
        }else if(nameid=='email'){
            $valid=isValidEmail($value)
           $errmsg=$emailerr;
      }else if(nameid=='cellno'){
            $valid=validatenum($value)
           $errmsg=$numbererr;
      } else if(nameid=='user_username') {
           $valid=true;
      }else if(nameid=='user_password') {
           $valid=true;
      }else if(nameid=='user_password2') {
           $valid=chkpass($value);
        $errmsg=$passworderr;
      }    
      if($valid==false)
         {
            setalert(nameid+'span',$errmsg);       
                return false;
        } 
       else{
          
            clearalert(nameid+'span');          
           return true;
       }
    }
}
//==================Validate Gender==========================
function chkselect(gender)
{
   $value=$('#'+gender).val();
  
  if($value=="------select------" || $value=="" )
   {
    setalert(gender+'span',$gendererr);
     return false;
    }
  else{
            clearalert(gender+'span');
            return true;
   }


}
//==================Validate Gender==========================

function setalert(idd,errmsg)
{
  $('.'+idd+'imgg').css({
        "background":"url(images/error_icon.png) no-repeat",
         "position":"absolute",  
        "width":"16px",
        "height":"16px",
        "padding":"5px"
    });
$('#'+idd).html(errmsg);
 
  return false;
}
function clearalert(idd)
{
 
 $('.'+idd+'imgg').css({
        "background":"url(./images/success_icon.png) no-repeat",
         "position":"absolute",  
        "width":"16px",
        "height":"16px",
        "padding":"10px"
    });

 //$('#'+idd).fadeOut("slow");
$('#'+idd).html("");
 return true;
}
function ctck()
{
     var sds = document.getElementById("dum");
     if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
     var sdss = document.getElementById("dumdiv");
     if(sdss == null){
         alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
}
document.onload ="ctck()";