<?php
require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';
include 'application/models/model_tasks.php';
include 'application/controllers/controller_tasks.php';

	$controller = new controller_tasks;

	if($_GET==null&&$_POST==null){
		$controller->All();
	}
	else if($_POST!==null && isset($_POST["sub"]) && $_POST["status"]=='addnew'){
		$controller->New($_POST["title"],$_POST["responsible"],$_POST["deadline"],$_POST["stat"]);
	}
	else if($_POST!==null && isset($_POST["sub"]) && $_POST["status"]=='update'){
		$controller->Update($_POST["title"],$_POST["responsible"],$_POST["deadline"],$_POST["stat"],$_POST["id"]);
	}
	else if($_POST!==null && isset($_POST["sub"]) && $_POST["status"]=='import_save'){
		$controller->Import_save();
	}
	else if($_GET!==null && $_GET["status"]=='show'){	
		$controller->Show($_GET["TaskID"]);
	}
	else if($_GET!==null && $_GET["status"]=='new'){
		$controller->New_form();
	}
	else if($_GET!==null && $_GET["status"]=='import'){
		$controller->Import_form();
	}
	else if($_GET!==null && $_GET["status"]=='edit'){	
		$controller->Edit_form($_GET["TaskID"]);
	}
	else if($_GET!==null && $_GET["status"]=='delete'){	
		$controller->Delete($_GET["TaskID"]);
	}
	
	
	
?>
