<?php
class Model_Portfolio extends Model
{
	
	public function get_data_portfolio()
	{	
		
		$query = "SELECT * FROM portfolio";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}
	public function get_data_news()
	{	
		
		$query = "SELECT * FROM news";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}
	public function delete($id){
		$query = "DELETE FROM portfolio WHERE id=$id";
		$res = mysqli_query($this->mysqli, $query);

		if ($res) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record";
		}
		
	}
	public function update($id){
		
	}
}
