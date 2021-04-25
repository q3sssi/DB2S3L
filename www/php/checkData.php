<?php
	$CourseName = filter_var(trim($_POST['CourseName']), FILTER_SANITIZE_STRING);
	$Lecturer = filter_var(trim($_POST['Lecturer']), FILTER_SANITIZE_STRING);
	/*
	 if(mb_strlen($CourseName) < 1 || mb_strlen($email) > 90) 
		{
			echo "Недопустимая длина названия курса";
			exit();
		} 
	else if(mb_strlen(Lecturer) < 1 || mb_strlen($pass) > 50) 
		{
			echo "Недопустимая длина имени";
			exit();
		}
	*/
		
	$mysql = new mysqli('localhost', 'root', '', 'lab1');
	$mysql->query("INSERT INTO `course` (`CourseName`, `Lecturer`) VALUES('$CourseName', '$Lecturer')");
	$mysql->close();
	header('Location: /www/table.php');
?>
