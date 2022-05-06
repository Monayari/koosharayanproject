<?php

include_once('../Newss.php');
$news= new News();


if(isset($_POST['id']))
{
    $newsdetails= $news->getById($_POST['id']);
   
	$response["stat"]="ok";
	$response["news"]=$newsdetails;
    $response["id"]=$_POST['id'];
    echo json_encode($response);
}

?>