<?php
class Model_News extends Model
{
	
	public function get_data()
	{	
		
		$query = "SELECT * FROM news";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}
	public function get_page($id)
	{	
		
		$query = "SELECT * FROM news WHERE id=$id";

		$res = mysqli_query($this->mysqli, $query);

        return $res;
		
		
	}
	public function get_page_comms($id)
	{	
		
		$query = "SELECT * FROM comment INNER JOIN news_comment ON comment.id = news_comment.comm_id WHERE news_comment.news_id=$id";

		$res = mysqli_query($this->mysqli, $query);


        return $res;
		
		
	}
	public function add_comment($author,$text,$news_id){
		$query = "INSERT INTO `comment` (`author`, `text`) VALUES ( '$author', '$text')";

		$insert_res = mysqli_query($this->mysqli, $query);
		$comm_id = mysqli_insert_id($this->mysqli);

		$tie_query = "INSERT INTO `news_comment` (`news_id`, `comm_id`) VALUES ( '$news_id', '$comm_id')";

		$res = mysqli_query($this->mysqli, $tie_query);

        return $res;
	}
	public function delete($id){
		$query = "DELETE FROM comment WHERE id=$id";
		$res = mysqli_query($this->mysqli, $query);

		if ($res) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record";
		}
	}

}

