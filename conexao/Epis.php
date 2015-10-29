<?php

require_once 'CrudEpis.php';

class Epis extends CrudEpis{

	private $id;
	private $descricao;
	private $marca;
	private $unidade;
	private $valor;
	private $tipo;
	private $alugado;

	public function setId($id){
		$this->id = $id;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function setUnidade($unidade){
		$this->unidade = $unidade;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function setAlugado($alugado){
		$this->alugado = $alugado;
	}

	public function insert(){

		$sql  = "INSERT INTO cadastro_epis (descricao, marca, unidade, valor, tipo, alugado) VALUES (:descricao, :marca, :unidade, :valor, :tipo, :alugado)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':marca', $this->marca);
		$stmt->bindParam(':unidade', $this->unidade);
		$stmt->bindParam(':valor', $this->valor);
		$stmt->bindParam(':tipo', $this->tipo);
		$stmt->bindParam(':alugado', $this->alugado);
		return $stmt->execute();

	}

	public function update($id){

		$sql  = "UPDATE cadastro_epis SET descricao = :descricao, marca = :marca, unidade = :unidade, valor = :valor, tipo = :tipo, alugado = :alugado WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':marca', $this->marca);
		$stmt->bindParam(':unidade', $this->unidade);
		$stmt->bindParam(':valor', $this->valor);
		$stmt->bindParam(':tipo', $this->tipo);
		$stmt->bindParam(':alugado', $this->alugado);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}