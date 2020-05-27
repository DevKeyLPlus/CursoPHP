 <?php 
	
	$anoNascimento = 1997;

	$nomeCompleto = "Lucio Santos Silva";

	$nome1 = "João";

	// Adicionando comentario de linha

	/* Comentario de bloco */

	echo $nome1;
	//Apagando variavel da memoria
	unset($nome1);

	//Criando uma validação para exibir a variavel apenas se ela existir
	if (isset($nome)) {
		echo $nome1;
	}

	


 ?>