

<h3>Добавление записи</h3>
<form action="" method="post">
Название:<input type="text" name="title"><br>
Контент:<br><textarea id="" cols="30" rows="10" name="text"></textarea> <br>
<input type="submit" name="submit" value="Отправить">
</form>

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $text = $_POST['text'];

    $query = "INSERT INTO `news` (`title`, `text`) VALUES ( '$title', '$text')";
    $res = mysqli_query($data, $query);
    
    if ($res) {
        echo "Record added successfully";
        header('Location:/admin');
    } else {
        echo "Error adding record";
    }
} 