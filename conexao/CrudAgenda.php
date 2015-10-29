<?php

require_once 'DB.php';

abstract class CrudAgenda extends DB{

	abstract public function insert();
	abstract public function update($id);

	public function find($id){

		$sql  = "SELECT * FROM agenda WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

	}

	public function findAll(){

		$sql  = "SELECT * FROM agenda";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();

	}

	public function delete($id){

		$sql  = "DELETE FROM agenda WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
		
	}

}