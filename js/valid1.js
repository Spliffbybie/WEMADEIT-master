$(document).ready(function(){
  $("#fname").blur(function() { chkname('fname'); });
  $("#mname").blur(function() { chkname('mname'); });
   $("#lname").blur(function() { chkname('lname'); });
  $("#dob").blur(function() { chkname('dob'); });
  $("#gender").blur(function() { chkselect('gender'); });
  $("#race").blur(function() { chkselect('race'); });
  $("#type").blur(function() { chkselect('type'); });
  $("#location").blur(function() { chkname('location'); });
  $("#social_worker").blur(function() { chkselect('social_worker'); });
  $("#handler").blur(function() { chkselect('handler'); });
  $("#next_of_kin").blur(function() { chkselect('next_of_kin'); });
  $("#school").blur(function() { chkselect('school'); });
  $("#hospital").blur(function() { chkselect('hospital'); });
  $("#adoption").blur(function() { chknselect('adoption'); });

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
var ousr=chkname('fname');
var opasm=chkname('mname');
var opas=chkname('lname');
var orepas=  chkname('dob');
var oque=  chkselect('gender');
var oans=  chkselect('race');
var orol=  chkselect('type');
var orlo=  chkname('location');
var osw=chkselect('social_worker');
var ohand=  chknselect('handler');
var okin=  chkselect('next_of_kin');
var osch=  chkselect('school');
var ohos=  chkselect('hospital');
var oadop=  chkselect('adoption');

if((ousr==true) && (opasm==true) && (opas==true) && (orepas==true)&&(oque==true) && (oans==true) && (orol==true) && (orlo==true)&& (osw==true)&&(ohand==true) && (okin==true) && (osch==true) && (ohos==true)&& (oadop==true)){
 if(($("#fname").val()!="")&&($("#mname").val()!="") &&($("#lname").val()!="") &&($("#dob").val()!="")&&($("#gender").val()!="") &&($("#race").val()!="")&&($("#type").val()!="")&&($("#location")
 	 &&($("#social_worker").val()!="") &&($("#handler").val()!="")&&($("#next_of_kin").val()!="") &&($("#school").val()!="")&&($("#hospital").val()!="")&&($("#adoption").val()!=""){
     if(($("#fnamespan").val()=="")&&($("#mnamespan").val()=="")&&($("#lnamespan").val()=="")&&($("#dobspan").val()=="")&& ($("#genderspan").val()=="")&&($("#racespan").val()=="")&&($("#typespan").val()=="")&&($("#locationspan").val()=="")
     && ($("#Social_workerspan").val()=="")&&($("#handlerspan").val()=="")&&($("#next_of_kinspan").val()=="")&& ($("#schoolspan").val()=="")&&($("#hospitalspan").val()=="")&&($("#adoptionspan").val()=="")&& ($("#termsspan").val()==""))
           {
   $('#success').html('<center><h1><font color=green>Orphan Information</h1><br><h4><font color=red>Submission Successful!</font></h4></center>')
     }
   }
  }
 }
}//==================Validate Re type password==========================
function chkpass(data)
{
 if($('#passcode').val()==data)
  return true;
 else
  return false;
} 
*/==================Validate Email==========================
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
    	if(nameid=='fname') {
           $valid=true;
      }else if(nameid=='fname') {
           $valid=true;
      }else if(nameid=='fname') {
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

function setalert(idd,errmsg)
{
  $('.'+idd+'imgg').css({
        "background":"url(../icons/error_icon.png) no-repeat",
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
        "background":"url(../icons/success_icon.png) no-repeat",
         "position":"absolute",  
        "width":"16px",
        "height":"16px",
        "padding":"10px"
    });

 //$('#'+idd).fadeOut("slow");
$('#'+idd).php("");
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