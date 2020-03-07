
<h1>Панель управления учётками юзеров</h1>
<p>

<?php

	foreach($data as $row)
	{
        $record_id = $row['id'];
		echo $row['login']."  <a href='/users/delete/$record_id' class='delete_record'>Удалить</a>"."  <a href='/users/update/$record_id' class='update_record'>Обновить</a>".'<br>';
	}
	
?>
</p>