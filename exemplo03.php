<?php


	$data = "20 de agosto de 2020";			//string 
	$salario = 850.00;						// float ou double
	$cargo = "Estagiário";					// string
	$idade = 18;							// integer ou int
	$resultado = true;						// boolean

	if ($resultado) {
		echo "Verdadeiro";
	}

	echo "Arquivo criado em $data <br>";

	printf("Salário mínimo: R$ %.2f <br>", $salario);

	$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);

	echo $texto;


?>