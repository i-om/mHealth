<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html>
<head>
<title>Final Page</title>
<script type="text/javascript" src="jquery/jquery-1.4.4.js"></script>
<link rel="stylesheet" href="CSS/phone.css" type="text/css" />
<script type="text/javascript">
$(document).ready(function()
  {
    srchButton();
  });
  </script>


  </head>
<body>
<div id="idmaindiv" class="body">
<div id="idmainbodydiv" class="classMainBody">
        <div id="idheaderdiv" class="classHeader"  align="center">
            Phone Gap Application
            <img src="images/logo.jpg" align="right" height="auto"/>
        </div>
        <div id="idbodydiv" class="classBody"  align="center">
<div id="idlogoutdiv" style="text-align:right">
<a href="http://192.168.1.12/Wel/Welcome/logout.php" style="color:black"><u>Logout</u></a>
</div>
<form method="POST" id="idfinalform" class="classfinalform">
<?php
   if(isset($clinicno1))
     {
?>
<table id="identrytable" align="center">
<tr>
<td>
<b>Dcotor Name :</b>
</td>
<td>
<?php echo $doctor1; ?>
</td>
<td>
<b>Clinic Number :</b>
</td>
<td>
<?php echo $clinicno1; ?>
</td>
</tr>
<tr>
<td>
<b>Clinic Name :</b>
</td>
<td>
<?php echo $clinic1; ?>
</td>
<td>
<b>Specialization :</b>
</td>
<td>
<?php echo $special1; ?>
</td>
</tr>
<tr>
<td>
<b>Address :</b>
</td>
<td>
<?php echo $address1; ?>
</td>
<td>
<b>Landmark :</b>
</td>
<td>
<?php echo $landmark1; ?>
</td>
</tr>
<tr>
<td>
<b>Pincode :</b>
</td>
<td>
<?php echo $pincode1; ?>
</td>
<td>
<b>City :</b>
</td>
<td>
<?php echo $city1; ?>
</td>
</tr>
<tr>
<td>
<b>State :</b>
</td>
<td>
<?php echo $state1; ?>
</td>
<td>
<b>Country :</b>
</td>
<td>
<?php echo $country1; ?>
</td>
</tr>
<tr>
<td>
<b>Mobile Number :</b>
</td>
<td>
<?php echo $mobile1; ?>
</td>
<td>
<b>E-mail :</b>
</td>
<td>
<?php echo $email1; ?>
</td>
</tr>
<tr>
<td>
<b>Clinic Timings :</b>
</td>
<td colspan=3>
<?php echo $clinictime1; ?>
</td>
</tr>
</table>
<?php
}
else if(isset($doctor2))
{
  ?>
<div align="left">
  <?php
echo ("Total results found : ".count($doctor2));
?>
</div>
<hr/>
<?php
  if(count($doctor2)>0)
{
 if(count($doctor2)>5)
 {
   $cc = 5;
   }
   else
   {
     $cc = count($doctor2);
   }
for($c=0;$c<$cc;$c++)
{
?>
<div align="left">
<?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$cx = $c+1;
?>
</div>
<table id="idsearchtable" align="center">
<tr>
<td>
<b>Doctor Name :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $doctor2[$c]); ?>
</td>
<td>
<b>Clinic Number :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $clinicno2[$c]); ?>
</td>
</tr>
<tr>
<td>
<b>Clinic Name :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $clinic2[$c]); ?>
</td>
<td>
<b>Specialization :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $special2[$c]); ?>
</td>
</tr>
<tr>
<td>
<b>Address :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $address2[$c]); ?>
</td>
<td>
<b>Landmark :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $landmark2[$c]); ?>
</td>
</tr>
<tr>
<td>
<b>Pincode :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $pincode2[$c]); ?>
</td>
<td>
<b>City :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $city2[$c]); ?>
</td>
</tr>
<tr>
<td>
<b>State :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $state2[$c]); ?>
</td>
<td>
<b>Country :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $country2[$c]); ?>
</td>
</tr>
<tr>
<td>
<b>Mobile Number :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $mobile2[$c]); ?>
</td>
<td>
<b>Email :</b>
</td>
<td>
<?php echo preg_replace($pattern, $replacement, $email2[$c]); ?>
</td>
</tr>
<tr>
<td>
<b>Clinic Timings :</b>
</td>
<td colspan="3">
<?php echo preg_replace($pattern, $replacement, $clinictime2[$c]); ?>
</td>
</tr>
</table>
<hr/>
<?php
}
}

if(count($doctor2)==0)
{
  echo "No entry found!";
}
}
?>
<hr/>
</form>
<form action="http://192.168.1.12/Wel/Welcome/search.php" method="POST" id="idsearchform" class="classsearchform" onsubmit="return  $('#idsearchbtn').click();">
<div align="left"><a href="adddoc.html?login_status=1" style="color:black ; font-weight:bold ; font-size:16px" >Add New Doctor</a></div>
<h2 align="center">SEARCH DOCTOR</h2>
<br/>
<div id="idsearchtxtdiv"  class="classsearchtxtdiv" align="center">
<input type="text" name="search" id="idsearchtxt" class="classsearchtxt" />
</div>
<br/>
<div id="idsearchbtndiv" class="classsearchbtndiv" align="center">
<input type="submit" name="searchbtn" value="Search" id="idsearchbtn" class="classsearchbtn" />
</div>
</form>
</div>
 <div id="idfooterdiv" class="classFooter"  align="center">
            Copyright &copy 2011 <b><a href=http://www.plus91.in target=_blank >Plus91</a></b>. All Rights Reserved.
        </div>
    </div>
</div>
</body>
</html>