<?php
 require_once('connect.php');
 
class Customer extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	 public function showAll(){
		 
		 $data=array();

		$sql="SELECT * FROM customer";
		$q = $this->connection->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}

	 return $data;
	 
	 }
	 
	 public function show(){
		 
		$data=array();

	   $sql="SELECT * FROM customer limit 4";
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
	
	 public function deleteData($id){
		 
		$sql="DELETE FROM customer WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($title,$pic){

		$sql = " INSERT INTO `customer`( `title`, `pic`) VALUES

		VALUES(:title,:pic)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':title'=>$title,':pic'=>$pic));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$title,$pic){
	
 $sql="UPDATE `customer` SET title=:title,pic=:pic WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
 $q->execute(array(':id'=>$id,':title'=>$title,':pic'=>$pic));

		
 
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