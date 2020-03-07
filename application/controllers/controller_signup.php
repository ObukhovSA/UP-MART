<?php

class Controller_Signup extends Controller
{
	function __construct()
	{
		$this->model = new Model_Signup();
		$this->view = new View();
	}
	function action_index()
	{
        $data = null;

		if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['password_repeat']))
		{
			$login = $_POST['login'];
            $password =$_POST['password'];
            $password_repeat = $_POST['password_repeat'];
            
            if($password == $password_repeat){
                $this->model->signup($login,$password);
                session_start();
                $_SESSION['user'] = $login;
                header('Location:/');
            }else{
                $data = 'пароли не совпадают';
            }
			
		}
		
		$this->view->generate('signup_view.php', 'template_view.php', $data);
	}
	
}
