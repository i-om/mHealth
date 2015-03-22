<?php
function connect()
{
   $connect=mysqli_connect('localhost','root','');
if (!$connect)
{
  $output = 'Unable to connect to the server';
  print $output;
  exit();
}
if (!mysqli_select_db($connect,'login'))
{
  $output ='Unable to locate the database';
  print $output;
  exit();
}
return $connect;
}

function execQuery($connect,$query)
{
   $result = mysqli_query($connect,$query);
if(!$result)
{
    $error=mysqli_error($connect);
    print $error;
    exit();
}
return $result;
}


?>