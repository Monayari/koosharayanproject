<?php
 include_once('models/porsesh-pasokh.php');
 include_once('models/porsesh-body.php');
 include_once('models/Filter.php');
 include_once('models/jdf.php');

 $porseshpasokh= new Porseshpasokh();
 $porsesh= new Porsesh();
 $filter= new Filter();
 $error="";
 if(isset($_POST['submit']))
 {
	 $title=$_POST['title'];
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $message=$_POST['message'];
     $date=jdate("Y-m-d H:i:s",'','','','en');
     $code=$porseshpasokh->randomcode();
	


	 if($filter->filter_empty($name))
	 {
		 $error="لطفا فیلد خالی را پر کنید";
	 }
	 else if(!$filter->filter_email($email))
		{
			$error="ایمیل معتبر نیست";
		}
		else
		{
			$result=$porseshpasokh->insertData($message,$title,$code,$date,$name,$email);

			$id=$porseshpasokh->lastId();

			if($id>0)
			{
				$result=$porsesh->insertData($id,$message,$title,$date,$name,$email);

				$error="ارسال با موفقیت انجام شد";
				header('location:code.php?id='.$id);
			}
		
			else{
				 $error="خطا در ارسال پیام";
			}
		}
		
 }


 

if(isset($_POST['send']))
{
    $code=$_POST['code'];
	

	$result=$porseshpasokh->Search($code);

	if($result)
	{
		$id=$result['id'];
		$error="کدپیگری موجود هست";
		header('location:answer-admin.php?id='.$id);
	}
	else{

		$error="کدپیگری موجود نمیباشد";
	}
}


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
<title> پرسش و پاسخ </title>
</head>

<body>
	<div id="HeaderContent"></div>
	
	<!-- شروع عنوان -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-5"> پرسش و پاسخ </h2>
			</div>
		</div>
	</div>	
	<!-- پایان عنوان -->
	
	<!-- شروع توضیح -->
	
	<div class="container bg-white p-5 mb-5" style="margin-top: 70px">
		<h2><i class="fa fa-question align-middle text-danger"></i> میتوانید سولات خود را بیان کنید  </h2>
		<p class="text-muted" style="font-size: 19px;"> شما میتوانید سوالات خود رادر هرزمینه ای در رابطه با شرکت کوشا رایان بپرسید و ابهامات خود را برطرف کنید. سوالات شما در صفحه ما به کاربران نمایش داده نمیشود.  </p>
	</div>
	<!-- پایان توضیح -->
	<div class="container">
		<h3 class="text-center my-2"> برای ثبت پرسش فرم زیر را پر کنید ! </h3>
	</div>
	<!-- شروع فرم -->
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-lg-9 shadow">
		<form class="form-horizontal mt-5 " method="POST" action="query-reply.php">
			<div class="form-group d-flex justify-content-center">
     			 <label class="control-label col-sm-2 text-left" for="query">عنوان پرسش:</label>
     			 <div class="col-sm-8">
     		     <input type="text" class="form-control" id="query" placeholder="عنوان پرسش را وارد کنید..." name="title">
     			 </div>
   			 </div>
			<div class="form-group d-flex justify-content-center">
     			 <label class="control-label col-sm-2 text-left" for="name">نام کاربری :</label>
     			 <div class="col-sm-8">
     		     <input type="text" class="form-control" id="name" placeholder="نام کاربری خود را وارد کنید..." name="name" required>
     			 </div>
   			 </div>
	 <div class="form-group d-flex justify-content-center">
    <label class="control-label col-sm-2 text-left" for="email">ایمیل :</label>
    <div class="col-sm-8">
      <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید..." required>
	
    </div>
  </div>
	<div class="form-group d-flex justify-content-center">
      <label for="comment" class="control-label col-sm-2 text-left">متن سوال :</label>
      <textarea class="form-control col-sm-8" name="message" rows="5" id="comment" style="resize: none"></textarea>
    </div>
			
       <input type="submit"  name="submit" value="ارسال پیام" class="btn btn-success mb-2 px-3"> 
				</form>
				<button type="submit" class="btn btn-primary mb-2 px-3" data-toggle="modal" data-target="#modal-code">بررسی پرسش</button>

			</div>	
		</div>	
	</div>
	<!-- پایان فرم -->
	<!--شروع پیغام عدم موفقیت-->
	<div class="modal fade" id="modal-uss">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header border-0">
					<h1 class="modal-title mx-auto"> <i class="fa fa-close align-middle text-danger"></i> </h1>
				</div>
				<div class="modal-body text-center border-0">
					<h5 class="text-danger"> <?php echo $error; ?></h5>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
				</div>
			</div>
		</div>
	</div>
	<!--پایان پیغام عدم موفقیت-->
	<!--شروع پیغام بررسی پرسش-->
	<div class="modal fade" id="modal-code">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="">
				<div class="modal-header border-0">
					<h3 class="modal-title mx-auto"> لطفا کدرهگیری را وارد کنید  </h3>
				</div>
				<div class="modal-body text-center border-0">
					<h5 class="text-danger"> <input type="text" name="code" class="form-control"> </h5>
					
				</div>
				<div class="modal-footer border-0">
					<button type="button" class="btn btn-danger px-3 ml-1" data-dismiss="modal">بستن</button>
					<input type="submit" name="send" value="ارسال" class="btn btn-success px-3">
				</div>
</form>
			</div>
		</div>
	</div>
	<!--پایان پیغام بررسی پرسش -->
	<div id="FooterContent"></div>
</body>
</html>
