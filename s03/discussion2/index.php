<?php require_once "./code.php"?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s03 access modifiers and encapsulation</title>
</head>
<body>
	<h1>Access modifiers</h1>

	<h2>building variables</h2>
	<p><?php print_r($building);?></p>
	<p><?php //echo $building->name;?></p>

	<h3>Condominuim variables</h3>
	<p><?php //print_r($condo);?></p>
	<p><?php //echo $condo->name;?></p>

	<h3>Encapsulation</h3>
	<h2>condo variables</h2>
	<p><?php print_r($condo);?></p>
	<p>the name of condo is <?php echo $condo->getName();?></p>
	<?php $condo->setName('Enzo Tower');?>
	<p>the name of condo is <?php echo $condo->getName();?></p>
</body>
