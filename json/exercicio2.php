<?php
	ini_set('display_errors', 'on');
	$json_str = '{"carros": '.
			'[{"nome":"Corola", "ano":2013, "valor":"68000", "km": 15000},'.
			'{"nome":"Onyx", "ano":2015, "valor":"39000"},'.
			'{"nome":"Palio", "ano":2014, "valor":"31000"}'.
			'],'.
			'"data": "16 de setembro de 2016",'.
			'"filial": "Porto Alegre - zona sul"'.
			'}';

	$jsonObj = json_decode($json_str);
	$carros = $jsonObj->carros;

	echo "Oferta do dia $jsonObj->data na loja de $jsonObj->filial<p><p>";

	foreach ($carros as $car) {
		echo "<br>$car->nome/$car->ano por R$ $car->valor";

		if(property_exists($car, "km")) {
			echo " com $car->km km rodados";
		}
	}
?>