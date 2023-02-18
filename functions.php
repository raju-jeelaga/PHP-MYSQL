<!doctype html>

<html>

	<head>
		<title>Functions</title>
		<meta charset="utf-8">	

		<style>
		.error {
			color: red;
		}
		</style>
		
	</head>

<body>
	<h1>Basic Function</h1>
	<?php
	 function display_txt() {
	 	echo "Hello World";
	}
	display_txt();
	echo "<hr>";
	?>

	<h1>FUNCTION ARGUMENTS</h1>
	<?php 
		function ebiz_emp($persons){
			echo "$persons<br>";
		}
		ebiz_emp("Raju"); 
		echo "<br>";
		ebiz_emp("Suresh");
	?>

</body>
</html>