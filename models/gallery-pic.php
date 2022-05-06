<?php
 require_once('connect.php');
 
class Gallery extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showcat($userid){
		
        $data=array();
		$sql="SELECT * FROM gallery_pic where fk_cat=".$userid;
		$q = $this->connection->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}
	 return $data;
	 
	 }

	 
    public function join(){
        $data=array();
        $sql="SELECT * FROM gallery_pic,gallery_cat where gallery_pic.fk_cat = gallery_cat.id";
        $q = $this->connection->query($sql) or die("failed!");
        while($r = $q->fetch(PDO::FETCH_ASSOC)){

            $data[]=$r;
        }
        return $data;

    }
	 

	
	public function showAll(){
		
        $data=array();
		$sql="SELECT * FROM gallery_pic";
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
		 
		$sql="DELETE FROM gallery_pic WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($pic,$body,$fk_cat){

		$sql ="INSERT INTO `gallery_pic`( `pic`, `body`, `fk_cat`) VALUES

		(:pic,:body,:fk_cat)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':pic'=>$pic,':body'=>$body,':fk_cat'=>$fk_cat));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$pic,$body,$fk_cat){
	
 $sql="UPDATE `gallery_pic` SET pic=:pic,body=:body ,fk_cat=:fk_cat WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':pic'=>$pic,':body'=>$body,':fk_cat'=>$fk_cat));
		
 
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