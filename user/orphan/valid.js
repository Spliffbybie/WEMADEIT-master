$(document).ready(function(){
  $("#fname").blur(function(){chkname('fname');});
  $("#mname").blur(function(){ chkname('mname'); });
  $("#lname").blur(function(){ chkname('lname'); });
  $("#dob").blur(function() { chkselect('dob'); });
  $("#gender").blur(function() { chkselect('gender'); });
  $("#race").blur(function() { chkselect('race'); });
  $("#type").blur(function() { chkselect('type'); });
  $("#location").blur(function() { chkname('location'); });
  $("#social_worker").blur(function() { chkselect('social_worker'); });
  $("#handler").blur(function() { chkselect('handler'); });
  $("#next_of_kin").blur(function() { chknselect('next_of_kin'); });
  $("#school").blur(function() { chkselect('school'); });

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
var ofnam=chkname('fname');
var omnam=chkname('mname');
var olnam=chkname('lname');
var odob=chkname('dob');
var ogen=chkselect('gender');
var orace=chksect('race');
var otype=chkselect('type');
var oloc=chkname('location');
var osw=chkselect('social_worker');
var ohand=  chkselect('handler');
var okin=chkselect('next_of_kin');
var oscho=chkselect('school');

if((ofnam==true) && (omnam==true)  && (olnam==true)&& (odob==true) && (ogen==true) && (orace==true) && (otype==true) && (oloc==true) && (osw==true) && (ohand==true)
	&& (okin==true) && (oscho==true) ){
 if(($("#fname").val()!="")&& ($("#mname").val()!="") && ($("#lname").val()!="")&&($("#dob").val()!="") &&($("#gender").val()!="") &&($("#race").val()!="") &&($("#type").val()!="")
 		 &&($("#location").val()!="") &&($("#social_worker").val()!="") &&($("#handler").val()!="") &&($("#next_of_kin").val()!="") &&($("#school").val()!="") &&($("#adoption").val()!="")){
     if(($("#fnamespan").val()=="")&&($("#mnamespan").val()=="")&&($("#lnamespan").val()=="") &&($("#dobspan").val()=="") && ($("#genderspan").val()=="")&&($("#racespan").val()=="")
     			&&($("#typespan").val()=="")&&($("#locationspan").val()=="")&&($("#social_workerspan").val()=="")&&($("#handlerspan").val()=="")&& ($("#next_of_kinspan").val()=="")
    		    &&($("#schoolspan").val()==""))
      {
   $('#success').html('<center><h1><font color=green>Infomation</h1><br><h4><font color=red>Submission Successful!</font></h4></center>')
     }
   }+
  }
 }
}//==================Validate Re type password==========================
function chkname(data)
{
 if($('#pass').val()==data)
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
        if(nameid=='fname'|| nameid=='lname'){
            $valid=validateName($value);
            $errmsg=$nameerr;
        }else if(nameid=='email'){
            $valid=isValidEmail($value)
           $errmsg=$emailerr;
      }else if(nameid=='cellno'){
            $valid=validatenum($value)
           $errmsg=$numbererr;
      } else if(nameid=='user') {
           $valid=true;
      }else if(nameid=='pass') {
           $valid=true;
      }else if(nameid=='repas') {
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
//==================Validate Dob==========================
function chkselect(dob)
{
   $value=$('#'+dob).val();
  
  if($value=="Choose Date of Birth" || $value=="" )
   {
    setalert(dob+'span',$doberr);
     return false;
    }
  else{
            clearalert(dob+'span');
            return true;
   }


}
//==================Validate Dob==========================

//==================Validate Gender==========================
function chkselect(gender)
{
   $value=$('#'+gender).val();
  
  if($value=="Choose Gender" || $value=="" )
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

//==================Validate Race==========================
function chkselect(race)
{
   $value=$('#'+race).val();
  
  if($value=="Choose Race" || $value=="" )
   {
    setalert(race+'span',$raceerr);
     return false;
    }
  else{
            clearalert(race+'span');
            return true;
   }


}
//==================Validate Race==========================

//==================Validate Type==========================
function chkselect(type)
{
   $value=$('#'+type).val();
  
  if($value=="Choose Type" || $value=="" )
   {
    setalert(type+'span',$typeerr);
     return false;
    }
  else{
            clearalert(type+'span');
            return true;
   }


}
//==================Validate Type==========================
//==================Validate Social_worker==========================
function chkselect(social_worker)
{
   $value=$('#'+social_worker).val();
  
  if($value=="Choose Social Worker" || $value=="" )
   {
    setalert(social_worker+'span',$socialerr);
     return false;
    }
  else{
            clearalert(social_worker+'span');
            return true;
   }


}
//==================Validate Socail==========================
//==================Validate Handler==========================
function chkselect(handler)
{
   $value=$('#'+handler).val();
  
  if($value=="Choose Handler" || $value=="" )
   {
    setalert(handler+'span',$handerr);
     return false;
    }
  else{
            clearalert(handler+'span');
            return true;
   }


}
//==================Validate handler==========================



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
        "background":"url(images/success_icon.png) no-repeat",
         "position":"absolute",  
        "width":"16px",
        "height":"16px",
        "padding":"10px"
    });

 //$('#'+idd).fadeOut("slow");
$('#'+idd).html("");
 return true;
}
/*function ctck()
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
document.onload ="ctck()";**/