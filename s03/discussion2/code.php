<?php 

class Building {
	// properties
	// Access Modifiers
	// 1. public: fully open, property and methods can be accessed from anywhere
	// 2. private: 
	// disables direct access to an object's property or methods
	// private modifier also disable inheritance of its properties and methods to child class
	// method and property can only be accessed within the class
	protected $name;
	// 3. protected:
	        // this modifier will allow inheritance of properties and methods to child classes
	        // properties or method is only accessible within the class and child class
	private $floor;
	private $address;
	public function __construct($name, $floor, $address){
		$this->name = $name;
		$this->floor = $floor;
		$this->address = $address;
	}
	public function printName(){
		return "thename of the building is $this->name";
	}
};

class Condominium extends Building {
	public function getName(){
		return $this->name;
	}
	public function setName($name){
		if(gettype($name) === "string"){
			$this->name = $name;
		}
	}
};


$building = new Building('caswynn building', 10, 'quezon city philippines');

$condo = new Condominium('enzo condo', 5, 'bendia ave, makati city philippines');