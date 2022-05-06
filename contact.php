<?php

include_once('models/tamas.php');

$tamas=new Tamas();
$row=$tamas->showAll();
foreach($row as $rows){



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
<title>تماس با ما</title>
</head>

<body>
	<div id="HeaderContent"></div>
	<a id="back"></a>
		<!-- شروع عنوان -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-5"> تماس با ما </h2>
			</div>
		</div>
	</div>	
	<!-- پایان عنوان -->
	
	<!--شروع تماس با ما-->
	
	<div class="container-fluid z-contact">
		<div class="row">
			<div class="col-12 col-md-6 d-flex justify-content-center">
				<div>
					<img src="<?php echo $rows['pic']; ?>" width="330" height="330" class="rounded-pill">
				</div>
			</div>
		<div class="col-12 col-md-6 d-flex justify-content-center">
				<div class="row">
					
					<div class="col-sm-4  text-center">
						<p><i class="fa fa-map-marker align-middle"></i></p> 
						<p> ادرس </p>
						<span><?php echo $rows['address']; ?> </span>
					</div>
					
					<div class="col-sm-4  text-center">
						<p><i class="fa fa-phone align-middle"></i></p> 
						<p> تلفن </p>
						<span> <?php echo $rows['mobail'];  ?> </span>
					</div>
					
					<div class="col-sm-4  text-center">
						<p><i class="fa fa-envelope align-middle"></i></p> 
						<p> ایمیل </p>
						<span> <?php echo $rows['email'];  ?> </span>
					</div>
			</div>
		</div> 
		<?php } ?>
	</div>
	</div>
	<!--پایان تماس با ما-->
	
	<!--شروع توضیح-->
	<div class="container bg-white p-5" style="margin-top: 70px">
		<h2> باما در ارتباط باشید </h2>
		<p class="text-muted" style="font-size: 19px;"> اطلاعات خود را وارد نمائید تا با شما تماس بگیریم، لازم به توضیح است که کلیه کاربران نرم افزار حسابداری می توانند برای سوالات در خصوص نرم افزار نیز با استفاده از مرکز پشتیبانی و خدمات با درج درخواست های خود درسامانه پشتیبانی به پیگیری مسائل و سوالات خودر در خصوص نرم افزار حسابداری و بسته خریداری شده اقدام نمایند. </p>
		</div>
	<div class="container">
		<h2 class="text-center m-2"> ما را در شبکه های اجتماعی دنبال کنید </h2>
		<p class="text-center"> 
			<a href="#" style="font-size: 35px;color: #E47BA5"> <i class="fa fa-instagram"></i> </a>
			<a class="mx-3" href="#" style="font-size: 35px;color: #4B44A7"> <i class="fa fa-facebook"></i> </a>
			<a href="#" style="font-size: 35px; color: #2C95E0"> <i class="fa fa-twitter"></i> </a>
			<a class="mx-3" href="#" style="font-size: 35px;color: #55B8E1"> <i class="fa fa-telegram"></i> </a>
		</p>
	</div>
	<!--پایان توضیح-->
	
	<!--شروع فرم-->
	<?php
	
	include_once('models/form-tamas.php');
    include_once('models/Filter.php');
	include_once('models/jdf.php');

	$tamass =new Formtamas();
	$filter= new Filter();
	
    $error="";
   
	if(isset($_POST['submit']))
	{
		$date=jdate("Y-m-d H:i:s",'','','','en');
		$name= $_POST['name'];
		$phone= $_POST['phone'];
		$email= $_POST['email'];
		$message= $_POST['message'];
		

		if($filter->filter_empty($name)|| $filter->filter_empty($phone))
		{
          $error="لطفا فیلد خالی را پر کنید";
		}
		else if(!$filter->filter_email($email))
		{
			$error="ایمیل معتبر نیست";
		}

		else{

			$result=$tamass->insertData($name,$email,$phone,$message,$date);
			
			if($result)
			{
				$error="ثبت با موفقیت انجام شد";
			}
			else{

				$error="خطا در ارسال پیام";
			}
		}

	}


	
	?>
	<div class="container z-contact-form shadow" style="margin-top: 60px;">
		<form class="form-horizontal mt-5" method="POST" action="contact.php">
			
			<div class="form-group d-flex justify-content-center">
     			 <label class="control-label col-sm-2 text-left" for="name">نام :</label>
     			 <div class="col-sm-8">
     		     <input type="text" class="form-control" id="name" placeholder="لطفانام را وارد کنید..." name="name">
     			 </div>
   			 </div>
   		 <div class="form-group d-flex justify-content-center">
     			 <label class="control-label col-sm-2 text-left" for="phon">موبایل :</label>
     			 <div class="col-sm-8">          
     		     <input type="text" class="form-control" id="phon" placeholder="شماره تماس را وارد کنید...." name="phone">
   			     </div>
         </div>
	 <div class="form-group d-flex justify-content-center">
    <label class="control-label col-sm-2 text-left" for="email">ایمیل :</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل را وارد کنید....">
    </div>
  </div>
			
	<div class="form-group d-flex justify-content-center">
      <label for="comment" class="control-label col-sm-2 text-left">پیام :</label>
      <textarea class="form-control col-sm-8" name="message" rows="5" id="comment" style="resize: none"></textarea>
    </div>
			
    <div class="form-group">        
      <div class="col-sm-2 text-left">
        <input type="submit" name="submit" value="ارسال پیام" class="btn btn-success mb-2 px-3">
      </div>
    </div>
	<?php 	 echo $error;  ?>
		</form>
	</div>
	<!--پایان فرم-->
	
<div id="FooterContent"></div>
</body>
</html>

