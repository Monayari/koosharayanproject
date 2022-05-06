<?php


include_once('models/newscat.php');
include_once('models/Newss.php');

$news= new News();
$newscat= new Newscat();

  
	
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
	<!-- شروع سرچ -->
	<div class="container-fluid z-srch-khbr">
		<div class="row d-flex justify-content-center">
			<div class="col-10 col-lg-5">
				<h2 class="text-center mt-3"> اخبار </h2>
  		  <form method="POST" action="news.php">
  		  	<div class="input-group mb-3 mt-3">
        	<div class="input-group-prepend">
            	<input type="submit" name= "daste" value="دسته بندی"class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"> 
             	
                <div class="dropdown-menu">
				<?php
				
				
				
				
              $row=$newscat->showAll();
			 foreach($row as $row){



				?>
                	<a class="dropdown-item" href="news.php?catid=<?php echo $row['id'];?>"> <?php echo $row['title'];?> </a>
	<?php }?>
                </div>
			
            </div>
            <input id="x" type="text" name="se" class="form-control" placeholder="جستجو...">
				<input type="submit"  name="search" value="جستجو"class="btn btn-primary">
        </div>
        </form>
			</div>
		</div>
	</div>	
	<!-- پایان سرچ -->
	
	<!-- شروع لیست خبرها -->
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			
			<div class="col-10 col-lg-2 mb-4">
			<?php
				
				
			$row=$newscat->showAll();
            foreach($row as $row){



				?>
					<ul class="list-group">
					<a class="dropdown-item" href="news.php?catid=<?php echo $row['id'];?>">
						<li class="list-group-item list-group-item-action" > <?php echo $row['title'];?>  </li></a>
						
					</ul>
<?php }?>
			</div>
		
			<div class="col-12 col-lg-10"> <!--قسمت سمت اخبار-->
				<div class="row">
				<?php




 if(isset($_POST['search']))
 {
	 $text=$_POST['se'];
	 $row=$news->Search($text);
	 if (!$row){
		 echo "مورد جستجو یافت نشد";

	 }
 }
 else if(isset($_GET['catid']))
{
	

$id= $_GET['catid'];
$row= $news->showcat($id);



}
else{
$row= $news->ShowAll();}
foreach($row as $row){
?>	
			<div class="col-12 col-md-4">
				<div class="card mb-3 shadow">
				<img src="<?php echo $row['pic']; ?>" class="img-fluid">
					<div class="card-body" style="font-size: 14px">
						<div class="card-text">
						<p class="" style="font-size: 13px;color: #878484">| منتشر شده در اخبار| </p>
						<strong><a href="details-news.php?id=<?php echo $row['id'];?>" target="_blank" style="color: #000"> <?php echo $row['title'];  ?></a> </strong>  
						<p class="mb-0 mt-2" style="; font-size: 13px"> <i class="fa fa-clock-o align-middle"> </i> <?php  echo $row['date']; ?> </p>
					</div>
				</div>
				
				</div>
					</div>
<?php} } ?>
		<?php
}
	
?>


			
			
				</div>
			</div>

		
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
