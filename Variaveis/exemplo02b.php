<?php 

	$nomeCompleto = "Lucio Santos Silva";
	echo $nomeCompleto;
	echo "<br>";
	//Excluindo variavel
	unset($nomeCompleto);

	$nome = "Lucio";
	$Sobrenome = "Santos";

	$nomeCompleto = $nome . " " . $Sobrenome;

	echo $nomeCompleto;

 ?>