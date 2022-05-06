<?php
		 include_once('models/product.php');
		 include_once('models/product-pic.php');
		 $pro= new Product();
		 $product= new Productpic();
		 if(isset($_GET['id']))
		 {
			 $id=$_GET['id'];
		 $rows=$pro->getById($id);
		 $row=$product->getByPic($id);
	
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
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 text-center mb-3">
				<h4><?php echo $rows['title'];?>  </h4>
			</div>
		</div>
		<div class="row d-flex justify-content-around mt-2">
			<div class="col-12 col-lg-4 text-center">
				<div class="card border-0 text-white py-2 mb-3" style="border-radius: 25px 10px 25px 10px; background-color: #3120C9"> <?php echo $rows['created']; ?> </div>
			</div>
		</div>
		
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-8">
				<div class="card border-0">
					<img src="<?php echo $row['pic']; ?>" height="290">
					<div class="card-body">
						<p class="card-text mb-3" style="color: #878484; font-size: 14px"> <?php echo $rows['title']; ?> </p>
						
						<p class="text-center">  
						<?php  echo $rows['body'];  ?> 
						</p>
						<div class="float-left mt-5">
<del style="color: #C0C0C0;font-size: 13px; margin-left: 8px">  <?php echo $rows['price']; ?> </del>

							
						</div>
		
					</div>
				<?php }
		  ?>
					<div class="card-footer border-0 text-left" style="background-color: #f9f9f9"> 
						<i class="fa fa-instagram align-middle ml-2" style="font-size: 20px;color: #BEBEBE "></i>
						<i class="fa fa-envelope align-middle ml-2" style="font-size: 20px;color: #BEBEBE "></i>
						<i class="fa fa-facebook-official align-middle" style="font-size: 20px;color: #BEBEBE "></i>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
		
	<!--شروع محصولات مشابه-->
	<div class="container-fluid z-matlab-khbr">
		<div class="row">
			<div class="col-2">
				<p class="py-2 text-white px-2 text-center" style="border-radius: 20px 5px 5px 20px; background-color: #3120C9"> محصولات مشابه </p>
			</div>
		</div>
		<div class="row">
		<?php
			 include_once('models/product.php');
			 include_once('models/product-pic.php');
			 $product= new Productpic();
			 $row= $product-> showAll();
			 foreach($row as $row){
			
			?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
			
				<div class="card mb-3 shadow">
					<img src="<?php echo $row['pic']; ?>" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<strong><a href="details-products.php?id=<?php echo $row['fk_product']; ?>" style="color: #000"> <?php echo $row['title']; ?></a> </strong>  
							<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> <?php echo $row['created']; ?> </p>
							
						</div>
					</div>
					<div class="card-footer">
						<div class="float-left">
						<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> <?php echo $row['price']."تومان"; ?> </p>
						<!-- <del style="color: #C0C0C0;font-size: 13px; margin-left: 8px">  <?php echo $row['price']."تومان"; ?> </del>-->
					    
						</div>

					</div>
					
				</div>	
				
	
			</div>
		<?php }?>
<!--<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-3 shadow">
					<img src="img/p10.png" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<strong><a href="details-products.html" style="color: #000"> سامانه نرم افزاری مدیریت پروژه کلک </a> </strong>  
							<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> 1400/3/23 </p>
						</div>
					</div>
					<div class="card-footer">
						<div class="float-left">
						 <del style="color: #C0C0C0;font-size: 13px; margin-left: 8px">  42.000.000 تومان </del>
					     <span class="text-success">  20.000.000 تومان</span>
						</div>

					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-3 shadow">
					<img src="img/p9.png" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<strong><a href="details-products.html" style="color: #000"> نرم افزار بیمه اتکایی</a> </strong>  
							<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> 1400/3/23 </p>
						</div>
					</div>
					<div class="card-footer">
						<div class="float-left">
						 <del style="color: #C0C0C0;font-size: 13px; margin-left: 8px"> 32.000.000 تومان </del>
					     <span class="text-success">  15.000.000 تومان</span>
						</div>

					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-3 shadow">
					<img src="img/p5.png" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<strong><a href="details-products.html" style="color: #000"> سیستم ایجاد و مدیریت رایگان وبسایت</a> </strong>  
							<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> 1400/3/23 </p>
						</div>
					</div>
					<div class="card-footer">
						<div class="float-left">
						 <del style="color: #C0C0C0;font-size: 13px; margin-left: 8px">  32.000.000 تومان </del>
					     <span class="text-success">  23.000.000 تومان</span>
						</div>

					</div>
				</div>
			</div>-->
				
		</div>
	
	</div>
	<!--پایان محصولات مشابه-->

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

