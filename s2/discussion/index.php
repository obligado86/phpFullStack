<?php require_once "./code.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s02 repitition contorl structures and array manipulation</title>
</head>
<body>
	<h1>Repition control structures</h1>
	<h2>while loop</h2>
	<?php whileLoop();?>
	<h2>do while loop</h2>
	<?php doWhileLoop();?>

	<h2>for loop</h2>
	<?php forLoop();?>

	<h2>continue and break</h2>
	<?php modifiedForLoop();?>
	<h2>activity</h2>
	<?php whileLoopActivity();?>

	<h2>array manipulation</h2>
	<h4>types:</h4>
	<ul>
		<?php foreach($computerBrands as $brand) { ?>
		<li><?= $brand;?></li>
		<?php }?>
	</ul>

	<h4>associative:</h4>
	<ul>
		<?php foreach($gradePeriods as $period => $grade) { ?>
		<li>Grade in <?= $period?> is <?=$grade;?></li>
		<?php }?>
	</ul>

	<h4>two/multi-dimentional array:</h4>
	<ul>
		<?php foreach($heroes as $team) { foreach($team as $member){?>
		<li><?= $member;?></li>
		<?php } }?>
	</ul>

	<h4>two/multi-dimentional array:</h4>
	<ul>
		<?php foreach($ironManPowers as $label => $powerGroup) { foreach($powerGroup as $power){?>
		<li><?= "$label: $power";?></li>
		<?php } }?>
	</ul>

	<h4>array function:</h4>

	<pre><?php print_r($computerBrands) ;?></pre>

	<h4>sorting ascending:</h4>

	<pre><?php print_r($sortedBrands) ;?></pre>
	<h4>sorting decending:</h4>

	<pre><?php print_r($reverseBrands) ;?></pre>

	<h4>append:</h4>
	<?php array_push($computerBrands, 'apple') ;?>

	<pre><?php print_r($computerBrands) ;?></pre>

	<?php array_unshift($computerBrands, 'dell') ;?>

	<pre><?php print_r($computerBrands) ;?></pre>

	<h4>remove:</h4>
	<?php array_pop($computerBrands) ;?>
	<pre><?php print_r($computerBrands) ;?></pre>

	<h4>remove the start:</h4>
	<?php array_shift($computerBrands) ;?>
	<pre><?php print_r($computerBrands) ;?></pre>

	<h4>element count:</h4>
	<pre><?php echo count($computerBrands) ;?></pre>

	<h4>in array: uses to search a specific element</h4>
	<pre><?php echo searchBrands('hp', $computerBrands) ;?></pre>

	<h4>array_reverse: returns the array in reverse</h4>
	<pre><?php print_r($reverseGradePeriods) ;?></pre>
</body>
</html>