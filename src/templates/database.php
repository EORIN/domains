<?php

//namespace www;

class database
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
    public function query($sql, $params = [])
    {
        // Подготовка запроса
        $stmt = $this->db->prepare($sql);

        // Обход массива с параметрами
        // и подставляем значения
        if ( !empty($params) ) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
        }

        // Выполняя запрос
        $stmt->execute();
        // Возвращаем ответ
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add( $title,  $article){
        $title = strval ($title);
        $article = strval ($article);
        $sql = "INSERT INTO articles (id, title, articles) VALUES (id,  '$title', '$article')";
         $this->conn->query ($sql);
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM articles';
        return $this->conn->query ($sql);
    }


}