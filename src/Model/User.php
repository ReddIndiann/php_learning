<?php


class User{



	public function __construct(
private PDO $db
	){}



	public getAllUsers(): array{

$statement = $this->db->query(
"SELECT * FROM users"
);

return $statement->fetchAll();

	}
}