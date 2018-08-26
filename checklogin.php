<?php
session_start();

$host="localhost";
$user_id="root";
$password="";
$db_name="timetable";
$tbl_name="users";
$tbl_name2="login";



mysql_connect("$localhost","$user_id","$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$user_id=strtoupper($_POST['user_id']);
$password=strtoupper($_POST['password']);



$sql="SELECT user_id,password FROM $tbl_name  WHERE user_id='$user_id' and password='$password'";
$result=mysql_query($sql);

$sql2="SELECT user_id,password FROM $tbl_name2  WHERE user_id='$user_id' and password='$password'";
$result2=mysql_query($sql2);



$count =mysql_num_rows($result);
$count2=mysql_num_rows($result2);

if($count==1)
{
session_start();
$_SESSION['user_id']="$user_id";
$_SESSION['password']="$password"; 
header("location:dashboard\dashboard_user.php");
 }
else if($count2==1)
{
session_start();
$_SESSION['user_id']="$user_id";
$_SESSION['password']="$password"; 
header("location:dashboard\dashboard.php");
}
else
{
echo ("<script type=\"text/javascript\">");
echo ("alert ('Wrong User ID and Password..Try again!');");
echo ("window.location=\"user_login.php\"");
echo ("</script>");
}


?>
<title>E-Time Table Portal Sistem</title>