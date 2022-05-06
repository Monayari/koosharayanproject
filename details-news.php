<?php

include_once('models/Newss.php');

$news= new News ();

  if(isset($_GET['id']))
{
	$row= $news->getById($_GET['id']);
	




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
<title>اخبار</title>
</head>

<body>
	<div id="HeaderContent"></div>
	<a id="back"></a>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 text-center mb-3">
				<h4> <?php echo $row['title']; ?>  </h4>
			</div>
		</div>
		<div class="row d-flex justify-content-around mt-2">
			<div class="col-12 col-lg-4 text-center">
				<div class="card border-0 text-white py-2 mb-3" style="border-radius: 25px 10px 25px 10px; background-color: #3120C9"><?php echo $row['date']; ?> </div>
			</div>
		</div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-8">
				<div class="card border-0">
					<img src="img/46.jpg" height="290">
					<div class="card-body">
						<p class="card-text mb-3" style="color: #878484; font-size: 14px"> <?php echo $row['title']; ?> </p>
						
						<p class="text-center">  
<?php echo $row['body']; ?>
						</p>
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
	
	
	<!--شروع مطالب مرتبط-->
	<div class="container-fluid z-matlab-khbr">
		<div class="row">
			<div class="col-2">
				<p class="py-2 text-white px-2 text-center" style="border-radius: 20px 5px 5px 20px; background-color: #3120C9"> مطالب مرتبط </p>
			</div>
		</div>
		<div class="row">
		<?php 


$rows= $news->ShowAll();
foreach($rows as $rows){
	?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
			

			
			
			
				<div class="card mb-3 shadow">
					<img src="<?php echo $rows['pic']; ?>" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<strong><a href="details-news.php?id=<?php echo $rows ['id'];?>" target="_blank" style="color: #000"> <?php  echo $rows['title']; ?></a> </strong>  
							<p class="mb-0 mt-2" style="color: #878484; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> <?php echo $rows['date']; ?> </p>
						</div>
					</div>

				</div>
			</div>
			<?php  } ?>

		

	</div>
	<!--پایان مطالب مرتبط-->
	
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
