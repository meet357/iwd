
<html>
<head>
	<title> Result</title>
</head>
<body>
	<h1> Result</h1>
	<form method="post" >

		<label for="sub1">Enter marks for subject 1:</label>
		<input type="number" name="sub1" id="sub1" required><br>
		<label for="sub2">Enter marks for subject 2:</label>
		<input type="number" name="sub2" id="sub2" required><br>
		<label for="sub3">Enter marks for subject 3:</label>
		<input type="number" name="sub3" id="sub3" required><br>
		<label for="sub4">Enter marks for subject 4:</label>
		<input type="number" name="sub4"id="sub4" required><br>
		//<input type="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sub1 = $_POST["sub1"];
		$sub2 = $_POST["sub2"];
		$sub3 = $_POST["sub3"];
		$sub4 = $_POST["sub4"];

		

		echo "<h2>Result:</h2>";
		
		
		if ($sub1 >= 85) {
			echo "<p>GTU Grade: Pass</p>";
		}/* elseif ($sub2 >= 75) {
			echo "<p>GTU Grade: Pass</p>";
		//} elseif ($sub3 >= 65) {
			echo "<p>GTU Grade: pass</p>";
		//}  elseif ($sub4>= 35) {
			echo "<p>GTU Grade: Pass</p>";
		} */


                     else {
			echo "<p>GTU Grade: FF (FAIL)</p>";
		}
	}
	?>
</body>
</html>
