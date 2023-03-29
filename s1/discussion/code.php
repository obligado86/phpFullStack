<?php

// echo "hello";

$name = 'john smith';
$email = "johnsmith@mail.com";
define('PI', 3.1416); // constant or const



// data type

// string

$state = 'new york';
$country = 'USA';
$address = $state. ', '. $country; // concatination variables by .

$address = "$state, $country"; // concatitnation variables by ""


//integer
$age = 18;
$headCount = 16;
$headcount = 20;

$grade = 98.2;
$distanceInKilometers = 1245.89;

// boolean
$hasTravel = false;
$haveSymtoms = true;

// null
$spouse = null;

// array
$grades = array(98.7, 90.2, 92.8, 99.2);
$pets = ["dog", "cat", "chicken"];

// objects

$gradesObj = (object)[
	'firstGrading' => 98.7,
	'secondGrading' => 92.1,
	'thirdGrading' => 90.2,
	'forthGrading' => 94.2
];

$personObj = (object)[
	'fullName' => 'john smith',
	'isMarried' => false,
	'age' => 18,
	'address' => (object)[
		'state' => "new york",
		'country' => "USA"
	]
];

//operators

//assignment operator
$x = 250;
$y = 120;

$isLegalAge = true;
$isRegister = false;

//functions

function getFullName($firstName, $middleInitial, $lastName){
	return "$lastName, $firstName, $middleInitial.";
}

// if else if else statement

function determineTyphoonIntensity($windSpeed){
	if($windSpeed < 30){
		return 'not a typoon yet.';
	} else if ($windSpeed <= 61){
		return "tropical depression detected";
	} else if ($windSpeed >= 62 && $windSpeed <= 88){
		return 'tropical detected';
	} else if($windSpeed >= 89 && $windSpeed <= 117){
		return "severe tropical detected";
	} else {
		return 'typhoon detected';
	}
};

// conditional (ternary) operator 
function isUnderAge($age){
	return ($age < 18) ? true : false;
};

//switch statement

function determineComputerUser($computerNumber){
	switch($computerNumber){
		case 1:
			return 'linus torvalds';
			break;
		case 2:
			return ' steve jobs';
			break;
		case 4:
			return 'onel de guzman';
			break;
		case 5:
			return 'chris salvador';
			break;
		default:
			return $computerNumber. 'is out of bounce';
			break;
	}
};

// try catch statement

function greeting($str){
	try{
		if(gettype($str) === "string"){
			echo $str;
		} else {
			throw new Exception("oops!");
		}
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
	finally {
		echo ' I did it again';
	}
};