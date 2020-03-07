<?php

class Controller_Users extends Controller
{
	function __construct()
	{
		$this->model = new Model_Users();
		$this->view = new View();
	}
	
	function action_index()
	{
		session_start();
		
		if ( $_SESSION['admin'] == "12345" )
		{
			$data = $this->model->get_data();
			
			
			$this->view->generate('admin_users_view.php', 'template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

    }
    function action_update($id){
		session_start();

		if ( $_SESSION['admin'] == "12345" )
		{
			$mysqli = $this->model->mysqli;
			$data = [$mysqli, $id];
			$this->view->generate('admin_update_users_view.php', 'template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}
	}
    function action_delete($id){
		$this->model->delete($id);
		header('Location:/admin');

	}
}