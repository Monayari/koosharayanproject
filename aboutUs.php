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
<title> درباره شرکت کوشا رایان </title>
</head>

<body>
	<div id="HeaderContent"></div>
		<!-- شروع عنوان -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-5"> درباره ما </h2>
			</div>
		</div>
	</div>	
	<!-- پایان عنوان -->
	
	<!-- شروع توضیح شرکت -->
	<div class="container-fluid">
	<div class="row d-flex justify-content-center">
		<?php
include_once('models/about.php');
$about= new About();
$row=$about->showAll();



?>
		<div class="col-12 ">
			<div class="card border-0 p-3">
				<div class="card-body border-0 row">
					<div class="col-lg-6">
					<span class="p-3" style="font-size:18px"> <?php echo $row['description'];?></span>
					</div>
					<div class="col-lg-6 d-flex justify-content-center">
					<img src="<?php echo $row['pic']; ?>" width="350" height="350" class="rounded-pill z-img-tozihat">
					</div>
				</div>
		<!--	<div class="card-footer text-center border-0 bg-white" style="font-weight: 500"> درباره شرکت  </div> -->
			</div>
		</div>
	</div>
		</div>
	<!-- پایان توضیح شرکت -->
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center" style="font-weight: 600;color: #032064"> چرا کوشا رایان ؟</h3>
				<p class="mt-4" style="font-size: 20px;font-weight: 500">
					خدمات کوشارایان بگونه ای کاملا انعطاف پذیر طراحی شده اند تا مناسب هر گونه پروژه و در هر مقیاسی باشد. مشتریان بالوین استارتاپ های بین المللی و کسب و کارهای محلی هستند که هر کدام با اهدافی خاص سراغ ما می آیند. هدف نهایی ما برآورد نیازها و جلب رضایت آنان می باشد. افتخار می کنیم که توانسته ایم از همکاری با مشتریان عزیز تجربیاتی ارزشمند بدست آوریم و در موفقیت های آنها سهیم باشیم.
 				</p>
				<h5 style="color: #032064;font-weight: 600"> شفافیت در کار </h5>
				<p style="font-size: 20px;font-weight: 500">ایجاد یک ارتباط شفاف با مشتریان برای ما یک اولویت است. ما همواره تلاش می کنیم تا شما را از روند طراحی، برنامه نویسی و پیاده سازی پروژهتان مطلع سازیم.</p>
				
				<h5 style="color: #032064;font-weight: 600"> عضوی از تیم شما </h5>
				<p style="font-size: 20px;font-weight: 500"> ما دوست داریم خودمان را به عنوان شریک تجاری شما فرض کنیم و قدم به قدم برای رسیدن به موفقیت و رشد کسب و کارتان شما را همراهی کنیم.</p>
			</div>
		</div>
	</div>

	<!--شروع اعضا-->
	<div class="container z-about-ozv">	
		<h3 class="text-center mb-5" style="color: #032064; font-weight: 600;"> اعضای تیم </h3>
		<div class="row">
			<?php
              include_once('models/company-member.php');
			  $member= new  companymember();
			  $row= $member->showAll();
			  foreach($row as $rows){
			?>
			<div class="col-lg-12 col-sm-6">
				<div class="card border-0 bg-transparent mb-3">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 col-12 d-flex justify-content-center">
							<img src="<?php echo $rows['pic']; ?>" width="250" height="180" class="rounded-lg">
						</div>
						<div class="col-lg-6 col-12">
							<p style="font-size: 20px;font-weight: 500" class="z-about-text">
								<span style="font-weight: 600"><?php echo $rows['name']; ?></span>
								<span style="font-weight: 600"><?php echo $rows['family']; ?></span>
								<span class="text-muted"><?php echo $rows['takhasos']; ?></span>
							</p><?php echo $rows['body']; ?></p>
							  
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			
			
			</div>
		</div>
	<!--پایان اعضا-->
	<!--شروع افتخارات-->
		<div class="container custom-border z-mahsolat">
		<div class="row mt-3 mb-2">
	
			<div class="col-12 d-md-flex justify-content-between custom-col">
				<p class="rounded-pill  text-white p-2 px-3 text-center" style="font-size: 13px; background-color: #43c67a"><img src="img/15.png"> افتخارات ما </p>
				<p class="rounded-pill  text-white p-2 px-3 text-center z-see" style="font-size: 13px; background-color: #032064">
					<i class="fa fa-plus align-middle"></i>
					<a href="details-aboutUs.php" target="_blank" class="text-white">مشاهده همه</a> </p>
			</div>
		</div>
	</div>
	
	
	<div class="container z-khabar">
		<div class="row d-flex justify-content-center">

		<?php

         include_once('models/eftekharat.php');
         $eftekhar= new Eftekharat();
         $row=$eftekhar->show();
        foreach($row as $rows){


           ?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="card mb-3 shadow">
						<img src="<?php echo $rows['pic']; ?>" class="img-fluid">
				</div>
			</div>
			<?php } ?>
		
		</div>
	</div>	
	<!--پایان افتخارات-->

	
<div id="FooterContent"></div>
</body>
</html>
