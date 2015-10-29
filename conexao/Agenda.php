<?php

require_once 'CrudAgenda.php';

class Agenda extends CrudAgenda{

	private $id;
	private $dataCon;
	private $diaDaSemana;
	private $hora;
	private $descricao;
	
	public function setId($id){
		$this->id = $id;
	}

	public function setData($dataCon){
		$this->dataCon = $dataCon;
	}

	public function setDiaDaSemana($diaDaSemana){
		$this->diaDaSemana = $diaDaSemana;
	}

	public function setHora($hora){
		$this->hora = $hora;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function insert(){

		$sql  = "INSERT INTO agenda (dataCon, diaDaSemana, hora, descricao) VALUES (:dataCon, :diaDaSemana, :hora, :descricao)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':dataCon', $this->dataCon);
		$stmt->bindParam(':diaDaSemana', $this->diaDaSemana);
		$stmt->bindParam(':hora', $this->hora);
		$stmt->bindParam(':descricao', $this->descricao);
		return $stmt->execute();

	}

	public function update($id){

		$sql  = "UPDATE agenda SET dataCon = :dataCon, diaDaSemana = :diaDaSemana, hora = :hora, descricao = :descricao WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':dataCon', $this->dataCon);
		$stmt->bindParam(':diaDaSemana', $this->diaDaSemana);
		$stmt->bindParam(':hora', $this->hora);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}