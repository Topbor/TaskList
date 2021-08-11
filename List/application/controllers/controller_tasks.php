<?php

class Controller_Tasks extends Controller
{
	
	function All()
	{
		$data = $this->model->get_all();
		$this->view->generate('tasks.php', 'template.php', $data);
	}
	function Show($task_id)
	{
		$data = $this->model->get_one($task_id);
		$this->view->generate('one_task.php', 'template.php', $data);
	}	
	function New_form()
	{
		$this->view->generate('new_task_form.php', 'template.php');
	}
	function New($title,$responsible,$deadline,$status)
	{	
		date_default_timezone_set('UTC');
		$date1 = new DateTime($deadline);
		$date2 = new DateTime(date("y-m-d"));
			if(parent::validation(array($title,$responsible,$deadline,$status)&& $date1>=$date2)){
			$data = $this->model->new($title,$responsible,$deadline,$status);
			$this->All();
			}
			else{
				$this->view->generate('new_task_form_err.php', 'template.php');
			}	
	}
	function Delete($id)
	{
		$data = $this->model->delete($id);
		$this->All();
	}
	function Edit_form($id)
	{
		$data = $this->model->edit_form($id);
		$this->view->generate('edit_task_form.php', 'template.php', $data);
	}
	function Update($title,$responsible,$deadline,$status,$id)
	{
		date_default_timezone_set('UTC');
		$date1 = new DateTime($deadline);
		$date2 = new DateTime(date("y-m-d"));
		
			if(parent::validation(array($title,$responsible,$deadline,$status)&& $date1>=$date2)){
			$data = $this->model->update($title,$responsible,$deadline,$status,$id);
			$this->All();
			}
			else{
				$data = $this->model->edit_form($id);
				$this->view->generate('edit_task_form_err.php', 'template.php',$data);
			}
	}
	function Import_form(){
		$this->view->generate('import_task_form.php', 'template.php');
	}
	function Import_save(){
		
				if(parent::move_file()){

						if ( parent::read_file() ) {
							$this->All();
						} else {
							echo SimpleXLSX::parseError();
						}
				}
				else{
					$this->view->generate('import_task_form_err.php', 'template.php');
				}
	}
}
