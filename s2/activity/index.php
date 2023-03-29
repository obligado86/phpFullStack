<?php require_once "./code.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>so2 activity</title>
</head>
<body>
	<h1>Devisible by 5</h1>
	<?php printDevisibleOfFive();?>

	<h1>Array manipulation</h1>
	<?php array_push($student, 'john Smith');?>
	<p><?php print_r($student) ;?></p>

	<?php echo count($student);?>
	<?php array_push($student, 'jane Smith');?>
	<p><?php print_r($student) ;?></p>
	<?php echo count($student);?>
	<?php array_shift($student);?>
	<p><?php print_r($student) ;?></p>
	<?php echo count($student);?>
</body>
</html>