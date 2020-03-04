<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{
		$query = 'SELECT * FROM portfolio';

        $result = mysqli_query($this->link, $query);

        return $result;

	}
}

?>
