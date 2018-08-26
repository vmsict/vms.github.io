<?php
	include_once('class.database.php');
	
	class ManageUsers{
		public $link;
		
		function __construct(){
			$db_connection = new dbConnection();
			$this->link = $db_connection->connect();
			return $this->link;
		}
		
		function registerUsers($password, $ip_address, $date, $time, $user_id, $email, $uname, $fullname, $ic_no, $phone){
			$query = $this->link->prepare("INSERT INTO users (password,ip_address,date,time,user_id,email,uname,fullname,ic_no,phone) VALUES(?,?,?,?,?,?,?,?,?,?)");
			$values = array ($password, $ip_address, $date, $time, $user_id, $email, $uname, $fullname, $ic_no, $phone);
			$query->execute($values);
			$count = $query->rowCount();
			return $count;
		}
		
		function LoginUsers($user_id, $password){
			$query = $this->link->query("SELECT * FROM users WHERE user_id='$user_id' AND password='$password'");
			$rowCount = $query->rowCount();
			return $rowCount;
		}
		
		function GetUserInfo($user_id){
			$query = $this->link->query("SELECT * FROM users WHERE user_id = '$user_id'");
			$rowCount = $query->rowCount();
			if($rowCount ==1)
			{
				$result = $query->fetchAll();
				return $result;
			}
			else
			{
				return $rowCount;
			}
		}
		
	}
	
?>