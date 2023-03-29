<?php

// repetion contorl structures

//while loop

function whileLoop(){
	$count = 5;
	while($count !== 0){
		echo $count. "<br/>";
		$count--;
	}
};

//do while loop

function doWhileLoop(){
	$count = 22;

	do {
		echo $count. '<br/>';
		$count--;
	} while ($count > 20);
};

// for loop

function forLoop() {
	for ($count = 0; $count <= 20; $count++){
		echo $count . '<br/>';
	}
};

//continue and break statement

function modifiedForLoop(){
		/* 
	        "Continue" is a keyword that allows the code to go to the next loop without finishing the current code block.

	        "Break" on the other hand is a keyword that STOP the execution of the current loop.
	    */
	for($count = 0; $count <= 20; $count++){
		if($count % 2 === 0){
			continue;
		}

		echo $count . '<br/>';
		if($count > 10){
			break;
		}
	}
};


function whileLoopActivity(){
	$x = 1;
	while($x < 6){
		echo $x. '<br/>';
		$x++;
	} 
};

$studentNumbers = array('2020-1923', '2020-1924', '2020-1925', '2020-1926', '2020-1926');

$studentNumbers = ['2020-1923', '2020-1924', '2020-1925', '2020-1926', '2020-1926'];

$grades = [98.5, 94.3, 89.2, 90.1];

$computerBrands = ['acer', 'asus', 'lenovo', 'neo'];

$task = [
	'drink html',
	'eat javascript',
	'inhale css',
	'bake sass'
];

// associative array
// Associative Array
// Associative array differ from numberic array in the sense that associative array uses descriptive names in naming the elements/values (key => value pair).
// double arrow (=>) an assignment operator that is commonly used in the creation of associative array.

$gradePeriods = ['firstGrading' => 98.5, 'secondGrading' => 94.3, 'thirdGrading' => 89.2, 'fortGrading' => 90.1];

// two dimentional array

$heroes = [
	['ironman', 'thor', 'hulk'],
	['wolverine', 'cyclopes', 'jean grey'],
	['batman', 'superman', 'wonder woman']
];
// two dimentional associative array

$ironManPowers = [
	'regular' => ['repulse blase', 'rock blast'],
	'signature' => ['unibeam']
];

$sortedBrands = $computerBrands;
$reverseBrands = $computerBrands;
//assending
sort($sortedBrands);
//decending
rsort($reverseBrands);

function searchBrands($brand, $brands){
	return(in_array($brand, $brands)) ? "$brand is in array" : "$brand is not in the array";
};

//in_array(needle, haystack)

$reverseGradePeriods = array_reverse($gradePeriods);