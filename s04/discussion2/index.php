<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>s04 client server communication (basic todo list</title>
</head>
<body>
	<!-- start th session and must be the very first thing to your documents before the html tags -->
	<?php session_start();?>

	<h3>add task</h3>

	<form method="POST" action="./server.php">
		<!-- this is to identify the action or type of request sent by the user -->
		<input type="hidden" name="action" value="add">
		Description: <input type="text" name="description" required>
		<button type="submit">add</button>
	</form>

	<h3>Task list</h3>
	<?php if(isset($_SESSION['tasks'])): ?>
		 	<?php foreach($_SESSION['tasks'] as $id => $task): ?>
			<div>
				<!-- updateing the task -->
				<form method="POST" action="./server.php" style="display: inline-block;">

                         <input type="hidden" name="action" value="update">

                         <!-- $id will be used for selecting the task to be updated. -->
                         <input type="hidden" name="id" value="<?php echo $id; ?>">

                         <!-- Task status -->
                         <!-- If the tasks is already finished, "checked" attribute will be added, otherwise null. -->
                         <input type="checkbox" name="isFinished" <?php echo ($task->isFinished) ? "checked" : null; ?>>

                         <!-- Task description -->
                         <input type="text" name="description" value="<?php echo $task->description; ?>">

                         <input type="submit" value="Update">
                     </form>
                     <form method="POST" action="./server.php" style="display: inline-block;">
                     	<input type="hidden" name="action" value="delete">
                     	<input type="hidden" name="id" value="<?php echo $id; ?>">
                     	<input type="submit" value="Delete">
                     </form>
			</div>
		<?php endforeach;?>
	<?php endif;?>

	<br>
	<br>

	<!-- add form to clear all task -->

	<form method="POST" action="./server.php">
		<input type="hidden" name="action" value="clear">
		<button type="submit">clear all task</button>
	</form>

</body>
</html>