<?php 

	include_once('class.database.php');
	
	$db_connection = new dbConnection();
    $link = $db_connection->connect(); 
	$semester = $_SESSION['semester'];
	$course_code = $_SESSION['course_code'];
	$user_id= $_SESSION['user_id'];
	
	
		   // It loads the subject dynamically on the table sheet by selecting faculty, subject and subject user_id..
		   if($_SESSION['user_id'])
			{
			   $query = $link->query("
					SELECT f.faculty_name, s.subject_code, s.subject_name
					FROM course c JOIN faculty f ON c.faculty_id =f.faculty_id JOIN subject s ON c.subject_id =s.subject_id WHERE course_name =  '$course_code' AND semester ='$semester' AND c.user_id='$user_id'");
			   
			   $count = $query->rowCount();	
			   $query->setFetchMode(PDO::FETCH_ASSOC);
				
				$i =0;
				
				while($result = $query->fetch()){
					
					$array = array("a","b","c","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
					if($i<$count){
						   echo 
								"<div class= 'Table'>".
								"<div class='Row'>".
									"<div class='sublist' id='".$array[$i]."'>".$result['subject_code']."</div>".
									"<div class='sublist'>".$result['subject_name']." "."( ".$result['faculty_name']." )"."</div>".
								"</div></div>";
																
						
					}
					$i++;
				}
			}
	   
   

?>


