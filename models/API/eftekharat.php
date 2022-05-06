<?php

include_once('../eftekharat.php');

$eftekhar= new Eftekharat();

$eftekharat=$eftekhar->showAll();

$response["stat"]="ok";
$response["eftekhar"]=$eftekharat;
echo json_encode($response);




	


?>