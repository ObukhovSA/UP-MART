<?php

class Controller_News extends Controller
{
	
	function __construct()
	{
		$this->model = new Model_News();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('news_view.php', 'template_view.php', $data);
	}
	function action_watch($id){
		session_start();
		if(isset($_POST['text'])){
			$author = $_SESSION['user'];
			$text = $_POST['text'];
			$news_id = $id;
			$this->model->add_comment($author,$text, $news_id);
		}
		$page = $this->model->get_page($id);
		$comments = $this->model->get_page_comms($id);
		$data = [$page, $comments];
		$this->view->generate('news_view_page.php', 'template_view.php', $data);
	}
	function action_delete_comment($id){
		session_start();
		$this->model->delete($id);
		header('Location:/' . $_SERVER['HTTP_REFERER']);
	}
	function action_update_comment($id){
		session_start();
		$mysqli = $this->model->mysqli;
		$data = [$mysqli, $id];
		$this->view->generate('update_comment_view.php', 'template_view.php', $data);
	}
}
