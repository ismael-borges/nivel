<?php

require_once 'CrudAcesso.php';

class Acesso extends CrudAcesso{

	private $id;
	private $nome;
	private $email;
	private $senha;
	private $repeteSenha;
	private $perfil;

	public function setId($id){
		$this->id = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function setRepeteSenha($repeteSenha){
		$this->repeteSenha = $repeteSenha;
	}

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}

	public function insert(){

		$sql  = "INSERT INTO acesso (nome, email, senha, repeteSenha, perfil) VALUES (:nome, :email, :senha, :repeteSenha, :perfil)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':repeteSenha', $this->repeteSenha);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute();

	}

	public function update($id){

		$sql  = "UPDATE acesso SET nome = :nome, email = :email, senha = :senha, repeteSenha = :repeteSenha, perfil = :perfil WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':repeteSenha', $this->repeteSenha);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}