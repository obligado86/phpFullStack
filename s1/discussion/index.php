<?php require_once "./code.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s01 php basic and selection control</title>
</head>
<body>
	<!-- <h1>hello world</h1> -->
	<h1>echoing values</h1>
	<p> <?php echo 'good day $name! your email is $email';?></p>
	<p> <?php echo 'good day ' . $name .'!'.' your email is '.$email.'.';?></p>
	<p> <?php echo "good day $name. your email is $email.";?></p>
	<p> <?php echo PI;?></p>
	<p> <?php echo $headCount;?></p>
	<h2>data types</h2>
	<h5>string</h5>
	<p><?php echo $address;?></p>

	<h5>integers/ float</h5>
	<p><?php echo $age;?></p>
	<p><?php echo $grade;?></p>

	<p>boolean</p>
	<p><?php echo "has tavel abroad: $hasTravel";?></p>
	<p><?php echo "spouse: $spouse";?></p>
	<p><?php echo gettype($hasTravel);?></p>
	
	<p><?php echo gettype($spouse);?></p>
	<p><?php echo var_dump($grade);?></p>
	<p><?php echo var_dump($state);?></p>

	<h3>arrays</h3>
	<p><?php var_dump($grades);?></p>
	<p><?php print_r($personObj);?></p>
	<p><?php echo $personObj->address->country;?></p>

	<h3>operators</h3>

	<p>X: <?php echo $x;?></p>
	<p>Y: <?php echo $y;?></p>
	<p>is legal age: <?php echo var_dump($isLegalAge);?></p>

	<h2>arithmetic operator</h2>
	<p>Sum: <?php echo $x + $y;?></p>
	<p>diff: <?php echo $x - $y;?></p>
	<p>prod: <?php echo $x * $y;?></p>
	<p>qou: <?php echo $x / $y;?></p>
	<p>mod: <?php echo $x % $y;?></p>

	<h2>equality operator</h2>
	<p>loose equality: <?php echo var_dump($x == '500');?></p>
	<p>strict equality: <?php echo var_dump($x === '500');?></p>
	<p>loose Inequality: <?php echo var_dump($x != '500');?></p>
	<p>strict Inequality: <?php echo var_dump($x !== '500');?></p>

	<h2>gte/lte</h2>
	<p>is lesser: <?php echo var_dump($x < $y);?></p>
	<p>is grater: <?php echo var_dump($x > $y);?></p>
	<p>is lesser or equal: <?php echo var_dump($x <= $y);?></p>
	<p>is grater or equal: <?php echo var_dump($x >= $y);?></p>

	<h2>logical operator</h2>
	<p>are all required met: <?php echo var_dump($isLegalAge && $isRegister);?></p>
	<p>are some required met: <?php echo var_dump($isLegalAge || $isRegister);?></p>
	<p>are some required not met: <?php echo var_dump(!$isLegalAge && !$isRegister);?></p>

	<h2>functions:</h2>
	<p>full name: <?php echo getFullName('john', "d", "smith");?></p>

	<h2>selection control structure:</h2>
	<p>if/elseif/else: <?php echo determineTyphoonIntensity(12);?></p>

	<h2>ternary sample:</h2>
	<p>is 55 under age: <?php var_dump(isUnderAge(55));?></p>
	<p>is 16 under age: <?php var_dump(isUnderAge(16));?></p>

	<h2>switch sample:</h2>
	<p>computer user: <?php echo determineComputerUser(4);?></p>

	<h2>try catch finally sample:</h2>
	<p><?php greeting(25);?></p>
</body>
</html>