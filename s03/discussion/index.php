<?php require_once "./code.php"?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s03: classes and objects</title>
</head>
<body>
	<h1>Object from variables</h1>
	<p><?php var_dump($buildingObj);?></p>
	<p><?php echo $buildingObj->name;?></p>

	<h3>object created using building class</h3>
	<p><?php var_dump($building);?></p>
	<p><?php echo $building->name?></p>
	<p><?php echo $building->printName()?></p>

	<h3>modified instantiated odject</h3>
	<?php $building->name ='GMA network';?>
	<p><?php var_dump($building->name);?></p>

	<h3>inheritance (condo)</h3>
	<p><?php var_dump($condo);?></p>
	<p><?php echo $condo->name;?></p>
	<p><?php echo $condo->floor;?></p>

	<h3>polymorphisym</h3>
	<p><?php echo $condo->printName();?></p>
</body>
</html>