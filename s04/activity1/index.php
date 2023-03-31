<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s04 activity</title>
</head>
<body>
	<?php session_start();?>
	<?php if (!isset($_SESSION['user'])):?>
		<form method="POST" action="./server.php">
			<input type="hidden" name="action" value="login">
			<label for="email">Email:</label>
			<input type="email" name="email" required>
			<label for="password">Password:</label>
			<input type="password" name="password" required>
			<button type="submit">Login</button>
		</form>
	<?php elseif (isset($_SESSION['user'])):?>
		<form method="POST" action="./server.php">
			<p>Hello. <?php echo $_SESSION['email'];?></p>
			<input type="hidden" name="action" value="logout">
			<button type="submit">Logout</button>
		</form>
	<?php endif;?>
</body>
</html>