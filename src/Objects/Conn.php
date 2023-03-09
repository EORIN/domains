<?php


class Conn
{
    private $host = "localhost";
    private $db_name = "oop";
    private $username = "root";
    private $password = "root";
    public $conn;

    // получение соединения с базой данных
    public function __construct()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->conn;
    }
    public function getAll($tb)
    {
        $sql = 'SELECT * FROM '.$tb;
        return $this->conn->query ($sql);
    }

    public function add( $title,  $article, $table){
        $title = strval ($title);
        $article = strval ($article);
        $sql = "INSERT INTO .'$table'. (id, title, articles) VALUES (id,  '$title', '$article')";
        $this->conn->query ($sql);
    }
}