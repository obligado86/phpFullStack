<?php

function printDevisibleOfFive(){
	for($i = 0; $i <= 1000; $i++){
		if($i % 5 === 0){
			echo "$i ";
			continue;
		}
		
		if($i >= 100){
			break;
		}
	}
};

$student = [];