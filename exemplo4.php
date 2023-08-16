<?php

$nome = "Armandino"; //Variável local no script

//Implementação de uma função

		function exibir (){
			$nome = "Josefina"; //Variável local na função

			echo "Valor da variável dentro da função " . $nome;
		}

exibir(); //Chamada da função

echo "<br> Valor da variável fora da função " . $nome;

?>