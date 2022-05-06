<?php

include_once('models/gallery-pic.php');
include_once('models/Gallery_cat.php');

$gallery= new Gallery();
$gallerycat= new Gallery_cat();



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
<title> گالری تصاویر</title>
</head>

<body>
	<div id="HeaderContent"></div>
	<a id="back"></a>
	<!-- شروع سرچ -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-3" style="margin-top: 40px !important"> گالری تصاویر </h2>
			</div>
		</div>
	</div>	
	<!-- پایان سرچ -->
	
	<!-- شروع لیست خبرها -->
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			
			<div class="col-10 col-lg-2 mb-4">
				<?php
                 
				 $row=$gallerycat->showAll();
				 foreach($row as $row){
				?>
					<ul class="list-group">
					<a href="gallery.php?catid=<?php echo $row['id'];?>">
						<li class="list-group-item list-group-item-action"> <?php echo $row['title']; ?> </li></a>
						
						
					</ul>
					<?php }?>
			</div>
		
			<div class="col-12 col-lg-10"> <!--قسمت سمت اخبار-->
				<div class="row">

				<?php
				
				if(isset($_GET['catid']))
				{
					$id=$_GET['catid'];
					$row=$gallery->showcat($id);
				}
else{

	$row=$gallery->showAll();
}
foreach($row as $row){
				
				
				?>
			<div class="col-12 col-md-4">
				<div class="card mb-3 shadow">
				<img src="<?php echo $row['pic'];  ?>" class="img-fluid">
				</div>
					</div>
					<?php  }?>


		
	</div>
	</div>
	<div class="container"></div>
	
	
	
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
