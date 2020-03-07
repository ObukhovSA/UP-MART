<?php
foreach($data[0] as $row)
{
    echo "<h2>".$row['title']."</h2><br>";
    echo "<p>".$row['text']."</p><br>";
}
?>
<a href="/news">Назад</a>

<h3>Комментарии:</h3>
<?php
foreach($data[1] as $row)
{
    $comm_id = $row['id'];
    echo "<div class='comment'>";
    
    echo "<b>".$row['author']."</b>";
    if($_SESSION['user'] == $row['author'] || $_SESSION['user'] == 'admin'){
        echo "<a href='/news/delete_comment/$comm_id' class='delete_comment'>Удалить</a>";
    }
    if($_SESSION['user'] == 'admin'){
        echo "<a href='/news/update_comment/$comm_id' class='update_comment'>Обновить</a>";
    }
    echo "<p>".$row['text']."</p><br></div>";
    
}

if(isset($_SESSION['user'])){


?>

<form action="" method="post">
    <textarea name="text" cols="30" rows="10" placeholder="Введите комментарий здесь"></textarea>
    <input type="submit" value="Добавить">
</form>


<?php } ?>