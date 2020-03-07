<?php
class Model_Login extends Model
{
	
	public function get_data()
	{	
		
		$query = "SELECT * FROM auth";

		$res = mysqli_query($this->mysqli, $query);
            return $res;	
		
	}
	
	}
