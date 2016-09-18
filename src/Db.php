<?php
class Db {
	protected static $connection;
	
	public function connect()
	{
		if(!isset(self::$connection))
		{
			// parse config file
			$config = parse_ini_file('../resources/config/config.ini');
			// connect
			self::$connection = new mysqli($config['db_host'], $config['db_user'], $config['db_passwd'], $config['db_name']);
			
			// check connection
			if(self::$connection === false)
				die("Verbindung zur Datenbank konnte nicht hergestellt werden");
		}
		return self::$connection;
	}
	
	public function query($query)
	{
		// connect
		$con = $this->connect();
		
		$result = $con->query($query);
		return $result;
	}
	
	public function select($query)
	{
		$rows = array();
		$result = $this->query($query);
		
		if($result === false) 
			return false;
		
		while ($row = $result->fetch_assoc()) 
		{
			$rows[] = $row;
		}
		
		return $rows;	
	}
	
	public function error() 
	{
		$connection = $this->connect();
		return $connection->error;
	}
	
}