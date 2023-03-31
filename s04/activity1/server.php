<?php
session_start();

//$person1 = new Users("johnsmith@gmail.com", "1234");
//array_push($_SESSION['users'], $person1);

class Users{
	public function login($email, $password){
		if($email == "johnsmith@gmail.com" && $password == "1234"){
			$_SESSION['email'] = $email;
			$_SESSION['user'] = true;
		} 
	}
	public function welcome(){
		echo "Hello, " . $_SESSION['email'];
	}
	public function logout(){
		session_destroy();
	}
};

$users = new Users();

if($_POST['action'] === 'login'){
	$users->login($_POST['email'], $_POST['password']);
}
if($_POST['action'] === 'logout'){
	$users->logout();
}

header('Location: ./index.php');