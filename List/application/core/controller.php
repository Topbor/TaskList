<?php

class Controller {
	
	public $model;
	public $view;
	public $uploadfile;

	function __construct()
	{
		$this->view = new View();
		$this->model = new Model_Tasks();
		require_once('application/res/SimpleXLXS.php');
	}
	function validation($array){
		$bool=true;
		foreach($array as $value){
			if(isset($value)&&$value!==""){
				$bool=true;
			}
			else $bool=false;
		}
		return $bool;
	}
	function move_file(){
		$uploaddir = 'application/files/';
		$this->uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		if(isset($_FILES['userfile'])&&
		$_FILES['userfile']['size']<=$_POST['MAX_FILE_SIZE']&& 
		move_uploaded_file($_FILES['userfile']['tmp_name'], $this->uploadfile)){
			return true;
		}
		else return false;

	}
	function read_file(){
		if ( $xlsx = SimpleXLSX::parse($this->uploadfile) ) {
			$rows=$xlsx->rows();
			array_shift($rows);
			foreach($rows as $row){
				$data = $this->model->new($row[0],$row[1],$row[2],$row[3]);
			}
			return true;
		} 
		else return false;
	}
}
