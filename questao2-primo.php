<?php

function primo(int $inicial, int $final) {

	$primos = [];
	for($divisor = $inicial+1; $divisor < $final; $divisor++) {
		$divisores = 0;
		
		for($contador = 2; $contador < $divisor; $contador++) {

			if($divisor % $contador == 0) {
				$divisores++;
			}
		}

		if($divisores == 0) {
			$primo[] = $divisor;
		}
	}

	return $primo;
}

//print_r(primo(1, 10));
print_r(primo(10, 29));
