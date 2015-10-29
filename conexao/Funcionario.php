<?php

require_once 'CrudFuncionario.php';

class Funcionario extends CrudFuncionario{

	protected $table = 'cadastro_funcionario';
	private $id;
	private $nome;
	private $email;
	private $cpf;
	private $telefone;
	private $celular;

	public function setId($id){
		$this->id = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function insert(){

		$sql  = "INSERT INTO cadastro_funcionario (nome, email, cpf, telefone, celular) VALUES (:nome, :email, :cpf, :telefone, :celular)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':celular', $this->celular);
		return $stmt->execute();

	}

	public function update($id){

		$sql  = "UPDATE cadastro_funcionario SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone, celular = :celular WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':celular', $this->celular);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}