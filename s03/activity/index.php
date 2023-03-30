<?php require_once './code.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>so3 activity</title>
</head>
<body>
	<h1>Person</h1>
	<p><?php echo $person1->printName();?></p>
	<h1>Developer</h1>
	<p><?php echo $person2->printName();?></p>
	<h1>Engineer</h1>
	<p><?php echo $person3->printName();?></p>
</body>
</html>