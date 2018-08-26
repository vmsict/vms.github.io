<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/timetable/header.php";
   include_once($path);
?>
<body>
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>E-Time Table IKED</h3>
	  </div>
	</nav>
	
	<div id="content">
		<div id="form">
		<form class="form-horizontal" method="post" action="../register.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Register Here</legend>
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="uname">Collage Name</label>  
			  <div class="col-md-4">
			  <input id="uname" name="uname" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="fullname">Fullame</label>  
			  <div class="col-md-4">
			  <input id="fullname" name="fullname" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="ic_no">Identity No</label>  
			  <div class="col-md-4">
			  <input id="ic_no" name="ic_no" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="phone">Phone No</label>  
			  <div class="col-md-4">
			  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="user_id">Username</label>  
			  <div class="col-md-4">
			  <input id="user_id" name="user_id" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">Email</label>  
			  <div class="col-md-4">
			  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-4">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="register"></label>
			  <div class="col-md-4">
				<input type="submit" id="register" name="register" class="btn btn-success" value="Register">
			  </div>
			</div>

			</fieldset>
		</form>
		</div><br>
		<div id="login">
		Already Registered. <a href="../user_login.php">Login </a>
		</div><br><br>
	</div>
			
			


</body>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/timetable/footer.php";
   include_once($path);
?>