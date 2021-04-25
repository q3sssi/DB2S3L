<?php
	// Цикл по содержимому $res //
	// Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array //
	$SQL_query = "SELECT * FROM students";
	// Выполняем запрос (в переменную $res записывается результат) //
	$res = mysqli_query($link, $SQL_query);
	
	while($row = mysqli_fetch_array($res)) 
	{
		// элементы массива $row имеют индексы, совпадающие с названиями столюцов в таблице. Пользуясь ими, заполняем содержимое таблицы //
		echo "<tr> <td>" . $row['Name'] . "</td> <td>" . $row['Surname'] . "</td> <td>"
		. $row['DoB'] . "</td> <td>" . $row['GroupID'] . "</td> </tr>";
	}
	// Закрываем соединение с БД //
	mysqli_close($link);