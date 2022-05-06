<?php
 require_once('connect.php');
 
class Newscat extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showAll(){
		

		$sql="SELECT * FROM news_cat ";
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
		 
		$sql="DELETE FROM news_cat WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($title){

		$sql ="INSERT INTO `news_cat`( `title`) VALUES 

		(:title)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':title'=>$title));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$title){
	
$sql="UPDATE `news_cat` SET `title`=:title WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':title'=>$title));
		
 
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