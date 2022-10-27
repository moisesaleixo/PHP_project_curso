<?php

 	session_start();

	//Variavel que verifica se a autenticação foi realizada
	$usuario_autenticado = false;


	//Usuários do sistema
	$usuarios_app = array(
		array('email' => 'adm@teste.com', 'senha' => '12345'),
		array('email' => 'user@teste.com', 'senha' => 'abcd'),
	);

	foreach ($usuarios_app as $user) {

		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		}
	}

	if ($usuario_autenticado) {
		echo "Usuário autenticado";
		$_SESSION['autenticado'] = 'SIM';
	}else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}



/*
	echo "<pre>";
	print_r($usuarios_app);
	echo "</pre>";
*/


/* ------------------------------------------------------------------- */
/*
	print_r($_GET);

	echo "<br>";

	echo $_GET['email'];
	echo "<br>";
	echo $_GET['senha'];


	print_r($_POST);

	echo "<br>";

	echo $_POST['email'];
	echo "<br>";
	echo $_POST['senha'];
*/
?>