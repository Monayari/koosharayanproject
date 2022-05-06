<?php
 require_once('connect.php');
 
class companymember extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	 public function showAll(){
		 
        $data=array();
		$sql="SELECT * FROM company_member";
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
		 
		$sql="DELETE FROM company_member WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($name,$family,$takhasos,$body,$pic,$email){

		$sql = " INSERT INTO `company_member`( `name`, `family`, `takhasos`, `body`, `pic`, `email`)

		VALUES(:name,:family,:takhasosm,:body,:pic,:email)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':name'=>$name,':family'=>$family,':takhasos'=>$takhasos,':body'=>$body,':pic'=>$pic,':email'=>$email));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$name,$family,$takhasos,$body,$pic,$email){
	
 $sql="UPDATE `company_member` SET name=:name,family=:family,takhasos=:takhasos,body=:body,pic=:pic,email=:email WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
 $q->execute(array(':name'=>$name,':family'=>$family,':takhasos'=>$takhasos,':body'=>$body,':pic'=>$pic,':email'=>$email));
		
 
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