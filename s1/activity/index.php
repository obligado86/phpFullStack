<?php require_once "./code.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s1 activity</title>
</head>
<body>
	<h1>Full Address</h1>
	<p> <?php echo getFulladdress("Philippines", "Quezon City", "Metro Manila", "3f Caswynn Bldg., Timog Avenue");?></p>
	<p> <?php echo getFulladdress("Philippines", "Makati City", "Metro Manila", "3f Enzo Bldg., Buendia Avenue");?></p>

	<h1>Letter-Based Grading</h1>

	<p>87 is equivalent to <?php echo getLetterGrade(87);?></p>
	<p>94 is equivalent to <?php echo getLetterGrade(94);?></p>
	<p>74 is equivalent to <?php echo getLetterGrade(74);?></p>
</body>
</html>