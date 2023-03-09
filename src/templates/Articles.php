<?php

require_once './database.php';

class Articles
{

    public $conn;
    public $title;
    public $text;
    public $allArticles;


    public function __construct()
    {
        $this->conn = new database();
        $allArticles = $this->getAll ();
    }

    public function getAll(){
//        $sql = "INSERT INTO articles (id, title, articles) VALUES (id,  '$title', '$article')";
        $sql = "SELECT * FROM oop.articles";

        return $this->conn->getAll();
    }
    public function add($title, $text){
        $this->db->add ($title, $text);
    }

}