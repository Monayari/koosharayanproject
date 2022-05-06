<?php
include_once('../form-tamas.php');


$tamas= new Formtamas();

if(isset($_POST['insert'])){
	
    $name=$_POST['name'];
	$creat= $_POST['creat'];
	$email= $_POST['email'];
	$mobail =$_POST['mobail'];
	$message= $_POST['message'];
	
$tamass=$tamas->insertData($name,$creat,$email,$mobail,$message);

 $response["name"]=$_POST['name'];
 $response["creat"]=$_POST['creat'];
 $response["email"]=$_POST['email'];
 $response["mobail"]=$_POST['mobail'];
 $response["message"]=$_POST['message'];
 $response["insert"]=$_POST['insert'];
 
$response["stat"]="ok";
$response["tamas"]=$tamass;

echo json_encode($response);
}
?>