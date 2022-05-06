<?php

include_once('../about.php');

$about= new About();

$abouts=$about->showAll();

$response["stat"]="ok";
$response["about"]=$abouts;
echo json_encode($response);







?>