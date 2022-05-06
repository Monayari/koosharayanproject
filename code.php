<?php
include_once('models/porsesh-pasokh.php');


$porsesh = new Porseshpasokh();
$id=$_GET['id'];
$row=$porsesh->getById($id);

 
 

 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-rtl.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/myscript.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="img/logo.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> کدرهگیری </title>
</head>

<body>
	<div class="container-fluid" style="margin-top: 150px">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-lg-7">
				<div class="card border-0 shadow">
				<h1 class="modal-title mx-auto"> <i class="fa fa-check-square-o align-middle text-success"></i> </h1>
				<h5 class="text-success text-center mb-5"> درخواست شما با موفقیت ثبت شد ! </h5>
				<h3 class="text-center"> کد رهگیری شما : </h3>
				<div class="card-footer border-0">
				     
  <h4 class="text-center"><?php echo $row['coder'] ?></h4>
				</div>
 
				</div>
			</div>
		</div>
	</div>
</body>
</html>
