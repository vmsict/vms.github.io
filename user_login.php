<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>E-Time Table IKED</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <section>
  <span1><center><img src="images/IKED logo.png" width="90" height="110"></center></span1>
  <h1>E-Time Table Portal Login</h1>
  <form name="login" method="post" action="checklogin.php">
  <input placeholder='User ID' type='varchar' name="user_id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'user_id'" >
   <input placeholder='Password' type='Password' name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'">
 
  <button>LOGIN</button>
  
   </form>
  <font size=2 face="Trebuchet MS, Arial, Helvetica, sans-serif">Please type your Username dan Password</font></br>
  <font size=2 face="Trebuchet MS, Arial, Helvetica, sans-serif">First Time Login ? <a href="dashboard/newregister.php" target="_top">Click Here</a></font>
  <h6>&nbsp;</h6>
  
 <center>
 <table align="center" border="0">
 <tr><td>
 <!--<a href="login_page.php"><img src="images/back.png" title="back" width="50" height="50"></a>-->
 <a href="index.php"><img src="images/home.png" title="home" width="50" height="50"></a>
 </td></tr>
 </table>
 </center> 
 </section>
 
</body>

</html>