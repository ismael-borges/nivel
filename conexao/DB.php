<?php

require_once 'config2.php';

class DB{

	private static $instance;

	public static function getInstance(){

		if(!isset(self::$instance)){

			 $dsn="mysql:HOST=".HOST.";dbname=".BD;
        
			    try{

				    self::$instance = new PDO($dsn, USER, PASS);
				    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

				}catch(PDOException $e){
					
					echo "Erro ao conectar ao banco .".$e->getMessage();
				}

		}

		return self::$instance;
	}

	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}

}

?>