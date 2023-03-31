<?php

session_start();

// creating a task list class to handle the methods for adding, viewing, editing, and deleting a task

class TaskList{
	public function add($description){
		$newTask = (object)[
			"description" => $description,
			"isFinished" => false
		];

		// check if is no added task yet
		if($_SESSION['tasks'] === null){
			// A global variable "$_SESSION['task']" will be created with an empty array.
			$_SESSION['tasks'] = array();
		}

		
		// If there are existing tasks, the $newTask will be added in the "$_SESSION['task]" variable.
		array_push($_SESSION['tasks'], $newTask);
	}

	// Update Task Method
	public function update($id, $description, $isFinished){
		// tasks[$id]
		$_SESSION['tasks'][$id]->description = $description;
		$_SESSION['tasks'][$id]->isFinished = ($isFinished !== null) ? true : false;
	}

	public function remove($id){
		array_splice($_SESSION['tasks'], $id, 1);
	}

	//clear all task method
	public function clear(){
		session_destroy();
	}

};

//instanctiation for taskList
// to have access with the class method
$taskList = new TaskList();

// create an if statement to identify the type of request to be handled by the server
//add a task
if($_POST['action'] === 'add'){
	$taskList->add($_POST['description']);
}//Update a Task
else if ($_POST['action'] === 'update') {
     $taskList->update($_POST['id'], $_POST['description'], $_POST['isFinished']);
}
else if($_POST['action'] === 'delete'){
	$taskList->remove($_POST['id']);
}
else if($_POST['action'] === 'clear'){
	$taskList->clear();
}
//it will redirected us to the index file upon sending the request.
header('Location: ./index.php');

