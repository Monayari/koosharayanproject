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
<script src='js/jq.min.js'></script>
<link rel="shortcut icon" href="img/logo.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>شرکا و مشتریان</title>
</head>

<body>
	<div id="HeaderContent"></div>
		<!-- شروع عنوان -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-5"> شرکا و مشتریان </h2>
			</div>
		</div>
	</div>	
	<!-- پایان عنوان -->
	
	<!-- شروع عکس ها -->
	<div class="container-fluid mt-5">
		<div class="row">
			<?php

             include_once('models/customer.php');
			 $customer= new Customer();
			 $row=$customer->showAll();
			 foreach($row as $rows){
			?>



			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-3 shadow z-client">
					<div class="z-client-img"><img src="<?php echo $rows['pic']; ?>" class="img-fluid rounded-lg "></div>
					<div class="card-body" style="font-size: 14px">
						
					</div>
				</div>
			</div>
			<?php }?>
			
			
		</div>
	</div>
	<!-- پایان عکس ها -->
<div id="FooterContent"></div>
</body>
</html>
