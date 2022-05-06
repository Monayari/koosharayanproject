<?php

include_once('../company-member.php');

$member= new companymember();

$members=$member->showAll();

$response["stat"]="ok";
$response["member"]=$members;
echo json_encode($response);







?>