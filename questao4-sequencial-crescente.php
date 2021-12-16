<?php

// $array = array('d', '1', 'b', '3', 'a', '0', 'c', '2');
// sort($array);
// print_r($array);


function sequencialCrescrente($array) {
	sort($array);
	print_r($array);
}

sequencialCrescrente([1, 3, 2, 1]); 						// false
sequencialCrescrente([1, 3, 2]);							// true
sequencialCrescrente([1, 2, 1, 2]);  						// false
sequencialCrescrente([3, 6, 5, 8, 10, 20, 15]);				// false
sequencialCrescrente([1, 1, 2, 3, 4, 4]);					// false
sequencialCrescrente([1, 4, 10, 4, 2]);						// false
sequencialCrescrente([10, 1, 2, 3, 4, 5]);					// true
sequencialCrescrente([1, 1, 1, 2, 3]);						// false
sequencialCrescrente([0, -2, 5, 6]);						// true
sequencialCrescrente([1, 2, 3, 4, 5, 3, 5, 6]);				// false
sequencialCrescrente([40, 50, 60, 10, 20, 30]);				// false
sequencialCrescrente([1, 1]);								// true
sequencialCrescrente([1, 2, 5, 3, 5]);						// true
sequencialCrescrente([1, 2, 5, 5, 5]);						// false
sequencialCrescrente([10, 1, 2, 3, 4, 5, 6, 1]);			// false
sequencialCrescrente([1, 2, 3, 4, 3, 6]); 					// true
sequencialCrescrente([1, 2, 3, 4, 99, 5, 6]); 				// true
sequencialCrescrente([123, -17, -5, 1, 2, 3, 12, 43, 45]);	// true
sequencialCrescrente([3, 5, 67, 98, 3]);					// true