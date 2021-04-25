<?php
	// Цикл по содержимому $res //
	// Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array //
	$SQL_query = "SELECT * FROM groups";
	// Выполняем запрос (в переменную $res записывается результат) //
	$res = mysqli_query($link, $SQL_query);
	
	while($row = mysqli_fetch_array($res)) 
	{
		// элементы массива $row имеют индексы, совпадающие с названиями столюцов в таблице. Пользуясь ими, заполняем содержимое таблицы //
		echo "<li>Group: <b>" . $row['GroupID'] . "</b>, Program: <b>" . $row['Program'] . "</b>, Mentor: <b>" . $row['Mentor'] .  "</b>.</li><hr>";
	}
	// Закрываем соединение с БД //
	mysqli_close($link);