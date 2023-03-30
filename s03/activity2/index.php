<?php require_once './code.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>so3 activity</title>
</head>
<body>
	<h1>Building</h1>
	
	<p><?php echo $building->printName();?></p>
	
	<p>The <?php echo $building->getName();?> has <?php echo $building->getFloor();?> floors</p>
	
	<p>The <?php echo $building->getName();?> is located at <?php echo $building->getAddress();?>.</p>
	<?php $building->setName('Caswynn Complex');?>
	<p>The name of the building has changed to <?php echo $building->getName();?>.</p>

	<h1>Condominuim</h1>
	<p><?php echo $condo->printName();?></p>
	
	<p>The <?php echo $condo->getName();?> has <?php echo $condo->getFloor();?> floors.</p>
	
	<p>The <?php echo $condo->getName();?> Condo is located at <?php echo $condo->getAddress();?>.</p>
	<?php $condo->setName('Enzo Tower');?>
	<p>The name of the condominium has changed to <?php echo $condo->getName();?>.</p>

</body>
</html>