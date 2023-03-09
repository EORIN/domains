<?php
include_once './../www/database.php';

$db = new database();
if(isset($_POST["title"]) && isset($_POST["article"])){

    $title = $_POST["title"];
    $article =  $_POST["article"];

    echo '
<script type="text/javascript">
location.replace("http://ekz:81/")

</script>';

}
//if(isset($_POST["article"])){
//
//    $article =  $_POST["article"];
//}


//echo $title, $article;
//var_dump ($title);

$db->add ($title,  $article);

//$new_url = '/';

//header('Location: '.$new_url);

?>
<div>
    <p>
    <form method="post">
        <div class="form-group">
        <label for="title">Title</label><br>
        <input type="text" class="form-control" id="title" name="title"><br>
        <label for="article">Article</label><br>
        <input type="text" class="form-control form-control-lg" id="article" name="article">
        <br/>

            <button style="margin-top: 1vh " type="submit">Опубликовать</button>
        </div>
    </form>
    </p>
</div>