<?php
 require_once('connect.php');
 
class Eftekharat extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	 public function showAll(){
		 
         $data=array();
		$sql="SELECT * FROM eftekharat";
		
		$q = $this->connection->query($sql) or die("failed!");
		
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}

	 return $data;
	 
	 }
	 
	 
	 public function show(){
		 
		$data=array();
	   $sql="SELECT * FROM eftekharat limit 4";
	   
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
		 
		$sql="DELETE FROM eftekharat WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($pic,$body,$data,$title){

		$sql = "INSERT INTO `eftekharat`( `pic`, `body`, `data`, `title`) VALUES

		(:pic,:body,:data,:title)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':pic'=>$pic,':body'=>$body,':data'=>$data,':title'=>$title));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$pic,$body,$data,$title){
	
 $sql="UPDATE `eftekharat` SET pic=:pic,body=:body ,data=:data,title=:title WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':pic'=>$pic,':body'=>$body,':data'=>$data,':title'=>$title));
		
 
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