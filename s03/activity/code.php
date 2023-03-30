<?php

class Person {
	public $firstName;
	public $middleName;
	public $lastName;
	public function __construct($firstName, $middleName, $lastName){
		$this->firstName = $firstName;
		$this->middleName = $middleName;
		$this->lastName = $lastName;
	}
	public function printName(){
		return "Your full name is $this->firstName $this->lastName.";
	}
};

class Developer extends Person {
	public function printName(){
		return "Your name is $this->firstName $this->middleName $this->lastName and you are a developer.";
	}
};

class Engineer extends Person {
	public function printName(){
		return "Your are an engineer named $this->firstName $this->middleName $this->lastName.";
	}
};

$person1 = new Person('Senku', 'naruto', 'Ishigami');
$person2 = new Developer('John', 'Finch', 'Smith');
$person3 = new Engineer('Harold', 'Myers', 'Reese');