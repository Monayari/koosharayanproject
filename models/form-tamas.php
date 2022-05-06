<?php
 require_once('connect.php');
 
class Formtamas extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	 public function showAll(){
         $data=array();
		$sql="SELECT * FROM form_tamas";
		
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
		 
		$sql="DELETE FROM form_tamas WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($name,$email,$mobail,$body,$created){

		$sql ="INSERT INTO `form_tamas`( `name`, `email`,`mobail`, `body`,`created`) VALUES

		(:name,:email,:mobail,:body,:created)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':name'=>$name,':email'=>$email,':mobail'=>$mobail,':body'=>$body,':created'=>$created));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$name,$email,$body,$created){
	
 $sql="UPDATE `form_tamas` SET name=:name,email=:email ,body=:body,created=:created WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':name'=>$name,':email'=>$email,':body'=>$body,':created'=>$created));
		
 
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