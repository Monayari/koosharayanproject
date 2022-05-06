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
<title>قوانین</title>
</head>

<body>
<div id="HeaderContent"></div>
	<!-- شروع هدر -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-3" style="margin-top: 40px !important"> قوانین </h2>
			</div>
		</div>
	</div>	
	<!-- پایان هدر -->
	
<!--شروع قوانین-->

	<div class="container" style="margin-top: 80px">
  <div id="accordion">
  <?php
        
        include_once('models/rules.php');
        $rule= new Rules();
        $row=$rule->showAll();
        foreach ($row as $rows){
        
        
        ?>
    <div class="card">
      
      <div class="card-header">
      
        <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color: #8F1D1F; font-size: 24px">
          <i class="fa fa-legal s-plus text-dark"></i> <?php echo $rows['title']; ?>
        </a>
      </div>
      
      
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body text-muted" style="font-size: 19px">
        <?php   echo $rows['body']; ?>
 
        </div>
      </div>
      <?php } ?>
    </div>
   
    <!--<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: #8F1D1F; font-size: 24px">
        <i class=" fa fa-legal s-plus text-dark"></i> مالکیت حقوق مادی و معنوی آموزش ها در اختیار کلیک سایت است
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body text-muted" style="font-size: 19px">
         تمامی آموزش های موجود،در وزارت ارشاد به نام کلیک سایت به ثبت رسیده است و از اینرو هرگونه سواستفاده و یا کپی از مطالب و فیلمها،به سادگی قابل پیگیری خواهد بود.قطعا کلیک سایت در راستای حفظ حق و حقوق مدرسین دلسوز و پرتلاش خود هیچگونه دریغی را اعمال نخواهد کرد و از کوچکترین حقوق ایشان چشم پوشی نخواهد نمود. چرا که در نهادهای مربوطه،تمامی مجموعه های آموزشی -اعم از قدیم و جدید- به نام و تحت مالکیت کلیک سایت می باشد
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color: #8F1D1F; font-size: 24px">
          <i class=" fa fa-legal s-plus text-dark"></i> کپی برداری از محتوا ،خلاف قانون و شرع
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body text-muted" style="font-size: 19px">
           جهت حفظ حقوق مدرسین و جلوگیری از کپی برداری و سرقت محتوا،کلیک سایت تمامی مجموعه های موجود را در وزارت ارشاد اسلامی به ثبت می رساند. این امر،پیگیری قانونی هرگونه سو استفاده احتمالی اشخاص را میسر و هموار می سازد
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour" style="color: #8F1D1F; font-size: 24px">
          <i class=" fa fa-legal s-plus text-dark"></i> خرید پستی و دریافت پکیج
        </a>
      </div>
      <div id="collapsefour" class="collapse" data-parent="#accordion">
        <div class="card-body text-muted" style="font-size: 19px">
            تمامی سفارشات ظرف 24 الی 48 ساعت کاری پس از ثبت سفارش به اداره پست تحویل داده شده و بین 2 الی 4 روز بعد به مقصد خواهد رسید. خریدار موظف است ظرف حداکثر ده روز پس از دریافت پکیج، در صورت وجود هرگونه مشکل در محصول، مراتب را به مسئولین مربوطه در سایت از طریق ایمیل یا پشتیبانی آنلاین سایت و یا تلگرام اطلاع رسانی نماید. لازم به ذکر است پس از گذشت این مدت زمان، هر گونه موری بر عهده مشتری می باشد. همچنین کدهای تخفیف ارائه شده در سایت به مدت ده روز فعال می باشد و در صورت مفقود شدن کد تخفیف هدیه و یا عدم استفاده از ان در طی مدت مقرر، مسئولیت بر عهده کاربر می باشد
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive" style="color: #8F1D1F; font-size: 24px">
          <i class=" fa fa-legal s-plus text-dark"></i>مالکیت حقوق مادی و معنوی آموزش ها در اختیار کلیک سایت است
        </a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
        <div class="card-body text-muted" style="font-size: 19px">
            تمامی سفارشات ظرف 24 الی 48 ساعت کاری پس از ثبت سفارش به اداره پست تحویل داده شده و بین 2 الی 4 روز بعد به مقصد خواهد رسید. خریدار موظف است ظرف حداکثر ده روز پس از دریافت پکیج، در صورت وجود هرگونه مشکل در محصول، مراتب را به مسئولین مربوطه در سایت از طریق ایمیل یا پشتیبانی آنلاین سایت و یا تلگرام اطلاع رسانی نماید. لازم به ذکر است پس از گذشت این مدت زمان، هر گونه موری بر عهده مشتری می باشد. همچنین کدهای تخفیف ارائه شده در سایت به مدت ده روز فعال می باشد و در صورت مفقود شدن کد تخفیف هدیه و یا عدم استفاده از ان در طی مدت مقرر، مسئولیت بر عهده کاربر می باشد
        </div>-->
      </div>
    </div>
 
<!--پایان قوانین-->

<div id="FooterContent"></div>
</body>
</html>
