<?php

include_once('../tamas.php');


$tamas= new Tamas();
$tamass=$tamas->showAll();

$response["stat"]="ok";
$response["tamas"]=$tamass;

echo json_encode($response);












?>


