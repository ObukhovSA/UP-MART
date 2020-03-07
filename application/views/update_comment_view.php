<?php
if(!isset($_SESSION['backur'])){
    $_SESSION['backur'] = $_SERVER['HTTP_REFERER'];
}

if ($data[1] != null) {
    $mysqli = $data[0];
    $id = $data[1];
    $query = "SELECT * FROM comment WHERE id=$id";
    $res = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $author = $row['author'];
        $text = $row['text'];
    }
}
?>
<form action="" method="post">
       
       <label>Описание: <br><textarea name="text" cols="30" rows="10"><?php echo $text ?></textarea> <br>
       <input type="submit" name="submit" value="Обновить">
</form>

<?php 
    if(isset($_POST['submit'])){
        $text_upd = $_POST['text'];
        
        $query = "UPDATE `comment` SET `text` = '$text_upd' WHERE `comment`.`id` = $id";
        $res = mysqli_query($mysqli, $query);
        
        if ($res) {
            $url = $_SESSION['backur'];
            echo "Record updated successfully <br>";
            echo "<a href='$url'> Назад </a>";
        } else {
            echo "Error updating record";
        }
    }