<?php 

include_once('newscat.php');

$cat= new Newscat();

$cat->insertData('ورزشی');


$res=$cat->showAll();
var_dump($res);
$cat->updatedata($res[0]['id'],'1ورزش');

$res=$cat->showAll();

var_dump($res);
?>