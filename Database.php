<?php

/**
 * Connect MySQL database.
 */
class Database {
    public PDO $connection;

    /**
     * Construct method
     */
    public function __construct() {
        $dsn = "mysql:host=localhost;port=3306;dbname=db_laraphp;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn,);
    }

    /**
     * @return array|false
     */
    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}