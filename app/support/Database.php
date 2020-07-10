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

		//database connection
		private function dbConnect(){
			return $this -> connection = new mysqli($this -> host,$this -> user,$this -> pass,$this -> db);
		}
		public function insert($table, array $data){

			//dividing array kyes from $data array
			$array_kyes = array_keys($data);
			//making a string(SQL collumn) from $array_kyes array
			$col=implode(",", $array_kyes);


			//dividing array values from $data array
			$array_values = array_values($data);
			//making a string(SQL values) from $array_values array
			//step 1 ------------>
			foreach ($array_values as $values) {
				$value_array[]="'".$values."'";
			}
			//step 2 ------------>
			$form_values=implode(",", $value_array);
			




			//query for data insert to student table 
			$sql="INSERT INTO $table ($col) VALUES ($form_values)";
			$insert=$this -> dbConnect() -> query($sql);
			if ($insert) {
				return true;
			}

		}





		
	}