<?php

//objects are variables

$buildingObj = (object) [
	'name' => 'caswynn bulding',
	'floor' => 8,
	'address' => 'bldg. sacred heart, quezon city, philippines'
];

$buildingObj2 = (object) [
	'name' => 'GMA Network',
	'floor' => 20,
	'address' => 'bldg. sacred heart, quezon city, philippines'
];

class Building {
	// properties
	public $name;
	public $floor;
	public $address;
	public function __construct($name, $floor, $address){
		$this->name = $name;
		$this->floor = $floor;
		$this->address = $address;
	}
	public function printName(){
		return "thename of the building is $this->name";
	}
};

//inheritance and polymorphism

class Condominium extends Building {
	public function printName(){
		return "thename of the condominuim is $this->name";
	}
};

$building = new Building('caswynn building', 10, 'quezon city philippines');

$condo = new Condominium('enzo condo', 5, 'bendia ave, makati city philippines');