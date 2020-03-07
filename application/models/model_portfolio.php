<?php
class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		$query = "SELECT * FROM portfolio";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}


}

