<?php 

	namespace App\controllers;
	use App\support\Database;

	/**
	 * Student data and file management
	 */
	class Student extends Database
	{
		// data catch from student form
		public function addNewStudent($name,$email,$cell,$photo){
			
			//data send to insert method
			$data=$this -> insert('students',[
				'name' => $name,
				'email'=> $email,
				'cell' => $cell
			]);
			if ($data) {
				return "<p class='alert alert-success'>Student added successful !<button class='btn btn-primary btn-sm close' data-dismiss='alert'>&times</button></p>";
			}

		}
		
	}