<?php

class Controller_Admin extends Controller
{
	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	
	function action_index()
	{
		session_start();
		
		if ( $_SESSION['admin'] == "12345" )
		{
			$port_data = $this->model->get_data_portfolio();
			$news_data = $this->model->get_data_news();
			$data = [$port_data, $news_data];
			$this->view->generate('admin_view.php', 'template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	function action_add_port()
	{
		session_start();

		if ( $_SESSION['admin'] == "12345" )
		{
			$data = $this->model->mysqli;
			$this->view->generate('admin_add_port_view.php', 'template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	function action_add_news()
	{
		session_start();

		if ( $_SESSION['admin'] == "12345" )
		{
			$data = $this->model->mysqli;
			$this->view->generate('admin_add_news_view.php', 'template_view.php', $data);
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
			$this->view->generate('admin_update_port_view.php', 'template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}
	}
	function action_news_update($id){
		session_start();

		if ( $_SESSION['admin'] == "12345" )
		{
			$mysqli = $this->model->mysqli;
			$data = [$mysqli, $id];
			$this->view->generate('admin_update_news_view.php', 'template_view.php', $data);
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
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
