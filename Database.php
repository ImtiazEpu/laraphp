<?php

/**
 * Connect MySQL database.
 */
class Database {
    public PDO $connection;

    /**
     * Construct method
     */
    public function __construct ( $config, $username = 'root', $password = '' ) {

        $dsn = 'mysql:' . http_build_query( $config, '', ';' );

        $this->connection = new PDO( $dsn, $username, $password, [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

        ] );
    }

    /**
     * @return array|false
     */
    public function query ( $query, $params = [] ) {

        $statement = $this->connection->prepare( $query );

        $statement->execute( $params );

        return $statement;
    }
}