<?php 

////////// TIPOS DE DADOS SIMPLES

	//Strings
	$nome = "Lucio";
	$site = 'lucio.org';

	//Number
	$ano = 1997;

	//Ponto flutuante
	$salario = 5000.97;

	//Boleano
	$bloqueado = false;

////////// TIPOS DE DADOS COMPOSTOS

	//Array
	$frutas = array("Laranja" , "Maçã" , "Pera");
	//Mostrando a posição 2 no array
	echo $frutas[2];


	//Objeto

	$nascimento = new DateTime();

	echo "<br>";

	var_dump($nascimento);

	echo "<br><br>";

////////// TIPOS DE DADOS ESPECIAIS

	//Resourse
	$arquivo = fopen("exemplo02.php", "r");

	var_dump($arquivo);

	echo "<br>";

	//Null
	$nulo = NULL;
	$vazio = "";
	
	var_dump($nulo);
	echo "<br>";
	var_dump($vazio);
?>