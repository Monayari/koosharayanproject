<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/myscript.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="img/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>کوشا رایان</title>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

</head>
<body>
		
<div id="HeaderContent"></div>
	<a id="back"></a>
	
	<?php

			include_once('models/eslider.php');
			
			$eslid= new Eslider();

		 $rows = $eslid->showAll();

			?>
	
		<!-- شروع اسلایدر -->
		
	<div class="container-fluid my-5">
	<div class="row d-flex justify-content-center">
		<div class="col-12">
		
			<div id="size-slider">
	
	<div class="carousel carousel-fade slide" id="demo" data-ride="carousel">

		<ul class="carousel-indicators">
		
		    <?php
                        foreach ($rows as $key => $row) {
                            ?>

			<li <?=($key==0)?' class="active"':''?> data-target="#demo" data-slide-to="<?= $key ?>"></li>
			<?php } ?>
			<!--<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>-->
		</ul>

		<div class="carousel-inner">
			<?php
			foreach ($rows as $key => $row) {
			?>
			<div class="carousel-item<?=($key==0)? ' active':''?>">
			<img src="<?php echo $row['pic'];?>" width="100%" height="100%">
			</div>

		<?php }?>
	
		</div>


</div>

			
		<a  href="#demo"  data-slide="next">	</a>
			<span class="carousel-control-prev-icon"></span>	
	

		<a   href="#demo" data-slide="prev"></a>		
			<span class="carousel-control-next-icon"></span>
	
		
				
							
	</div>


		</div>
		
		</div>
	
	</div> 
	
	</div>
	

					
	<!-- پایان اسلایدر -->

	<!-- شروع توضیح شرکت -->
	<?php 
	
	include_once('models/about.php');
	$about= new  About();
  
	$rows=$about->showAll();

	?>
	<div class="container">
	<div class="row d-flex justify-content-center z-abut z-tozihat">
		<div class="col-12 ">
			<div class="card border-0 mt-5 z-aftr shadow">
				<div class="card-body border-0 row">
					<div class="col-lg-6">
					<span class="p-3" style="font-size:18px"> <?php echo $rows['description']; ?> </span>
					</div>
					<div class="col-lg-6 d-flex justify-content-center">
					<img src="<?php echo $rows['pic'];?>" width="350" height="350" class="rounded-pill z-img-tozihat">
					</div>
				</div>

		<!--	<div class="card-footer text-center border-0 bg-white" style="font-weight: 500"> درباره شرکت  </div> -->
			</div>
		</div>
	</div>
		</div>
	<!-- پایان توضیح شرکت -->
	
	<!-- شروع محصولات شرکت -->
		<div class="container custom-border z-mahsolat">
		<div class="row mt-3 mb-2">
			<div class="col-12 d-md-flex justify-content-between custom-col">
				<p class="rounded-pill  text-white p-2 px-3 text-center" style="font-size: 13px; background-color: #43c67a"><img src="img/15.png"> محصولات ما </p>
				<p class="rounded-pill  text-white p-2 px-3 text-center z-see" style="font-size: 13px; background-color: #032064">
					<i class="fa fa-plus align-middle"></i>
					<a href="products.php" target="_blank" class="text-white">مشاهده همه</a> </p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<?php
			include_once('models/product.php');
			include_once('models/product-pic.php');
$product= new Productpic();
//$pro= new Product();
		$row=$product->show();
//$row=$pro->showAll();
         foreach($row as $row){
			
		
			?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-md-3 z-scl">
					<div class="shadow d-md-flex justify-content-center mahsol bg-transparent">
						<img src="<?php echo $row['pic'];  ?>" class="img-fluid" width="100%" height="100%">
						<a href="details-products.php?id=<?php echo $row['fk_product'];?>" target="_blank" class="btn rounded-pill text-white mx-auto txt-mhs" style="background-color: #cbcbcb"> <?php echo $row['title'];  ?> </a>
					</div>
			</div>	
			<?php }?>
		

		</div>
	</div>
	
	<!-- پایان محصولات شرکت -->
	
	<!-- شروع تخصص های ما -->
			<div class="container custom-border z-shrka">
		<div class="row mt-3 mb-2">
			<div class="col-12 d-md-flex justify-content-between custom-col">
				<p class="rounded-pill text-white p-2 px-3 text-center" style="font-size: 13px; background-color: #43c67a"><img src="img/15.png"> تخصص های ما </p>
			</div>
		</div>
	</div>

		<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-12 ">
			<div class="card border-0 z-aftr shadow">
				<div class="card-body border-0 row">
					<div class="col-lg-6  mt-5 z-takhss">
						<a class="btn btn-light rounded-pill mb-4 btn-block" style="cursor: pointer"> <i class="fa fa-check-circle align-middle text-success"></i> طراحی وب سایت</a>
						<a class="btn btn-light rounded-pill mb-4 btn-block" style="cursor: pointer"> <i class="fa fa-check-circle align-middle text-success"></i> اپلیکیشن موبایل</a>
						<a class="btn btn-light rounded-pill mb-4 btn-block" style="cursor: pointer"> <i class="fa fa-check-circle align-middle text-success"></i> اموزش</a>
						<a class="btn btn-light rounded-pill mb-4 btn-block" style="cursor: pointer"> <i class="fa fa-check-circle align-middle text-success"></i> سخت افزار</a>
					</div>
					<div class="col-lg-6 d-flex justify-content-center">
					<img src="img/51.png" width="350" height="350" class="rounded-pill z-img-tozihat">
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
	<!-- پایان تخصص های ما -->
	
	<!-- شروع شرکا  -->
		<div class="container custom-border z-shrka">
		<div class="row mt-3 mb-2">
			<div class="col-12 d-md-flex justify-content-between custom-col">
				<p class="rounded-pill text-white p-2 px-3 text-center" style="font-size: 13px; background-color: #43c67a"><img src="img/15.png"> مشتریان </p>
				<p class="rounded-pill text-white p-2 px-3 text-center z-see" style="font-size: 13px; background-color: #032064">
					<i class="fa fa-plus align-middle"></i>
					<a href="clientele.php" class="text-white">مشاهده همه</a> </p>
			</div>
		</div>
	</div>

	<div class="container-fluid z-img-shrka">
		<div class="row d-flex justify-content-center">
	
			<div class="col-lg-10">
	
				<div class="row">
	<?php

	 include_once('models/customer.php');
	 
	 $customer= new Customer();
	 $row= $customer->show();
	 foreach($row as $row){
	
	
	
	?>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-sm-3">
						<div class="z-show-sh">
						<img src="<?php echo $row['pic']; ?>" class="img-fluid rounded-pill" width="100%" height="100%">
						</div>
						
					</div>
		
		<?php }?>
				</div>
			
			</div>		

		</div>
	
	</div>
 
	<!-- پایان شرکا  -->
	
	<!-- شروع اخبار  -->
	
			<div class="container custom-border z-shrka">
		<div class="row mt-3 mb-2">
			<div class="col-12 d-md-flex justify-content-between custom-col">
				<p class="rounded-pill text-white p-2 px-3 text-center" style="font-size: 13px; background-color: #43c67a">
					<img src="img/15.png"> 
					اخبار  </p>
				<p class="rounded-pill text-white p-2 px-3 text-center z-see" style="font-size: 13px; background-color: #032064"> 
					<i class="fa fa-plus align-middle"></i>
					 <a href="news.php" class="text-white">مشاهده همه</a> </p>
			</div>
		</div>
	</div>
	
		
	<div class="container z-khabar">
		<div class="row d-flex justify-content-center">
<?php 

include_once('models/Newss.php');

$news= new News();
$row=$news->Show();

foreach($row as $row){



?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="card mb-3 shadow">
						<img src="<?php echo $row['pic'];?>" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
							<strong> پروژه : </strong><a href="details-news.php?id=<?php echo $row['id'];  ?>" target="_blank"> <?php echo $row['title']?></a>  
							<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> <?php echo $row['date'];  ?> </p>

						</div>
					</div>
				</div>
			</div>
			<?php }?>
			
		</div>
	</div>
	<!-- پایان اخبار  -->
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