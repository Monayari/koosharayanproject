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
<title> گواهینامه ها </title>
</head>
<body>
	<div id="HeaderContent"></div>
		<!-- شروع عنوان -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-5"> گواهینامه ها و افتخارات</h2>
			</div>
		</div>
	</div>	
	<!-- پایان عنوان -->
	
	<!--ISO شروع گواهی -->
		<div class="container custom-border">
		<div class="row mt-3 mb-2">
			<div class="col-12 d-md-flex justify-content-between custom-col">
				<p class="rounded-pill  text-white p-2 px-3 text-center" style="font-size: 13px; background-color: #43c67a"><img src="img/15.png">  گواهینامه   </p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row d-flex justify-content-center">
			<?php 
			
			include_once('models/eftekharat.php');
			$eftekhar= new Eftekharat();
			$row=$eftekhar->showAll();
			foreach($row as $rows){
			
			
			?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
					<div class="card mb-3 shadow">
						<img src="<?php echo $rows['pic'];  ?>" class="img-fluid" style="height: 160px !important">
				</div>
			</div>
	
<?php }?>
		
		</div>
	</div>	

	<!-- پایان لوح ها -->

<div id="FooterContent"></div>

</body>
</html>
