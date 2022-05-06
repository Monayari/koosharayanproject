<?php
 require_once('connect.php');
 
class Tamas extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showAll(){
		
        $data=array();
		$sql="SELECT * FROM tamas ";
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
		 
		$sql="DELETE FROM tamas WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($email,$mobail,$watsapp,$telegram,$instagram,$address,$lat,$lon){

		$sql ="INSERT INTO `tamas`( `email`, `mobail`, `watsapp`, `telegram`, `instagram`, `address`, `lat`, `lon`) VALUES

		(:email,:mobail,:watsapp,:telegram,:instagram,:address,:lat,:lon)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':email'=>$email,':mobail'=>$mobail,':watsapp'=>$watsapp,':telegram'=>$telegram,':instagram'=>$instagram,':address'=>$address,':lat'=>$lat,':lon'=>$lon));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

public function updatedata($id,$email,$mobail,$watsapp,$telegram,$instagram,$address,$lat,$lon){
	
 $sql="UPDATE `tamas` SET email=:email ,watsapp`=:watsapp,telegram=:telegram,instagram=:instagram,address=:address,lat=:lat,lon=:lon WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':email'=>$email,':mobail'=>$mobail,':watsapp'=>$watsapp,':telegram'=>$telegram,'instagram`'=>$instagram,'address'=>$address,':lat'=>$lat,':lon'=>$lon));
		
 
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