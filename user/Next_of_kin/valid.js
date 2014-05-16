$(document).ready(function(){
   $("#title").blur(function(){chkselect('title');});
  $("#fname").blur(function(){chkname('fname');});
  $("#mname").blur(function(){ chkname('mname'); });
  $("#lname").blur(function() { chkname('lname'); });
  $("#relation").blur(function() { chkselect('relation'); });
  $("#cellno").blur(function() { chkname('cellno'); });
  $("#email").blur(function() { chkname('email'); });
  $("#telephone").blur(function() { chkname('telephone'); });
  $("#fax").blur(function() { chkname('fax'); });
  $("#addressline1").blur(function() { chkname('addressline1'); });
  $("#addressline2").blur(function() { chkname('addressline2'); });
  $("#city").blur(function() { chkname('city'); });
  $("#postalcode").blur(function() { chkname('postalcode'); });
  $("#province").blur(function() { chkselect('province'); });
  $("#country").blur(function() { chkname('country'); });
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
var otit=chkselect('title');
var ofnam=chkname('fname');
var omnam=chkname('mname');
var olnam=chkname('lname');
var orel=chkselect('relation');
var omono=chkname('cellno');
var oemail=chkname('email');
var otel=chkname('telephone');
var ofax=  chkname('fax');
var oadd1=chkname('addressline1');
var oadd2=chkname('addressline2');
var ocity=chkname('city');
var opost=chkname('postalcode');
var oprov=chkselect('province');
var ocou=  chkname('country');

if((otit==true) &&(ofnam==true)&& (omnam==true)  && (olnam==true) && (orel==true) && (oemail==true) && (omono==true) && (otel==true) && (ofax==true) && (oadd1==true) 
		&& (oadd2==true) && (ocity==true) && (opost==true) && (oprov==true) && (ocou==true)){
 if(($("#title").val()!="")&&($("#fname").val()!="")&& ($("#mname").val()!="") && ($("#lname").val()!="") &&($("#relation").val()!="") &&($("#email").val()!="") &&($("#cellno").val()!="")
 			 &&($("#telephone").val()!="") &&($("#fax").val()!="") &&($("#adddresline1").val()!="")&&($("#addressline2").val()!="") &&($("#city").val()!="") &&($("#postalcode").val()!="")
 			 &&($("#province").val()!="") &&($("#country").val()!="") ){
     if(($("#titlespan").val()=="")&&($("#fnamespan").val()=="")&&($("#mnamespan").val()=="")&&($("#lnamespan").val()=="")&& ($("#relationspan").val()=="")&&($("#emailspan").val()=="")
     		&&($("#cellnospan").val()=="") &&($("#telephonespan").val()=="")&&($("#faxspan").val()=="")&&($("#addressline1span").val()=="")&& ($("#addressline2span").val()=="")
     		 &&($("#cityspan").val()=="")&&($("#postalcodespan").val()=="")&&($("#provincespan").val()=="")&& ($("#countryspan").val()==""))
      {
   $('#success').html('<center><h1><font color=green>Information</h1><br><h4><font color=red>Submission Successful!</font></h4></center>')
     }
   }
  }
 }
}//==================Validate Re type password==========================
function chkpass(data)
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
//==================Validate relation==========================
function chkselect(relation)
{
   $value=$('#'+relation).val();
  
  if($value=="Choose Relation" || $value=="" )
   {
    setalert(relation+'span',$relationerr);
     return false;
    }
  else{
            clearalert(relation+'span');
            return true;
   }


}
//==================Validate relation==========================
//==================Validate title==========================
function chkselect(title)
{
   $value=$('#'+title).val();
  
  if($value=="Choose Title" || $value=="" )
   {
    setalert(title+'span',$titleerr);
     return false;
    }
  else{
            clearalert(title+'span');
            return true;
   }


}
//==================Validate title==========================


//==================Validate province==========================
function chkselect(province)
{
   $value=$('#'+province).val();
  
  if($value=="Choose Province" || $value=="" )
   {
    setalert(province+'span',$provinceerr);
     return false;
    }
  else{
            clearalert(province+'span');
            return true;
   }


}
//==================Validate province==========================


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