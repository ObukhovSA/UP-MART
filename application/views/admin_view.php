



<h1>Панель администрирования</h1>
<p>
Админка...
<h3>Все записи</h3>
<h4>Портфолио</h4>
<?php

	foreach($data[0] as $row)
	{
        $record_id = $row['id'];
		echo $row['Site']."  <a href='admin/delete/$record_id' class='delete_record'>Удалить</a>"."  <a href='/admin/update/$record_id' class='update_record'>Обновить</a>".'<br>';
	}
	
?>
</p>
<a href="/admin/add_port" class="add_record">Добавить запись</a>
<h4>Новости</h4>
<?php

foreach($data[1] as $row)
	{
        $record_news_id = $row['id'];
		echo $row['title']."  <a href='admin/delete/$record_news_id' class='delete_record'>Удалить</a>"."  <a href='admin/news_update/$record_news_id' class='update_record'>Обновить</a>".'<br>';
	}
?>
<a href="/admin/add_news" class="add_record">Добавить запись</a>