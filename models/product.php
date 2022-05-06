<?php
 require_once('connect.php');
 
class Product extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showAll(){
		
         $data=array();

		$sql="SELECT * FROM product ";
		//$sql="SELECT * FROM product, `product-pic`   WHERE product.id=:product-pic.fk_product" ;
		$q = $this->connection->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}
	 return $data;
	 
	 }
	 
	
	 public function details($sql)
	{
		$query=$this->connection->query($sql);
		
		$row=$query->fetch(PDO::FETCH_ASSOC);
		
		return $row;
	}
	
	
	 public function getById($id){

		$sql="SELECT * FROM  product where id=".$id;
        $q = $this->connection->prepare($sql);
  

	    $q->execute(array(':id'=>$id));

    
        $data = $q->fetch(PDO::FETCH_ASSOC);

	 return $data;
	 }
	 

	 public function deleteData($id){
		 
		$sql="DELETE FROM product WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($title,$body,$price,$created){

		$sql ="INSERT INTO `product`( `title`, `body`, `price`, `created`) VALUES

		(:title,:body,:price,:title,:created)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':title'=>$title,':body'=>$body,':created'=>$created));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$title,$body,$price,$created){
	
 $sql="UPDATE `product` SET  title=:title,body=:body ,price=:price,created=:created WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':title'=>$title,':body'=>$body,':created'=>$created));
		
 
 $con=$q->rowcount();
 
 if($con==1)
 {
	 return true;
 }
 else{
	 
	 return false;
 }
 
}

}





?>