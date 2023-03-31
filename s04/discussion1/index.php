<?php


//$_GEt and $_POST are super global variables in php
//these let you retreive information sent by client

// "super global" variable allows data to persist between pages or a single session
// it is always accessible regardless the scope.

//both $_GET and $_POST create an accociative array

//key represent the name of the form control input element
// value represents the user input

/*var_dump($_GET);
var_dump($_POST);*/

$tasks = ["Get git", "bake html", "eat css", "learn php"];



if(isset($_GET["index"])){
	$indexGet = $_GET["index"];
	echo "the retrieve task form GET is $tasks[$indexGet] <br/>";
}

if(isset($_POST["index"])){
	$indexPost = $_POST["index"];
	echo "the retrieve task form POST is $tasks[$indexPost] <br/>";
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s04 client server communication (GET and POST)</title>
</head>
<body>
	<h1>Task index from Get</h1>
	<!-- get method is used for none sensitive data or for sorting/ filtering information -->
	<form method="GET">
		<select name="index" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<button type="submit">GET</button>
		<!-- <label>Email:</label>
		<input type="email" name="email"><br>
		<label>Password:</label>
		<input type="password" name="password"><br>
		<button type="submit">Login</button> -->
	</form>



	<h1>Task index from Post</h1>
	<!-- post method is used for sending sensitive information -->
	<form method="POST">
		<select name="index" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<button type="submit">POST</button>
	</form>
</body>
</html>