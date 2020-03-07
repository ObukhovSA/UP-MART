<?php
if ($data[1] != null) {
    $mysqli = $data[0];
    $id = $data[1];
    $query = "SELECT * FROM news WHERE id=$id";
    $res = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $title = $row['title'];
        $text = $row['text'];
    }
}
?>
<form action="" method="post">
       <label>Название : <input type="text" name="title" value="<?php echo $title ?>" required></label> <br>
       <label>Контент: <br><textarea name="text" cols="30" rows="10"><?php echo $text ?></textarea> <br>
       <input type="submit" name="submit" value="Обновить">
</form>

<?php 
    if(isset($_POST['submit'])){
        $title_upd = $_POST['title'];
        $text_upd = $_POST['text'];
        
        $query = "UPDATE `news` SET `title` = '$title_upd', `text` = '$text_upd' WHERE `news`.`id` = $id";
        $res = mysqli_query($mysqli, $query);
        if ($res) {
            echo "Record updated successfully <br>";
            echo "<a href='/admin'> Назад </a>";
        } else {
            echo "Error updating record";
        }
    }
     