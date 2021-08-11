<?php

class Model
{
	function __construct()
	{
			$dblocation = "localhost";
			$dbuser = "root";
			$dbpasswd = "";
			$dbname="task_list";
			$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);
			mysqli_set_charset($link, "utf8");
			//var_dump($link);
			$this->link=$link;	
    }
	

}