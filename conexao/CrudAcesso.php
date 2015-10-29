<?php

require_once 'DB.php';

abstract class CrudAcesso extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id);

	public function find($id){

		$sql  = "SELECT * FROM acesso WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

	}

	public function findAll(){

		$sql  = "SELECT * FROM acesso";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();

	}

	public function delete($id){

		$sql  = "DELETE FROM acesso WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
		
	}

}