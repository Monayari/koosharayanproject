<?php

class Dbconnection
{
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $db="kosharayan";
	private $char="utf8";

	protected $connection;
	
	public function __construct()
	{
		if(!isset($this->connection))
		{
			$this->connection= new PDO("mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->char,$this->user);
		
		if(!$this->connection)
			{
				echo  "Cannot connect to database server";
                exit;
			}
			        return $this->connection;

		}
	}
}

	
	









?>