<?php
 require_once('connect.php');
 
class Eslider extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	 public function showAll(){

		$sql="SELECT * FROM eslider";
		
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
		 
		$sql="DELETE FROM eslider WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($pic,$url,$title,$created,$modifi){

		$sql ="INSERT INTO `eslider`( `pic`, `url`, `title`, `created`, `modifi`) VALUES

		(:pic,:url,:title,:created)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':pic'=>$pic,':url'=>$url,':title'=>$title,':created'=>$created,':modifi'=>$modifi));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$pic,$url,$title,$created,$modifi){
	
 $sql="UPDATE `eftekharat` SET pic=:pic,url=:url ,title=:title,created=:created,modifi=:modifi WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':pic'=>$pic,':url'=>$url,':title'=>$title,':created'=>$created,':modifi'=>$modifi));
		
 
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