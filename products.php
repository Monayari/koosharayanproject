<?php

include_once('models/product.php');



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
<script src='js/jq.min.js'></script>
<link rel="shortcut icon" href="img/logo.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>محصولات</title>
</head>

<body>
	<div id="HeaderContent"></div>
	<a id="back"></a>
	<!-- شروع عنوان -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-5"> محصولات </h2>
			</div>
		</div>
	</div>	
	<!-- پایان عنوان -->
	
	<!-- شروع لیست خبرها -->
	<div class="container">
		<div class="row d-flex justify-content-center">	
			
	<?php
			 include_once('models/product.php');
			 include_once('models/product-pic.php');
			 $product= new Productpic();
			 $row= $product-> showAll();
			 foreach($row as $row){
			
			?>
			
		
			<div class="col-12 col-md-4">
				<div class="card mb-3 shadow z-img-pro">
				<img src="<?php echo $row['pic']; ?>" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<a href="details-products.php?id=<?php echo $row['fk_product']; ?>" target="_blank" style="font-size: 17px;color: #032064 !important; font-weight: 600;"> <?php echo $row['title']; ?> </a>
					</div>
					<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> <?php echo $row['price']."تومان"; ?> </p>
				</div>
					<div class="card-footer">
						<small class="badge badge-pill badge-danger">  </small>
						<div class="float-left">
						 <del style="color: #C0C0C0;font-size: 13px; margin-left: 8px">  <?php echo $row['price']."تومان"; ?> </del>

						</div>

					</div>
				</div>
					</div>
			 <?php }?>
			
			
						
			
			

		
	</div>
	</div>
	<div class="container"></div>
	
	<!-- پایان لیست خبرها -->
	
	
		<!-- دکمه برگشت -->
	<div class="container-fluid btn-back">
		<div class="row ">
			<div class="col-12 d-flex justify-content-end">
			<a href="#back" class="ml-2" style="font-size: 30px;">
				<i class="fa fa-chevron-circle-up align-middle;"></i>
			</a>
			</div>
		</div>
	</div>
	<!-- دکمه برگشت -->
<div id="FooterContent"></div>
</body>
</html>

