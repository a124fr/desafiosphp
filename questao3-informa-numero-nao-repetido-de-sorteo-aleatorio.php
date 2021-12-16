<?php


function sorteo_numero() {
	$numeros = [];
	for($contador = 0; $contador < 20; $contador++)	 {
		$numero_sorteado = rand(1, 10);

		$numeros[] = $numero_sorteado;
	}

	return $numeros;
}

$valores = sorteo_numero();
$valores2 = $valores;

$numeros_unicos = [];
for($i = 0; $i < count($valores); $i++) {
	$valor = $valores[$i];
	
	$total = 0;
	for($j = 0; $j < count($valores2); $j++) {

		if($valor == $valores2[$j]){
			$total++;
		}
	}	

	if($total == 1) {
		$numeros_unicos[] = $valor;
	}
}

print_r($valores);
print_r($numeros_unicos);