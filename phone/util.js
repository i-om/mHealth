function reDirect(urlmsg)
{
 $.extend({ getUrlVars: function()
        {
            var vars = [], hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for(var i = 0; i < hashes.length; i++)
            {
	            hash = hashes[i].split('=');
	            vars.push(hash[0]);
	            vars[hash[0]] = hash[1];
	        }
            return vars;
        },
        getUrlVar: function(name)
        {
            return $.getUrlVars()[name];
        }

        });
      if(urlmsg==1)
      {
	   error = $.getUrlVar('error_msg');
       if(error == 1)
       {
         alert("Wrong username or password!");
         return false;
       }
       }
       else if(urlmsg!=1)
       {
          error = $.getUrlVar('login_status');
       if(error != 1)
       {
         window.location.href="user.html";
            }
       }
}

function srchButton()
{
  $('#idsearchbtn').click(function()
      {
      if($('#idsearchtxt').val().length<=0)
         {
         alert("Please enter something to search!");
         return false;
         }

      });
}

function addButton()
{
  $('#idsubmit').click(function()
   {
     var alertdata = "";
     var flag = 0;
     if($('#iddoctorname').val() == '')
     {
       flag++;
       alertdata="Doctor name";
     }
     if($('#idclinicno').val() == '')
     {
       flag++;
       alertdata="Clinic Number";
     }
      if($('#idclinicname').val() == '')
     {
       flag++;
       alertdata="Clinic/Hospital Name";
     }
     if($('#idspecial').val() == '')
     {
       flag++;
       alertdata="Specialization";
     }
     if($('#idaddress').val() == '')
     {
       flag++;
       alertdata="Address";
     }
     if($('#idlandmark').val() == '')
     {
       flag++;
       alertdata="Landmark";
     }
     if($('#idpincode').val() == '')
     {
       flag++;
       alertdata="Pincode";
     }
     if($('#idcity').val() == '')
     {
       flag++;
       alertdata="City";
     }
     if($('#idstate').val() == '')
     {
       flag++;
       alertdata="State";
     }
     if($('#idcountry').val() == '')
     {
       flag++;
       alertdata="Country";
     }
       if($('#idmobileno').val() == '')
     {
       flag++;
       alertdata="Mobile Number";
     }
       if($('#idemail').val() == '')
     {
       flag++;
       alertdata="E-mail";
     }
      if($('#idclinictime').val() == '')
     {
       flag++;
       alertdata="Clinic Timings";
     }
     if(flag >= 2)
     {
       alert("Please enter all the fields!");
       return false;
     }
     else if(flag == 1)
     {
       alert("Please enter the "+alertdata+"!");
       return false;
     }
   if (isNaN($('#idmobileno').val()))
      {
        alert("Please enter the valid mobile number!");
        $('#idmobileno').val("");
        return false;
      }

var textdoctor=$('#iddoctorname').val();
if(!(textdoctor.match(regexp)))
{
alert("Please enter only alphabets for the doctor name!");
$('#iddoctorname').val("");
return false;
}

if($('#idpincode').val().length != 6)
     {
       alert("Please enter valid 6 digit pincode number!");
       $('#idpincode').val("");
       return false;
     }
else
{
  if(isNaN($('#idpincode').val()))
  {
       alert("Please enter valid 6 digit pincode number!");
       $('#idpincode').val("");
       return false;
  }
}
   }  );
}