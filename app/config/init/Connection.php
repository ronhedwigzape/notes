<?php

class Connection
{
    public $conn;
    public $config = ['host' => 'localhost', 'user' => 'root', 'pass' => '', 'dbname' => 'notes'];

    public function __construct() {
        $this->conn = new mysqli($this->config['host'], $this->config['user'], $this->config['pass'], $this->config['dbname']);

        if($this->conn->connect_error) {
            die(json_encode([
                'error' => $this->conn->connect_error
            ]));
        }
    }

    /**
     * @return false|string
     */
    public function getNotes()
    {
        $sql = "SELECT * FROM notes ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return json_encode($result->fetch_all(MYSQLI_ASSOC));
    }

}