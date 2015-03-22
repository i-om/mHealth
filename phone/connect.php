<?php
 session_start();
 include_once("util.php");

 $connect=connect();
 $uname=addslashes($_POST['username']);
 $pword=addslashes($_POST['password']);

  $query = "SELECT `username` , `password`
FROM `users`
WHERE BINARY `username` = '".$uname."'
AND BINARY `password` = '".$pword."'";
execQuery($connect,$query);
if (mysqli_affected_rows($connect)==0)
{
       header("location: user.html?error_msg=1");
}

else
{
$_SESSION["login"]=1;
  header("location: first.html?login_status=".$_SESSION["login"]);
}
?>