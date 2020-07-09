<?php 

	namespace App\support;
	use mysqli;
	/**
	 * Database management(Database connection,Data add,Data delete,Data show,Data edit)
	 */
	abstract class Database 
	{
		private $host='localhost';
		private $user='root';
		private $pass='';
		private $db='obj';
		private $connection;

		private function dbConnect(){
			return $this -> connection = new mysqli($this -> host,$this -> user,$this -> pass,$this -> db);
		}
		
	}