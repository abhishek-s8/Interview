<?php

//this function gets the number of weekdays in range
function getNumOfWeekdays($start_day, $end_day)
{

	//parses an english textual datetime into a unix timestamp
	$start_day_ts = strtotime($start_day);
	$end_day_ts = strtotime($end_day);

	//set the weekdays to zero at first and return 0 if no weekdays exist
	$num_of_weekdays = 0;

	//while loop to go from start day to end day
	while ($start_day_ts <= $end_day_ts ) {

		if (date("N", $start_day_ts) < 6){
			++$num_of_weekdays; 
		}
		$start_day_ts += 86400; //add one whole day of seconds to keep going
	}
	return $num_of_weekdays;
}

//Function that creates an array of random numbers that is num weekdays long
function getArrayRandomNumbers($num_of_weekdays){
	
	$total = 0;
	$rand_number = 0;

	$weekday_array = array();
	$norm_array = array();		
	
	//for loop that goes up to the num of week days
	for ($i= 0 ; $i < $num_of_weekdays ; $i++) {
		//generate a random number between 1 and 1000
		$rand_number = mt_rand(1,1000);

		//after add it to the total
		$total += $rand_number;

		//put the random number into an array
		array_push($weekday_array, $rand_number);
	}

	//Normalize the array by making the sum of elements equal to one
	//keep total in float value
	$total = floatval($total);

	foreach ( $weekday_array as $wd ) {	
		array_push( $norm_array, floatval($wd) / $total);		
	}
	return $norm_array;
}

//take the start and end date and fill an array with the values found
function distribute_amount_randomly($amount, $baseline, $start_date, $end_date){
	
	//parses an english textual datetime into a unix timestamp
	$start_day_ts = strtotime($start_date);
	$end_day_ts = strtotime($end_date);

	//calculate the number of weekdays
	$num_of_weekdays = getNumOfWeekdays($start_date, $end_date);

	//a unidimentional normalized array of size $num_of_weekdays
	$norm_array = getArrayRandomNumbers($num_of_weekdays);

	$index_of_norm_array = 0;
	$output_array = array();

	//incomplete
	//calculate the baseline number
	//calculate the minimum number in given weekday
	//fill the output array
	return $output_array;
}




