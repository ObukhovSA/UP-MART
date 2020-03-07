<?php
class Model_Signup extends Model
{
	
	public function signup($login,$password)
	{	
		
		$query = "INSERT INTO `auth` (`login`, `password`) VALUES ( '$login', '$password')";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}
	
	}
