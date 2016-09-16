<?php
ini_set('display_errors', 'on');
	$fiat = '{"carros": '.
			'[{"nome_carro":"Uno", "ano":2000, "valor":"8.000"},'.
			'{"nome_carro":"Stilo", "ano":2005, "valor":"20.000"},'.
			'{"nome_carro":"Palio", "ano":2007, "valor":"15.000"}'.
			']}';

	$chevrolet = '{"carros": '.
				'[{"nome_carro":"Onix", "ano":2012, "valor":"28.000"},'.
				'{"nome_carro":"Prisma", "ano":2014, "valor":"40.000"}'.
				']}';

	$obj = array_merge(json_decode($chevrolet, true), json_decode($chevrolet, true));

	var_dump($obj);

	//$obj = array_merge(json_decode($fiat, true), json_decode($chevrolet, true));
	//var_dump($obj)
?>