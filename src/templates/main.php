<div>
    <?php
    include_once __DIR__.'/../Objects/Article.php';

//    $gg = new Articles\Articles\Articles();

    $g = new Article();
    $all = $g->renderAll ();

//    foreach ($all as $value){
//
//
//        ?>
<!--        <div>-->
<!--        <h1>-->
<!--            --><?php //echo $value['title'] ?>
<!--        </h1>-->
<!--        <hr/>-->
<!--        <p>-->
<!--            --><?php //echo $value['articles'] ?>
<!--        </p>-->
<!--        </div>-->
<!--        --><?php
//    }
//    ?>
</div>