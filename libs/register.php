<?php
	session_start();
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/timetable/class.ManageUsers.php";
    include_once($path);
	
	$users = new ManageUsers();
	
	if(isset($_POST['register']))
	{
		$user_id = $_POST['user_id'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$fullname = $_POST['fullname'];
		$ic_no = $_POST['ic_no'];
		$phone = $_POST['phone'];
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$date = date("Y-m-d");
		$time = date("H:i:s");
		
		$check_availability = $users->GetUserInfo($user_id);
		if($check_availability ==0)
		{
			$register_user = $users->registerUsers($password, $ip_address, $date, $time, $user_id, $email, $uname, $fullname, $ic_no, $phone);
			if($register_user == 1)
			{
				$make_sessions = $users->GetUserInfo($user_id);
				foreach($make_sessions as $userSessions)
				{
					$_SESSION['user_id'] = $userSessions['user_id'];
					if(isset($_SESSION['user_id']))
					{
						header("location: ../dashboard_user.php");
					}
				}
			}
		}
		else
		{
			echo $error = "Username Already taken";
		}
		
	}
?>