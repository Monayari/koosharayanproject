<?php
include_once '../Newss.php';
include_once '../newscat.php';

$news = new News();
$newscat = new Newscat();

$all_news = $news->ShowAll();
$all_newscat = $newscat->showAll();


 if(isset($_POST['search'])){
    $text = $_POST['text'];
    $result = $news->Search($text);
    $response["search_result"] = $result;
}else if(isset($_POST['cat_id']))
{
    $catid=$_POST['cat_id'];
    $catgory=$news->showcat($catid);
    $response["categories"]=$catgory;
    $response["cat_id"]=$_POST["cat_id"];
}else{
    $response["news"] = $all_news;
    $response["newscat"] = $all_newscat;
}
echo json_encode($response);
