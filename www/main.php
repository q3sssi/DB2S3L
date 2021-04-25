<html>
	<head>
		<title>lab1</title>
		<link rel="stylesheet" href="./css/styles.css">
	</head>
	
	<body>
		<div class="main">
		
			<div class="image grid-item">
				<img src="https://www.gcsnc.com/cms/lib/NC01910393/Centricity/Domain/797/Students.jpg"></img>
			</div>
			
			<div class="info grid-item">
				It is a database containing information about students and their points. There are 4 tables:
				<UL>
					<LI><b>Students</b> - information about students;</LI>
					<LI><b>Groups</b> - information about study groups;</LI>
					<LI><b>Course</b> - information about courses;</LI>
					<LI><b>Point</b> - information about points.</LI>
				</UL>
			</div>
			
			<div class="buttondiv grid-item">
				<a href="http://localhost/phpmyadmin">
					<button class="button1DB">
						DB
					</button>
				</a>
				
				<a href="./table.php">
					<button class="button1Table">
						Table
					</button>
				</a>
			</div>
			
			<div class="form1 grid-item">
				Join a bodybuilding club:
				<form action = "answer.php" method = "POST">
					<p>
						Enter your name: <input name="Name" type="text" autofocus required pattern="[A-Za-zА-Яа-яЁё]{2,50}">
					<p>
						Enter your date of birth:
					<select class="select1year" type="int">
						<?php
							include('./php/option.php');
						?>
					</select>
					<p>
						Have you done bodybuilding before? <input name="BB" type="checkbox" value="on1">
					<p>
						<input class="button1send" type="submit" value="Send">
				</form>
			</div>
				
		</div>
	</body>
</html>