<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

  <title>E-Time Table IKED</title>

</head>

<body>
   <!--<table align="right" border="0">
<tr>
<td align="right">You logged in as <b><?php echo $_SESSION['Admin_ID']?></b>,&nbsp;</td>

</tr>
</table>-->
  <section class="container">
  
  <div class="wrapper">
  <span><center><img src="images/IKED logo.png" width="90" height="110"></center></span>
  
  <h6><p>E-Time Table Portal Sistem</p></h6>
  <font size=2 face="Trebuchet MS, Arial, Helvetica, sans-serif">Institut Komunikasi Dan Elektronik Tentera Darat</font>
  </br>
  <br>
  <!--<p align="center"><a href="admin_login.php">Administrator</a></p>-->
  <!--<p align="center"><a href="user_login.php">User</a></p>-->
  <p align="center"><a href="user_login.php">Login</a></p>
  </div> 

 <center>
 <table align="center" border="0"></br>
 <tr>
 <td>
 <a href="index.php"><img src="images/home.png" title="home" width="50" height="50"></a>
 </td>
 </tr>
 </table>
   
 </center> 

</div>
</body>

</html>