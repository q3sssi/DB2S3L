<?php
	// Цикл по содержимому $res //
	// Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array //
	$SQL_query = "SELECT * FROM points, students, course WHERE points.StID = students.StID AND points.CourseID = course.CourseID order by students.name";
	// Выполняем запрос (в переменную $res записывается результат) //
	$res = mysqli_query($link, $SQL_query);
	
	while($row = mysqli_fetch_array($res)) 
	{
		// элементы массива $row имеют индексы, совпадающие с названиями столюцов в таблице. Пользуясь ими, заполняем содержимое таблицы //
		echo "<li>Name: <b>" . $row['Name'] . "</b>, Surname: <b>" . $row['Surname'] . "</b>, Course: <b>" . $row['CourseName'] . "</b>, Point: <b>" . $row['Sum'] ."</b>.</li><hr>";
	}
	// Закрываем соединение с БД //
	mysqli_close($link);