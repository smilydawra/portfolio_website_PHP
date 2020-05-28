<?php


/**
 * Model Class - Parent Class
 */
class Model{

	static protected $dbh;

	/**
		 * initialising the $dbh
	 */
	static public function init(PDO $dbh){
		static::$dbh = $dbh;
	}

	/**
		 * all function to fetch all records from table
	 */
	final public function all()
	{
		$query = "SELECT * FROM {$this->table}";
		$stmt = static::$dbh->query($query);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	/**
		 * one function to fetch one record from table
	 */
	final public function one(int $id)
	{
		$query = "SELECT * FROM {$this->table} WHERE {$this->key} = :id";
		$stmt = static::$dbh->prepare($query);
		$params = array(
			':id' => $id
		);

		$stmt->execute($params);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}




}
