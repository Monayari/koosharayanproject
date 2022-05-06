<?php


class Filter  extends Dbconnection
{
	  public function __construct()
	{
		parent::__construct();
	}
	public function filter_empty($data)
	{
		$data=trim($data);
		if(empty($data))
		{
			return true;
		}
		return false;
	}
	
	public function filter_email($email){

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	} else {
		return false;
	}
}

}







?>