<?php
ini_set('display_errors', 'on');
	$json_str = '{"nome":"Cristiano Gehring", "idade":28, "sexo":"M"}';

	$obj = json_decode($json_str);

	echo "nome: $obj->nome<br>";
	echo "idade: $obj->idade<br>";
	echo "sexo: $obj->sexo<br>";

	$json_str = '{"empregados": '.
				'[{"nome":"Jason Jones", "idade":38, "sexo":"M"},'.
				'{"nome":"Ada Pascalina", "idade":35, "sexo":"F"},'.
				'{"nome":"Delphino da Silva", "idade":26, "sexo":"M"}'.
				'],'.
				'"salarios":'. 
				'[{"tipo":"base", "valor":1000},'.
				'{"tipo":"junior", "valor":2000},'.
				'{"tipo":"senior", "valor":4000}'.
				']}';

	$jsonObj = json_decode($json_str);
	$empregados = $jsonObj->empregados;
	$salarios = $jsonObj->salarios;

	foreach ($empregados as $e) {
		echo "nome: $e->nome - idade: $e->idade -sexo: $e->sexo<br>";
	}

	echo "<br><br><br><br> SALARIOS<br>";

	foreach ($salarios as $s) {
		echo "Tipo: $s->tipo - valor: $s->valor<br>";
	}
?>