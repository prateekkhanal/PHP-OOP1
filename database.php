<?php
    class Database {
        private $connection;

        // constructor
        public function __construct($server, $host, $password, $database) {
            $this->connection = mysqli_connect($server, $host, $password, $database);
            if (!$this->connection) {
                echo "Failed to connect to database!";
            } else {
                echo "Database connection successfully established!";
            }
        }
    }
?>
