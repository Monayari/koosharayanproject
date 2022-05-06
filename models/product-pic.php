<?php
 require_once('connect.php');
 
class Productpic extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showAll(){
        $data=array();
		$sql="SELECT * FROM  product ,`product_pic` where product.id= product_pic.fk_product  ORDER BY created DESC  " ;
		
		$q = $this->connection->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}
	 return $data;
	 
	 }

	 
	public function show(){
        $data=array();
		$sql="SELECT * FROM  product ,`product_pic` where product.id= product_pic.fk_product  ORDER BY created DESC limit 4 " ;
		
		$q = $this->connection->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}
	 return $data;
	 
	 }
public function getByPic($id){

		$sql="SELECT * FROM product_pic WHERE fk_product=".$id;
		$q = $this->connection->prepare($sql);
		$q->execute(array(':fk_product'=>$id));
		$data = $q->fetch(PDO::FETCH_ASSOC);

	 return $data;
	 }
	 
	 public function details($sql)
	{
		$query=$this->connection->query($sql);
		
		$row=$query->fetch(PDO::FETCH_ASSOC);
		
		return $row;
	}
	
	 public function deleteData($id){
		 
		$sql="DELETE FROM product-pic WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($pic,$fk_product){

		$sql ="INSERT INTO `product_pic`( `pic`, `fk_product`) VALUES

		(:pic,:fk_product)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':pic'=>$pic,':fk_product'=>$fk_product));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$pic,$fk_product){
	
 $sql="UPDATE `product_pic` SET pic=:pic,fk_product=:fk_product  WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':pic'=>$pic,':fk_product'=>$fk_product));		
 
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