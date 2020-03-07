<?php
class Model_Users extends Model
{
	
	public function get_data()
	{	
		
		$query = "SELECT * FROM auth";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}
    public function delete($id)
	{	
		
		$query = "DELETE FROM auth WHERE id=$id";
		$res = mysqli_query($this->mysqli, $query);

		if ($res) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record";
		}
		
		
	}

}

