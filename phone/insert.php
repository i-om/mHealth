<?php
session_start();
if(!isset($_SESSION["login"]))
header("location:user.html");
else
{
include_once("util.php");
$connect=connect();

$doctor=addslashes($_POST['doctorname']);
$clinicno=addslashes($_POST['clinicnumber']);
$clinic=addslashes($_POST['clinicname']);
$special=addslashes($_POST['specialization']);
$address=addslashes($_POST['address']);
$landmark=addslashes($_POST['landmark']);
$pincode=addslashes($_POST['pincode']);
$city=addslashes($_POST['city']);
$state=addslashes($_POST['state']);
$country=addslashes($_POST['country']);
$mobile=addslashes($_POST['mobileno']);
$email=addslashes($_POST['email']);
$clinictime=addslashes($_POST['clinictime']);

 $query1 ="INSERT INTO `login`.`maharashtra` (
`Clinic_Hospital_Name` ,
`Doctor_Name` ,
`Specialization` ,
`Address` ,
`Landmark` ,
`Pincode` ,
`Country` ,
`City` ,
`Clinic_Number` ,
`Mobile_Number` ,
`Email` ,
`Clinic_Timings` ,
`State`
)
VALUES (
'$clinic', '$doctor', '$special', '$address', '$landmark', '$pincode', '$country', '$city', '$clinicno', '$mobile', '$email', '$clinictime', '$state')";

execQuery($connect,$query1);

if ( !mysqli_affected_rows($connect)==0)
{
     $insertionid = mysqli_insert_id($connect);

 $query2="SELECT `Clinic_Hospital_Name` , `Doctor_Name` , `Specialization` , `Address` , `Landmark` , `Pincode` , `Country` , `City` , `Clinic_Number` , `Mobile_Number` , `Email` , `Clinic_Timings` , `State`
FROM `maharashtra` WHERE `id` = '$insertionid' ";


$result=execQuery($connect,$query2);

$retrieve_array=array();

while($data=mysqli_fetch_array($result))
{
   $retrieve_array[]=$data;
}

 foreach($retrieve_array as $rowNum => $data)
 {
$clinic1=$data[0];
$doctor1=$data[1];
$special1=$data[2];
$address1=$data[3];
$landmark1=$data[4];
$pincode1=$data[5];
$country1=$data[6];
$city1=$data[7];
$clinicno1=$data[8];
$mobile1=$data[9];
$email1=$data[10];
$clinictime1=$data[11];
$state1=$data[12];
}
}
include_once("welcome.php");
}
?>