<?php
session_start();
if(!isset($_SESSION["login"]))
header("location:user.html");
else
{
include_once("util.php");
$connect=connect();

$search=addslashes($_POST['search']);
$query="SELECT `Clinic_Hospital_Name` , `Doctor_Name` , `Specialization` , `Address` , `Landmark` , `Pincode` , `Country` , `City` , `Clinic_Number` , `Mobile_Number` , `Email` , `Clinic_Timings` , `State`
FROM `maharashtra` WHERE `Clinic_Hospital_Name` LIKE '%$search%' OR
                  `Doctor_Name` LIKE '%$search%' OR
                  `Specialization` LIKE '%$search%' OR
                  `Address` LIKE '%$search%' OR
                  `Landmark` LIKE '%$search%' OR
                  `Pincode` LIKE '%$search%' OR
                  `Country` LIKE '%$search%' OR
                  `City` LIKE '%$search%' OR
                  `Clinic_Number` LIKE '%$search%' OR
                  `Mobile_Number` LIKE '%$search%' OR
                  `Email` LIKE '%$search%' OR
                  `Clinic_Timings` LIKE '%$search%' OR
                  `State` LIKE '%$search%'";

$result=execQuery($connect,$query);

$retrieve_array=array();
$clinic2=array();
$doctor2=array();
$special2=array();
$address2=array();
$landmark2=array();
$pincode2=array();
$country2=array();
$city2=array();
$clinicno2=array();
$mobile2=array();
$email2=array();
$clinictime2=array();
$state2=array();
while($data=mysqli_fetch_array($result))
{
    $retrieve_array[]=$data;
}
 foreach($retrieve_array as $data)
 {
$clinic2[]=$data['Clinic_Hospital_Name'];
$doctor2[]=$data['Doctor_Name'];
$special2[]=$data['Specialization'];
$address2[]=$data['Address'];
$landmark2[]=$data['Landmark'];
$pincode2[]=$data['Pincode'];
$country2[]=$data['Country'];
$city2[]=$data['City'];
$clinicno2[]=$data['Clinic_Number'];
$mobile2[]=$data['Mobile_Number'];
$email2[]=$data['Email'];
$clinictime2[]=$data['Clinic_Timings'];
$state2[]=$data['State'];
}
$pattern="/$search/i";
$replacement="<b><u>$search</u></b>";
include_once("welcome.php");
}
?>
