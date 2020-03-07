<?php

class Controller_Login extends Controller
{
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index()
	{
		$login_status = "";

		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];
			
			/*
			Производим аутентификацию, сравнивая полученные значения со значениями прописанными в коде.
			Такое решение не верно с точки зрения безопсаности и сделано для упрощения примера.
			Логин и пароль должны храниться в БД, причем пароль должен быть захеширован.
			*/
			if($login=="admin" && $password=="12345")
			{
				$login_status = "access_granted";
				
				session_start(); echo $_SESSION['admin'];
				$_SESSION['admin'] = $password;
				$_SESSION['user'] = 'admin';

				header('Location:/admin/');
			}else if($login !="admin"){
				$users = $this->model->get_data();
				foreach($users as $row){
					if($row['login'] == $login && $row['password'] == $password){
						session_start();
						$_SESSION['user'] = $login;
						$_SESSION['user_id'] = $row['id'];
						header('Location:/');
					}
					else{
						$login_status = "access_denied";
					}
				}
			}
			else
			{
				$login_status = "access_denied";
			}
		}
		else
		{
			$login_status = "";
		}
		$data = [$login_status];
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
	
}
