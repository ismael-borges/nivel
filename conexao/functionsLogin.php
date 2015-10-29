<?php

function logar($email, $senha){

	$pdo = require_once 'conexao.php';

	try{

		$login = $pdo->prepare("SELECT * FROM acesso WHERE email = :email AND senha = :senha");
		$login->bindValue(":email",$email);
		$login->bindValue(":senha",$senha);
		$login->execute();

		if($login->rowCount() == 1):
			$dadosAdministrador = $login->fetch(PDO::FETCH_OBJ);
			$_SESSION['nomeUsuario'] = $dadosAdministrador->nome;
			return true;	
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function logAcesso($ip, $data, $nome){
	$log = "log.txt";
	$texto = "O Usuário {$nome}, acessou o sistema na data {$data} com o IP {$ip}\n";
	$caracteres = strlen($texto);

	if(file_exists($log)):
		$abrirArquivo = fopen($log, "a+");
		fputs($abrirArquivo, $texto, $caracteres);
		else:
			$abrirArquivo = fopen($log, "a+");
			fputs($abrirArquivo, $texto, $caracteres);
	endif;
	
}