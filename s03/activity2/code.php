<?php

class Building {
	protected $name;
	protected $floor;
	protected $address;
	public function __construct($name, $floor, $address){
		$this->name = $name;
		$this->floor = $floor;
		$this->address = $address;
	}
	public function printName(){
		return "The name of the building is $this->name";
	}
	public function getName(){
		return $this->name;
	}
	public function getFloor(){
		return $this->floor;
	}
	public function getAddress(){
		return $this->address;
	}
	public function setName($name){
		if(gettype($name) === "string"){
			$this->name = $name;
		}
	}
	public function setFloor($floor){
		if(gettype($floor) === "number"){
			$this->floor = $floor;
		}
	}
	public function setAddress($address){
		if(gettype($address) === "string"){
			$this->address = $address;
		}
	}
};

class Condominium extends Building {
	public function printName(){
		return "The name of the condominium is $this->name";
	}
};

$building = new Building('Caswynn Building', 8, 'Timog Avenue, Quezon City, Philippines');

$condo = new Condominium('Enzo Condo', 5, 'Bendia Avenue, Makati City, Philippines');