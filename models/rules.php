<?php
 require_once('connect.php');
 
class Rules extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showAll(){
		
          $data=array();
		$sql="SELECT * FROM rules ";
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
		 
		$sql="DELETE FROM rules WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($title,$body){

		$sql ="INSERT INTO `rules`( `title`, `body`) VALUES 

		(:title,:body)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':title'=>$title,':body'=>$body));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$title,$body){
	
 $sql="UPDATE `rules` SET title=:title,body=:body  WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':title'=>$title,':body'=>$body));
		
 
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