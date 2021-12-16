<?php
	
	function seculoano(int $ano) {
		return intval(($ano - 2)/100) + 1;
	}

echo "Século: ".seculoano(100)."\n";
echo "Século: ".seculoano(1700)."\n";
echo "Século: ".seculoano(1702)."\n";
echo "Século: ".seculoano(1905)."\n";
echo "Século: ".seculoano(2021)."\n";