<html>
	<head>
		<title>Database Student</title>
		<link rel="stylesheet" href="./css/styles.css">
		<link rel="stylesheet" href="./css/CssTable.css">
	</head>
	<body>
		<div class="maintable">
		
			<div class="tableOutput grid-item">
			<button class="button1DB" onclick="hide1()">Show</button>
				<div id="tableHide">
					<table>
						<caption>TABLE OF STUDENTS</caption>
						<tr>
							<th>Name</th>
							<th>Surname</th>
							<th>Date of birth</th>
							<th>Group</th>
						</tr>
						<?php
							include("./php/join_DB.php");
							include("./php/show_students.php");
						?>
					</table>
				</div>
			</div>
			
			<div class="tableOutput2 grid-item">
				<button class="button1DB" onclick="hide2()">Hide</button>
				<div id="tableHide2">
					<h1>Information about courses: </h1>
					
					<?php
						include("./php/join_DB.php");
						include("./php/show_courses.php");
					?>
				</div>
			</div>
			
			<div class="tableOutput3 grid-item">
				<button class="button1DB" onclick="hide3()">Show</button>
				<div id="tableHide3">
					<h1>Information about groups: </h1>
					<ul">
						<?php
							include("./php/join_DB.php");
							include("./php/show_groups.php");
						?>
					</ul>
				</div>
			</div>
			
			<div class="tableOutput4 grid-item">
				<button class="button1DB" onclick="hide4()">Show</button>
				<div id="tableHide4">
					<h1>Information about points: </h1>
					<ol>
						<?php
							include("./php/join_DB.php");
							include("./php/show_points.php");
						?>
					</ol>
				</div>
			</div>
			
			<div class="buttonTable grid-item">
				<form action = "./php/checkData.php" method = "POST">
					<h1>Enter data into DB "courses"</h1>
					<input type="CourseName" name="CourseName" id="CourseName" placeholder="CourseName" required>
					<input type="Lecturer" name="Lecturer" id="Lecturer" placeholder="Lecturer" required>
						<br>
					<button class="button1Table" type="sumbit">
						Send data
					</button>
				
				</form>
			</div>
			
			<div class="returnTable grid-item">
				<a href="main.php">
					<button class="button1DB">
						Rerutn to the main
					</button>
				</a>
			</div>
			
		</div>
	</body>
</html>
<script src="./js/showHideButtons.js"></script>