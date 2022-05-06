<?php
 require_once('connect.php');
 
class Porseshpasokh extends Dbconnection
{
	public function __construct()
	{
		parent::__construct();
	}


	public function showAll($id){
		
$data=array();
		$sql="SELECT * FROM porsesh_pasokh WHERE id=".$id ;
		$q = $this->connection->query($sql);
		while($r = $q->fetch(PDO::FETCH_ASSOC)){

			$data[]=$r;
		}
	 return $data;
	 
	 }
	
	 
	 public function getById($id)
	{
			$sql="SELECT * FROM porsesh_pasokh WHERE id=".$id ;
		$query=$this->connection->query($sql);
		$query->execute(array(':id'=>$id));
		$row=$query->fetch(PDO::FETCH_ASSOC);
		
		return $row;
	}

	 
	 
	public function Search($code){
		
    
		$sql="SELECT * FROM porsesh_pasokh  WHERE coder='$code'";
		$q = $this->connection->query($sql);

		$r = $q->fetch(PDO::FETCH_ASSOC);
		

	 return $r;
	 
	 }

	

	 public function deleteData($id){
		 
		$sql="DELETE FROM porsesh-pasokh WHERE id=:id";
		$q = $this->connection->prepare($sql);
		$q->execute(array(':id'=>$id));
 
		return true;
	 }


    public function insertData($porsesh,$title,$coder,$date,$name,$email){

		$sql ="INSERT INTO `porsesh_pasokh`( `porsesh`, `title`, `coder`,`date` ,`name`, `email`) VALUES 

		(:porsesh,:title,:coder,:date,:name,:email)";
		
		$q = $this->connection->prepare($sql);
		
		$q->execute(array(':porsesh'=>$porsesh,':title'=>$title,':coder'=>$coder,':date'=>$date,':name'=>$name,':email'=>$email));
		
           $con = $q->rowcount();

         if($con==1){

              return true;
		 }

      else{
            return false;
			 }
			

	  }

 public function randomcode()
 {	
	  $code=bin2hex(openssl_random_pseudo_bytes(3));

	 $sql="SELECT * FROM porsesh_pasokh WHERE coder='$code'";
	 $q = $this->connection->query($sql);
	 
		$r=$q->fetch(PDO::FETCH_ASSOC);
	 if($r!='')
	 {
		return $this-> randomcode();

	 }
	 else{
		 return $code;
	 }


 }
public function updatedata($id,$porsesh,$coder,$data,$name,$email,$state){
	
 $sql="UPDATE `porsesh_pasokh` SET title=:title ,porsesh=:porsesh,coder=:coder,data=:data,name=:name,email=:email,stat=:state WHERE id=:id";
 
 $q = $this->connection->prepare($sql);
 
$q->execute(array(':id'=>$id,':porsesh'=>$porsesh,':coder'=>$coder,':data'=>$coder,':data'=>$data,'name'=>$name,'email'=>$email,':state'=>$state));
		
 
 $con=$q->rowcount();
 
 if($con==1)
 {
	 return true;
 }
 else{
	 
	 return false;
 }
 
}

		 public function lastId(){
		 
		 return $this->connection->lastInsertId();
		 
	 }


}

?>

