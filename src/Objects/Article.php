<?php

require_once 'Conn.php';

class Article extends Conn
{

//    public $conn;
//    public $title;
//    public $text;
//    public $allArticles;

//
//    public function getAll($title, $article){
////        $sql = "INSERT INTO articles (id, title, articles) VALUES (id,  '$title', '$article')";
//        $sql = "SELECT * FROM oop.articles";
//
//        return $this->conn->query($sql);
//    }
//    public function add($title, $text){
//        $this->db->add ($title, $text);
//    }

    public function addOne(){

    }

    public function renderAll (){
        $allArticles = $this->getAll ('articles');

        echo "<div class='row g-5'><div class='coll'>";

foreach ($allArticles as $value){
    echo "<div class='blog-post border'>";

    ?>
    <div>
        <h1>
            <?php echo $value['title'] ?>
        </h1>
        <hr/>
        <p>
            <?php echo $value['articles'] ?>
        </p>
    </div>
    <?php
    echo "</div>";
}
echo "</div></div>";

    }

}