<?php
	
	function seculoano(int $ano) {

		$texto_ano = strval($ano);
		$result = substr($ano, 0, 2);
		$result2 = substr($ano, strlen($ano)-2, 2);

		
		$result = intval($result);
		$result2 = intval($result2);

		if($result2 > 0) {
			$result++;
		}

		return "século ".$result;
	}

	echo "\n";
	//echo seculoano(2010);
	//echo seculoano(1905);
	//echo seculoano(1700);
	echo seculoano(100);
