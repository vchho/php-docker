<?php
class Database
{
    private $handle;

    public function __construct(
        string $database_host,
        string $database_name,
        string $username,
        string $password
    ) {
        $dbhost = $database_host;
        $dbname = $database_name;
        $dbuser = $username;
        $dbpass = $password;

        try {
            // $this->handle = new PDO("");
        } catch (PDOException $error) {
            echo "Database connection problem from Database: " . $error->getMessage();
        }
    }

    public function read_query(string $query)
    {
        $result = $this->handle->query($query);
        return $result;
    }

    public function write_query(string $query)
    {
        $result = $this->handle->query($query);
        return $result;
    }

    public function prepare(string $query)
    {
        $result = $this->handle->prepare($query);
        return $result;
    }
}
