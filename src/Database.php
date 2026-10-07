<?php


//DB class to initiate connection in every model 
Class Database {





//PDO connection variable
	private PDO $connection;

//constructore is to initialise a new connection open being called
	public function __construct(){


		$this->connection = new PDO(

			'sqlite:' . __DIR__ . '/../database/database.sqlite'
		);
		$this->connection->setAttribute(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION
		);

		$this->connection->setAttribute(
			PDO::ATTR_DEFAULT_FETCH_MODE,
			PDO::FETCH_ASSOC
		);

	}
	public function getConnection(): PDO
	{

		return $this->connection;

	}


}
