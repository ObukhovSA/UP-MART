

<h3>Добавление записи</h3>
<form action="" method="post">
Год:<input type="number" name="year"><br>
Имя сайта:<input type="text" name="site_name"><br>
Описание:<br><textarea id="" cols="30" rows="10" name="description"></textarea> <br>
<input type="submit" name="submit" value="Отправить">
</form>

<?php
if(isset($_POST['submit'])){
    $year = $_POST['year'];
    $site_name = $_POST['site_name'];
    $description = $_POST['description'];

    $query = "INSERT INTO `portfolio` (`Year`, `Site`, `Description`) VALUES ( '$year', '$site_name', '$description')";
    $res = mysqli_query($data, $query);
    
    if ($res) {
        echo "Record added successfully";
        header('Location:/admin');
    } else {
        echo "Error adding record";
    }
} 