<?php

class Model_Tasks extends Model
{
	public $link;
	public $maxID;
	
	public function get_all()
	{	
		$all = mysqli_query($this->link, "SELECT * FROM tasks");
		$tasks=array();
		while(($obj = mysqli_fetch_object($all)) != null){
		$tasks[] = $obj;
		}
		return $tasks;
	}
	public function get_one($id)
	{	
		$one = mysqli_query($this->link, "SELECT * FROM tasks where id=$id");
		$task=array(mysqli_fetch_object($one));
		return $task;
	}
	public function new($title,$responsible,$deadline,$status)
	{	
		$id=mysqli_query($this->link, "SELECT Max(id) FROM tasks");	
		while($rows = mysqli_fetch_array($id))
		{$this->maxID=$rows['Max(id)']+1;	}
		$r = mysqli_query($this->link, "INSERT INTO tasks (id, title, responsible, deadline,status)
		VALUES('$this->maxID','$title', '$responsible','$deadline','$status')");
	}
	
	public function delete($id)
	{	
		$r = mysqli_query($this->link, "DELETE FROM tasks WHERE ID=$id");
	}
	
	public function edit_form($id){
		$one = mysqli_query($this->link, "SELECT * FROM tasks where id=$id");
		$task=array(mysqli_fetch_object($one));
		return $task;
	}
	public function update($title,$responsible,$deadline,$status,$id)
	{
		$r = mysqli_query($this->link, "UPDATE tasks
		SET  title= '$title', responsible='$responsible', deadline='$deadline', status='$status'
		WHERE ID = $id;");
	}
}
